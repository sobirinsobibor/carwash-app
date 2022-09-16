<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarCategory;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('search')){
            return view('dashboard.vehicle.carExamples.index', [
                'cars' => Car::latest()->filter(request(['search']))->paginate(10)->withQueryString(),
                'carCategories' => CarCategory::all()
            ]);
        }else{
            return view('dashboard.vehicle.carExamples.index', [
                'cars' => DB::table('cars')->paginate(5),
                'carCategories' => CarCategory::all()
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
        return view('dashboard.vehicle.carexamples.create', [
            "carCategories" => CarCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        $validatedData = $request->validate([
            'car_name' => 'required|unique:cars',
            'carCategory_id' => 'required'
        ]);

        Car::create($validatedData);
        return redirect('/dashboard/carexamples')->with('success', "Car has been Added");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        // dd();
        if(request('carexample')){
            return view('dashboard.vehicle.carexamples.edit', [
                'car' => Car::where('id', request('carexample'))->get(),
                "carCategories" => CarCategory::all()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        // dd($request->id);
        $cars = Car::where('id', $request->id )->get();
        $rules = [
            'car_name' => 'required',
            'carCategory_id' => 'required'
        ];

        if($request->car_name != $cars[0]->car_name){
            $rules['car_name'] = 'required|unique:cars';
        }

        $validatedData = $request->validate($rules);
        Car::where('id', $request->id)->update($validatedData);
        return redirect('/dashboard/carexamples')->with('success', "Car has been Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Car $car)
    {
        Car::destroy($request->id);
        return redirect('/dashboard/carexamples')->with('success', "Car has been deleted");

    }
}
