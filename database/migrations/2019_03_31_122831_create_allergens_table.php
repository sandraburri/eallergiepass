<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllergensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergens', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('type'); // Nur zu Übungszwecken, nachher wieder löschen!
            $table->timestamps();

            //Daten werden von FHIR geholt und hier abgespitzt
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allergens');
    }
}
