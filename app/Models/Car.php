<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function scopeFilter($query, array $filters){
        if(isset($filters['search']) ? $filters['search'] : false ){
            return $query->where('car_name', 'like', '%' . $filters['search'] . '%');             
        };
    }

    public function carCategory(){
        return $this->hasMany(CarCategory::class);
    }


    
}
