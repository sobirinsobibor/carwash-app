<?php

namespace App\Http\Controllers;

use App\Models\ServicePack;
use App\Models\Pack;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServicePackRequest;
use App\Http\Requests\UpdateServicePackRequest;
use App\Models\CarCategory;
use App\Models\Service;
use Illuminate\Support\Facades\DB;


class ServicePackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('carcategory')){
            $carCatid = request('carcategory');
            return view('dashboard.service.servicePacks.index', [
                'packs' => Pack::where('carcategory_id', request('carcategory'))->get(),
                'carCategories' => CarCategory::all(),
                'carCategories1' => CarCategory::where('id', request('carcategory'))->get(),
                'servicePacks' => ServicePack::all(),
                'carCatId' => $carCatid
            ]);
        }else{
            return view('dashboard.service.servicePacks.index', [
                'carCategories' => CarCategory::all(),
            ]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServicePackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicePackRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicePack  $servicePack
     * @return \Illuminate\Http\Response
     */
    public function show(ServicePack $servicePack)
    {
        // return view('dashboard.service.servicePacks.index',[
        //     'servicePack' => $servicePack
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicePack  $servicePack
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicePack $servicePack, Request $request)
    {
        // dd(request('pack_id'));
        return view('dashboard.service.servicePacks.edit', [
            "carCategories" => CarCategory::all(),
            'packs' => Pack::where('id', request('pack_id'))->get(),
            'pack_id' => request('pack_id'),
            'serviceItems' => ServicePack::where('pack_id', request('pack_id'))->get(),
            'services' => Service::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServicePackRequest  $request
     * @param  \App\Models\ServicePack  $servicePack
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicePackRequest $request, ServicePack $servicePack)
    {
        $lengthArr = count($request->service_id);
        $arr = $request->service_id;
        for($i = 0; $i < $lengthArr; $i++){
            if($arr[$i] == null){
                unset($arr[$i]);
            }else{
                $arr[$i] = (int) $arr[$i];
            }
        }

        for ($i = 0; $i < count($arr); $i++){
            $rules[] = [
                'pack_id' => $request->pack_id,
                'service_id' => $arr[$i],
                'created_at' => date('d-m-y h:i:s'),
                'updated_at' => date('d-m-y h:i:s')
            ];
        }

        // dd($request->pack_id);

        if($request->count_service != 0){
            ServicePack::where('pack_id', $request->pack_id)->delete();
            ServicePack::insert($rules);
            // echo 'bukan 0';
        }else{
            ServicePack::insert($rules);
            // echo '0';
        }

        $protocol = [
            'pack_name' => 'required',
            'carCategory_id' => 'required',
            'price' => 'required',
            'time' => 'required'
        ];

        $validatedData = $request->validate($protocol);

        Pack::where('id', $request->pack_id)->update($validatedData);

        return redirect('/dashboard/servicePackages?carcategory='.$request->carCategory_id)->with('success', "New Service Package Successfully Updated!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicePack  $servicePack
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicePack $servicePack)
    {
        //
    }
}
