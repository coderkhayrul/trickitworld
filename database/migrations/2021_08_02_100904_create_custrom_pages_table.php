<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustromPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custrom_pages', function (Blueprint $table) {
            $table->id();
            $table->longText('tiw_about')->nullable();
            $table->longText('tiw_copyright')->nullable();
            $table->longText('tiw_privacy')->nullable();
            $table->longText('tiw_terms')->nullable();
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
        Schema::dropIfExists('custrom_pages');
    }
}
