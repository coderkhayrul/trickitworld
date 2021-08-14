<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustromAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custrom_ads', function (Blueprint $table) {
            $table->id();
            $table->text('header_ads')->nullable();
            $table->text('top_sidebar_ads')->nullable();
            $table->text('mid_sidebar_ads')->nullable();
            $table->text('sami_sidebar_ads')->nullable();
            $table->text('footer_ads')->nullable();
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
        Schema::dropIfExists('custrom_ads');
    }
}
