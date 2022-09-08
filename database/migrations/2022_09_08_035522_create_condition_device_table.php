<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition_device', function (Blueprint $table) {
            $table->id();
            $table->foreignId('condition_id')->constrained();
            $table->foreignId('device_id')->constrained();
            $table->float('deduction', 10, 2);
            $table->string('type');
            $table->string('category');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condition_device');
    }
};
