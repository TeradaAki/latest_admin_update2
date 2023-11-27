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
        if (!Schema::hasTable('driver')) {
            Schema::create('driver', function (Blueprint $table) {
                $table->id('driver_id');
                $table->string('email')->unique();
                $table->string('first_name');
                $table->string('last_name');
                $table->integer('phone_number')->unique();
                $table->date('date_of_birth');
                $table->integer('bank_account');
                $table->string('bank_holder');
                $table->string('vehicle_type');
                $table->string('driver_license_num');
                $table->string('password');
                $table->binary('license');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver');
    }
};
