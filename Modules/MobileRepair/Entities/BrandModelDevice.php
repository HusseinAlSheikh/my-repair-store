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
}
