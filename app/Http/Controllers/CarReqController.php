<?php

namespace App\Http\Controllers;

use App\Models\CarReq;
use App\Http\Requests\StoreCarReqRequest;
use App\Http\Requests\UpdateCarReqRequest;
use App\Models\CarCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CarReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.vehicle.carReqs.index', [
            'carReqs' => DB::table('car_reqs')->paginate(5),
            'carCategories' => CarCategory::all()
            // 'carCategories' => DB::table('car_categories')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.vehicle.carReqs.create', [
            'carCategories' => CarCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarReqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarReqRequest $request)
    {
        $validatedData = $request->validate([
            'requirement' => 'required|unique:car_reqs',
            'carCategory_id' => 'required'
        ]);

        CarReq::create($validatedData);
        return redirect('/dashboard/carrequirements')->with('success', "New Requirement Successfully Added!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarReq  $carReq
     * @return \Illuminate\Http\Response
     */
    public function show(CarReq $carReq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarReq  $carReq
     * @return \Illuminate\Http\Response
     */
    public function edit(CarReq $carReq)
    {
        if(request('carrequirement')){
            return view('dashboard.vehicle.carreqs.edit', [
                'carReqs' => CarReq::where('id',request('carrequirement'))->get(),
                'carCategories' => CarCategory::all()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarReqRequest  $request
     * @param  \App\Models\CarReq  $carReq
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarReqRequest $request, CarReq $carReq)
    {
        $carReq2 = CarReq::where('id', $request->id )->get();
        $rules = [
            'requirement' => 'required',
            'carCategory_id' => 'required'
        ];

        if($request->requirement != $carReq2[0]->requirement){
            $rules['requirement'] = 'required|unique:car_reqs';
        }

        $validatedData = $request->validate($rules);
        CarReq::where('id', $request->id)->update($validatedData);
        return redirect('/dashboard/carrequirements')->with('success', "New Requirement Successfully Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarReq  $carReq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CarReq $carReq)
    {
        CarReq::destroy($request->id);
        return redirect('/dashboard/carrequirements')->with('success', "Requirement has been deleted");
    }
}
