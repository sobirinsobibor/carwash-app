<?php

namespace App\Http\Controllers;

use App\Models\CarCategory;
use App\Models\Car;
use App\Http\Requests\StoreCarCategoryRequest;
use App\Http\Requests\UpdateCarCategoryRequest;
use Illuminate\Http\Request;
use App\Models\CarReq;
use Illuminate\Support\Facades\DB;

class CarCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('carcategory')){
            return view('dashboard.vehicle.carCategories.index', [
                'cars' => Car::where('carCategory_id', request('carcategory'))->get(),
                'carCategories' => DB::table('car_categories')->paginate(5),
                'carCategories2' => CarCategory::where('id', request('carcategory'))->get()
            ]);
        }else if(request('carrequirement')){
            return view('dashboard.vehicle.carCategories.index', [
                'carReqs' => CarReq::where('carCategory_id', request('carrequirement'))->get(),
                'carCategories' => DB::table('car_categories')->paginate(5),
                'carCategories2' => CarCategory::where('id', request('carrequirement'))->get()
            ]);
        }else{
            return view('dashboard.vehicle.carCategories.index', [
                'carCategories' => DB::table('car_categories')->paginate(5)
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
        return view('dashboard.vehicle.carCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarCategoryRequest $request)
    {
        $validatedData = $request->validate([
            "category_name" => 'required|max:255|unique:car_categories',
            "category_slug" => 'required|max:255|unique:car_categories',
        ]);

        CarCategory::create($validatedData);

        return redirect('/dashboard/carcategories')->with('success', "New Category Successfully Added!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarCategory  $carCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CarCategory $carCategory)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarCategory  $carCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, CarCategory $carCategory)
    {
        if(request('carcategory')){
            return view('dashboard.vehicle.carcategories.edit', [
                'carCategory' => CarCategory::where('id', request('carcategory'))->get()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarCategoryRequest  $request
     * @param  \App\Models\CarCategory  $carCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarCategoryRequest $request, CarCategory $carCategory)
    {
        $id = $request->id;
        $rules = [
            'category_name' => 'required|max:255|unique:car_categories',
            'category_slug' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        CarCategory::where('id', $id)->update($validatedData);
        return redirect('/dashboard/carcategories')->with('success', "New Category Successfully Added!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarCategory  $carCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CarCategory $carCategory)
    {

        $id = $request['idCat'];
        $delete = CarCategory::destroy($id);

        if($delete){
            return redirect('/dashboard/carcategories')->with('success', "Category has been deleted");
        }else{
            dd($carCategory->id);
        }
        
    }
}
