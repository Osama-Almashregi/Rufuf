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
        Schema::create('parts', function (Blueprint $table) {
            $table->id('part_id');
            $table->integer('part_no');
            $table->string('part_path', 255);
            $table->integer('book_id');
            $table->string('price', 255)->default('0');
            $table->string('pages_no', 255);
            $table->date('publication_date');
            $table->string('edition_no', 255);
            $table->string('edition_desc', 255);
            $table->string('format', 255)->nullable();
            $table->string('size', 255)->nullable();
            $table->integer('num_of_copies');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts');
    }
};
