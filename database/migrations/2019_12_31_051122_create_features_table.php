<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('featurproperties_id');
            $table->string('featuer_1');
            $table->string('featuer_2');
            $table->string('featuer_3');
            $table->string('featuer_4');
            $table->string('featuer_5');
            $table->string('featuer_6');
            $table->string('featuer_7');
            $table->string('featuer_8');
            $table->string('featuer_9');
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
        Schema::dropIfExists('features');
    }
}
