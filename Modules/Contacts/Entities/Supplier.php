<?php

namespace Modules\Contacts\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Stocks\Entities\Product;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Contacts\Database\factories\SupplierFactory::new();
    }

    function contactGroup() {
        return $this->belongsTo(ContactGroup::class);
    }


    function products() {
        return $this->belongsToMany(Product::class,'supplier_products');
    }

}
