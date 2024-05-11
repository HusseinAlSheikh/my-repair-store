<?php

namespace Modules\Stocks\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockTransactionType extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Stocks\Database\factories\StockTransactionTypeFactory::new();
    }
}
