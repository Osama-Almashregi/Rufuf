<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      
            Schema::create('part_series_rels', function (Blueprint $table) {
                $table->id('rel_id');
                $table->unsignedInteger('number_in_series');
                $table->unsignedBigInteger('series_id')->nullable();
                $table->unsignedBigInteger('part_id');
                $table->timestamps();
    
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_series_rels');
    }
};
