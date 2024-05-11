<?php

namespace Modules\Purchases\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseReturnProduct extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Purchases\Database\factories\PurchaseReturnProductFactory::new();
    }
}
