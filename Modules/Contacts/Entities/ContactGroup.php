<?php

namespace Modules\Contacts\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactGroup extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Contacts\Database\factories\ContactGroupFactory::new();
    }


    function customers() {
        return $this->hasMany(Customer::class);
    }

    
    function supplier() {
        return $this->hasMany(Supplier::class);
    }
    
}
