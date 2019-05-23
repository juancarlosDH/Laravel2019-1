<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryCosoProductoCampo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('categories', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name', 100);
          $table->string('icon');
          $table->timestamps();
      });
      Schema::table('products', function (Blueprint $table) {
          $table->unsignedBigInteger('category_id')->nullable();
          $table->foreign('category_id')->references('id')->on('categories');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
          $table->dropForeign(['category_id']);
          $table->dropColumn('category_id');
        });
        Schema::dropIfExists('categories');
    }
}
