<?php

namespace Modules\MobileRepair\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Stocks\Entities\Product;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\MobileRepair\Database\factories\BrandFactory::new();
    }

    function repairCategory(){
        return $this->belongsTo(RepairCategory::class);
    }

    function brandModels(){
        return $this->hasMany(BrandModel::class);
    }

    function products(){
        return $this->hasMany(Product::class);
    }
}
