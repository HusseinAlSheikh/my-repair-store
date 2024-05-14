<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Modules\Stocks\Entities\Unit;
use \Modules\Stocks\Entities\ProductCategory;
use \Modules\MobileRepair\Entities\Brand;
use \Modules\MobileRepair\Entities\BrandModel;
use \Modules\MobileRepair\Entities\BrandModelDevice;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Unit::class);
            $table->foreignIdFor(ProductCategory::class);
            $table->foreignIdFor(Brand::class)->nullable();
            $table->foreignIdFor(BrandModel::class)->nullable();
            $table->foreignIdFor(BrandModelDevice::class)->nullable();
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->integer('minimum_quantity');
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
        Schema::dropIfExists('products');
    }
}
