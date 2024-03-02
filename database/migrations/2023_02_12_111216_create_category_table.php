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
        Schema::create('category', function (Blueprint $table) {
            $table->id("idCat");
            $table->unsignedBigInteger('idUsu');
            $table->string("nameCat");
            $table->text("descriptionCat");
            $table->foreign("idUsu")->references("idUsu")->on("users")->onDelete("cascade"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
