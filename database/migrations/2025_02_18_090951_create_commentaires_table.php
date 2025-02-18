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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->string('commentaire');
            $table->unsignedBigInteger('utilisateur_id');
            $table->unsignedBigInteger('temoignage_id');
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('temoignage_id')->references('id')->on('temoignages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
