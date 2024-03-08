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
        Schema::create('category_note', function (Blueprint $table) {
            $table->id('idCN');
            $table->unsignedBigInteger('note_idNot');
            $table->unsignedBigInteger('category_idCat');
            $table->foreign('note_idNot')->references('idNot')->on('notes')->cascadeOnDelete();
            $table->foreign('category_idCat')->references('idCat')->on('category')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_notes');
    }
};
