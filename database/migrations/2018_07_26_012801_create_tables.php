<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function($table){
            $table->increments('id');
            $table->string('name', '64');
            $table->timestamps();
        });

        Schema::create('books', function($table){
            $table->increments('id');
            $table->string('name', 64);
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->timestamps();
        });

        Schema::create('readers', function($table){
            $table->increments('id');
            $table->string('name', 64);
            $table->timestamps();
        });

        Schema::create('book_reader', function($table){
            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->reference('id')->on('books');
            $table->integer('reader_id')->unsigned();
            $table->foreign('reader_id')->references('id')->on('readers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('authors');
        Schema::drop('books');
        Schema::drop('readers');
        Schema::drop('book_reader');
    }
}
