<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_categories', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('note_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->foreign('note_id')->references('id')->on('notes');
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('note_categories');
    }
}
