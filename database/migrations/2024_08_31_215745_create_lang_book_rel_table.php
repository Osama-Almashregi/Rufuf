<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('lang_book_rel', function (Blueprint $table) {
            $table->id('rel_id');
            $table->foreignId('lang_id');
            $table->foreignId('book_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lang_book_rel');
    }

    /**
     * Reverse the migrations.
     */

};
