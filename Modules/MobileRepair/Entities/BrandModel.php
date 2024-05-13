<?php

namespace Modules\MobileRepair\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Stocks\Entities\Product;

class BrandModel extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\MobileRepair\Database\factories\BrandModelFactory::new();
    }

    function brand(){
        return $this->belongsTo(Brand::class);
    }

    function brandModelDevices(){
        return $this->hasMany(BrandModelDevice::class);
    }


    function products(){
        return $this->hasMany(Product::class);
    }
}
