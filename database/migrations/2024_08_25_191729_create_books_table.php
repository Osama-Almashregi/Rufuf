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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('title', 255)->unique();
            $table->string('subtitle', 255);
            $table->string('photo', 255);
            $table->text('description');
            $table->string('depository_no', 255);
            $table->string('isbn', 255);
            $table->string('dewey_no', 255);
            $table->integer('rating')->default(0);
            $table->string('publication_place', 255);
            $table->unsignedInteger('cat_id');
            $table->index('cat_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
