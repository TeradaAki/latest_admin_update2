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
        Schema::create('padala', function (Blueprint $table) {
            $table->id('padala_id');
            $table->foreignId('recipient_id')->constrained('recipient', 'recipient_id');
            $table->string('type_of_item');
            $table->decimal('weight', 8, 2); // Assuming you want to store weight with 2 decimal places
            $table->string('type_of_vehicle');
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
        Schema::dropIfExists('padala');
    }
};

