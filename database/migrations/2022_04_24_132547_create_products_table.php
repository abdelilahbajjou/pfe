<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('title');//name
            $table->string('author');
            $table->string('slug')->nullable();
            $table->mediumText('small_description')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('original_price',  $precision = 5, $scale = 2)->nullable();
            $table->decimal('selling_price',  $precision = 5, $scale = 2)->nullable();
            $table->integer('quantity');
            $table->decimal('taxes',  $precision = 5, $scale = 2)->nullable();//taxss
            $table->tinyInteger('status')->nullable()->default(0);
            $table->tinyInteger('trending')->nullable();
            $table->string('language');
            $table->integer('nb_page');
            $table->date('edition_year');
            $table->mediumText('meta_title')->nullable();
            $table->mediumText('meta_keywords')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->longText('image')->nullable();
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
        Schema::dropIfExists('products');
    }
};
