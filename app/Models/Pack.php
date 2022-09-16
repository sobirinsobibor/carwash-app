<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

  

    protected $guarded = [
        'id'
    ];

    public function carCategory(){
        return $this->hasMany(CarCategory::class);
    }

    public function servicepack(){
        return $this->hasMany(ServicePack::class);
    }
}
