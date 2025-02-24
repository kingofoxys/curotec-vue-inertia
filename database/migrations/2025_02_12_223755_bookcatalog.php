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
        Schema::create('book_catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('author');
            $table->string('publisher');
            $table->string('category');
            $table->string('language');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_catalog');
    }
};
