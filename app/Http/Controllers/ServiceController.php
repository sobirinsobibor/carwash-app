<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Support\Facades\DB;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('search')){
            return view('dashboard.service.service.index', [
                'services' => Service::latest()->filter(request(['search']))->paginate(10)->withQueryString()

            ]);
        }else{
            return view('dashboard.service.service.index', [
                'services' => DB::table('services')->paginate(5)
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
        return view('dashboard.service.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        
        $validatedData = $request->validate([
            'service_name' => 'required|max:255|unique:services',
            'service_desc' => 'required|max:255|'
        ]);

        // dd($request->service_desc);
        Service::create($validatedData);

        return redirect('/dashboard/services')->with('success', "New Service Successfully Added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        // dd($service->id);
        return view('dashboard.service.service.edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        // dd($service->service_name);
        $rules = [
            'service_name' => 'required|max:255',
            'service_desc' => 'required|max:255'
        ];

        if($request->service_name != $service->service_name){
            $rules['service_name'] = 'required|max:255|unique:services';
        }

        $validatedData = $request->validate($rules);

        // dd($request->service_desc);
        Service::where('id', $service->id)->update($validatedData);

        return redirect('/dashboard/services')->with('success', "New Service Successfully Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        // dd($service->id);
        Service::destroy($service->id);
        return redirect('/dashboard/services')->with('success', "New Service Successfully deleted!");

    }
}
