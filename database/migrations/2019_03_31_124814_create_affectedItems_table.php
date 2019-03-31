<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectedItems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('affected_id');
            $table->string('type');
            $table->date('verification')->nullable();
            $table->boolean('suspicion')->default(false);
            $table->string('symptoms')->nullable();
            $table->string('medication')->nullable();
            $table->string('emergencyMedication')->nullable();
            $table->timestamps();

            $table->foreign('affected_id')->references('id')->on('affected');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affectedItems');
    }
}
