<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CarCategory extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function pack(){
        return $this->belongsTo(Pack::class);
    }

    public function carReq(){
        return $this->belongsTo(carReq::class);
    }

    public function getRouteKeyName()
    {
        return 'category_slug';
    }


}
