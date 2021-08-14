<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('website_title_en')->nullable();
            $table->string('website_title_ban')->nullable();
            $table->string('copyright_text_en')->nullable();
            $table->string('copyright_text_ban')->nullable();
            $table->string('fav_icon')->nullable();
            $table->string('title_image')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('pinterest_url')->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_ban')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_en')->nullable();
            $table->string('phone_ban')->nullable();
            $table->string('meta_title_en')->nullable();
            $table->string('meta_title_ban')->nullable();
            $table->string('meta_description_en')->nullable();
            $table->string('meta_description_ban')->nullable();
            $table->string('meta_keyword_en')->nullable();
            $table->string('meta_keyword_ban')->nullable();
            $table->string('meta_author_en')->nullable();
            $table->string('meta_author_ban')->nullable();
            $table->string('theme_color')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
