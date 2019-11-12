<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestonomialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testonomials', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('image');
            $table->string('altimage');
            $table->string('name');
            $table->longtext('description');
            $table->string('seotitle');
            $table->string('keywords');
            $table->string('seodescription');
            $table->string('status');
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
        Schema::dropIfExists('testonomials');
    }
}
