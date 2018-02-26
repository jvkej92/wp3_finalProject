<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class States extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zip');
            $table->string('city');
            $table->string('state');
            $table->string('abrv');
        });

        // $states = "LOAD DATA LOCAL INFILE 'C:/Users/loveo/Desktop/wine-club/database/states.csv' INTO TABLE states FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\\r\\n' IGNORE 1 LINES(zip, city, state, abrv);";
        // DB::connection()->getpdo()->exec($states);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
