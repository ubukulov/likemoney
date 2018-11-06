<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('brand_id')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->text('full_text')->nullable();
            $table->string('description', 255)->nullable();
            $table->string('keywords', 255)->nullable();
            $table->integer('active')->unsigned()->nullable();
            $table->integer('filled')->unsigned()->nullable();
            $table->integer('verified')->unsigned()->nullable();
            $table->integer('views')->unsigned()->nullable();
            $table->string('article', 50)->nullable();
            $table->timestamps();

            $table->index(['category_id', 'brand_id', 'article']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
