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
        Schema::create('authors', function (Blueprint $table) {
            $table->id('author_id');
            $table->string('author_img', 255)->default('auth_temp.svg');
            $table->string('author_name', 255)->unique();
            $table->text('author_description');
            $table->string('author_profession', 255);
            $table->string('author_nationality', 255);
            $table->date('author_birthday');
            $table->date('author_deathday')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
