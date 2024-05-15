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
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title', 100);
            $table->text('description');
            $table->string('thumb', 255);
            $table->string('price', 30)->nullable();
            $table->string('series', 30)->nullable();
            $table->date('sale_date')->nullable();
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            Schema::dropIfExists(['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type']);
        });
    }
};
