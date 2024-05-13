<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Modules\MobileRepair\Entities\BrandModelDevice;
use \Modules\Stocks\Entities\Currency;

class CreateBrandModelDeviceRepairItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_model_device_repair_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BrandModelDevice::class);
            $table->foreignIdFor(Currency::class);
            $table->json('name');
            $table->integer('cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand_model_device_repair_items');
    }
}
