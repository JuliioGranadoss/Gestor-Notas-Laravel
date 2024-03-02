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
        Schema::create('notes', function (Blueprint $table) {
            $table->id("idNot");
            $table->unsignedBigInteger('idUsu') ;
            $table->unsignedBigInteger('idCat') ;
            $table->string("title");
            $table->text("content");
            $table->date("date");
            $table->string("image")->nullable();
            $table->foreign("idUsu")->references("idUsu")->on("users")->onDelete("cascade"); 
            $table->foreign("idCat")->references("idCat")->on("category"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
