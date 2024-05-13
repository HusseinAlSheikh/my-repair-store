<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Modules\MobileRepair\Entities\BrandModelDeviceRepairItem;
use \Modules\MobileRepair\Entities\RepairRequest;

class CreateRepairRequestItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_request_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BrandModelDeviceRepairItem::class);
            $table->foreignIdFor(RepairRequest::class);
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
        Schema::dropIfExists('repair_request_items');
    }
}
