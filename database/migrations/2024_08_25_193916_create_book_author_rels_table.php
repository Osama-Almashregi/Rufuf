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
        Schema::create('book_author_rel', function (Blueprint $table) {
            $table->id('rel_id');
            $table->string('work_on_book', 255);
            $table->integer('work_id')->default(0);
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('author_id');

            $table->index('book_id');
            $table->index('author_id');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_author_rel');
    }
};
