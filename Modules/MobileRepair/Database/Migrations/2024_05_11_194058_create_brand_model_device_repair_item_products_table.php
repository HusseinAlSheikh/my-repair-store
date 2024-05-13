<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Modules\MobileRepair\Entities\BrandModelDeviceRepairItem;
use \Modules\Stocks\Entities\Product;

class CreateBrandModelDeviceRepairItemProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_model_device_repair_item_products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BrandModelDeviceRepairItem::class);
            $table->foreignIdFor(Product::class);
            $table->integer('quantity');
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
        Schema::dropIfExists('brand_model_device_repair_item_products');
    }
}
