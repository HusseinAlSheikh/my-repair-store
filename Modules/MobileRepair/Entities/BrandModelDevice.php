<?php

namespace Modules\MobileRepair\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandModelDevice extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\MobileRepair\Database\factories\BrandModelDeviceFactory::new();
    }


    function products(){
        return $this->hasMany(Product::class);
    }

    function brandModel(){
        return $this->belongsTo(BrandModel::class);
    }

    function brandModelDeviceRepairItems(){
        return $this->hasMany(BrandModelDeviceRepairItem::class);
    }

    function repairRequest(){
        return $this->hasMany(RepairRequest::class);
    }
}
