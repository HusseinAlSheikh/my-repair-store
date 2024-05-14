<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Modules\Stocks\Entities\StockTransaction;
use \Modules\Stocks\Entities\Product;


class CreateStockTransactionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_transaction_products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(StockTransaction::class);
            $table->foreignIdFor(Product::class);
            $table->bigInteger('quantity');
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
        Schema::dropIfExists('stock_transaction_products');
    }
}
