<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCosmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cosmes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('price');
            $table->string('body',255);
            $table->string('image',50)->nullable();
            $table->integer('cosme_categories_id')->unsigned();
            $table->foreign('cosme_categories_id')->references('id')->on('cosme_categories');

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
        Schema::dropIfExists('cosmes');
    }
}
