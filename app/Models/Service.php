<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function scopeFilter($query, array $filters){
        if(isset($filters['search']) ? $filters['search'] : false ){
            return $query->where('service_name', 'like', '%' . $filters['search'] . '%')
                         ->orWhere('service_desc', 'like', '%' . $filters['search'] . '%');              
        };
    }

    public function servicepack(){
        return $this->hasMany(ServicePack::class);
    }
}
