<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\ServicePack;
use Illuminate\Http\Request;
use App\Http\Requests\StorePackRequest;
use App\Http\Requests\UpdatePackRequest;
use App\Models\CarCategory;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carCatId = request('idCar');
        return view('dashboard.pack.create', [
            'carCategory' =>  CarCategory::where('id', $carCatId)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackRequest $request)
    {
        $validatedData = $request->validate([
            'pack_name' => 'required',
            'carCategory_id' => 'required',
            'price' => 'required',
            'time' => 'required'
        ]);

        Pack::create($validatedData);

        return redirect('/dashboard/servicePackages?carcategory='.$request->carCategory_id)->with('success', "New Package Successfully Added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function show(Pack $pack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function edit(Pack $pack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackRequest  $request
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackRequest $request, Pack $pack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pack $pack, Request $request)
    {
        // dd($request->carCatId);
        Pack::destroy($pack->id);
        ServicePack::where('pack_id', $pack->id)->delete();
        return redirect('/dashboard/servicePackages?carcategory='.$request->carCatId)->with('success', "Package Successfully Deleted!");

    }
}
