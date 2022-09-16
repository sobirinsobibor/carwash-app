<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePack extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function Pack(){
        return $this->belongsTo(Pack::class);
    }
}
