<?php

namespace App\Http\Controllers;

use App\Models\CarCategory;
use App\Models\Car;
use App\Models\Pack;
use App\Models\CarReq;
use App\Models\Service;
use App\Models\ServicePack;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home', [
            "carCategories" => CarCategory::all(),
            "services" => Service::all(),
            "requirements" => CarReq::all(),
            "cars" => Car::all(),
            "packs" => Pack::all(),
            "servicePacks" => ServicePack::all()
        ]);
    }
}
