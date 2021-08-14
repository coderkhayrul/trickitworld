<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->ondelete('cascade');
            $table->string('name_en');
            $table->string('name_ban');
            $table->string('slug_en');
            $table->string('slug_ban');
            $table->string('thambnail_image');
            $table->string('banner_image');
            $table->text('short_description_en');
            $table->text('short_description_ban');
            $table->longText('long_description_en');
            $table->longText('long_description_ban');
            $table->integer('view_count')->nullable();
            $table->integer('status');

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
}
