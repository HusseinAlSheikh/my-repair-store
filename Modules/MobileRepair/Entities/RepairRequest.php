<?php

namespace Modules\MobileRepair\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RepairRequest extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\MobileRepair\Database\factories\RepairRequestFactory::new();
    }

    function repairStatus(){
        return $this->belongsTo(RepairStatus::class);
    }

    function brandModelDevice(){
        return $this->belongsTo(BrandModelDevice::class);
    }

}
