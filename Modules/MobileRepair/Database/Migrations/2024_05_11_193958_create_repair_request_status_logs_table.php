<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \App\Models\User;
use \Modules\MobileRepair\Entities\RepairRequest;
use \Modules\MobileRepair\Entities\RepairStatus;

class CreateRepairRequestStatusLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_request_status_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RepairRequest::class);
            $table->foreignIdFor(RepairStatus::class);
            $table->foreignIdFor(User::class);
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
        Schema::dropIfExists('repair_request_status_logs');
    }
}
