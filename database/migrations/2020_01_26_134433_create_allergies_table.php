<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllergiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('affected_id');
            $table->string('allergy_substances_id')->nullable();
            $table->date('verification')->nullable();
            $table->date('initialreaction')->nullable();
            $table->string('verified_by')->nullable();
            $table->boolean('suspicion')->default(false);
            $table->string('symptoms_id')->nullable();
            $table->string('emergency_medication')->nullable();
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
        Schema::dropIfExists('allergies');
    }
}