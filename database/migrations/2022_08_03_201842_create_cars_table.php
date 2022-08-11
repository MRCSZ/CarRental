<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #Schema::connection('mysql)->create('cars', function (Blueprint $table)) -   tworzenie tabeli dla innego
        Schema::create('cars', function (Blueprint $table) {                         # połączenia niż domyślne
            $table->id();
            $table->string('brand', 25);
            $table->string('model', 25);
            $table->year('production_year');
            $table->string('engine')->comment('Type of engine - Diesel/Petrol');
            $table->float('engine_power');
            $table->string('body_style')->comment('hatchback, sedan etc.');
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
        Schema::dropIfExists('cars');
        #Schema::drop('cars');
    }
}
