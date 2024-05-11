<?php

namespace Modules\MobileRepair\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\MobileRepair\Database\factories\BrandFactory::new();
    }
}
