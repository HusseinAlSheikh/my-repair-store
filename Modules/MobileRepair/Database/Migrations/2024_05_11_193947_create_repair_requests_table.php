<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Modules\Contacts\Entities\Customer;
use \Modules\MobileRepair\Entities\RepairStatus;
use \Modules\MobileRepair\Entities\BrandModelDevice;
use \Modules\Stocks\Entities\Currency;

class CreateRepairRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class);
            $table->foreignIdFor(RepairStatus::class);
            $table->foreignIdFor(BrandModelDevice::class);
            $table->foreignIdFor(Currency::class);
            $table->date('request_date');
            $table->boolean('finish');
            $table->integer('cost');
            $table->text('customer_notes');
            $table->text('user_notes');
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
        Schema::dropIfExists('repair_requests');
    }
}
