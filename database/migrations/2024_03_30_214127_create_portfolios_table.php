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
        /* CREO COLLONE TABELLA */
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->unique;
            $table->boolean('is_published')->default(0);
            $table->text('content');
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /* BOTTO GIU' LA TABELLA */
        Schema::dropIfExists('portfolios');
    }
};