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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id');
        });

        Schema::table('recettes', function (Blueprint $table) {
            $table->dropColumn('utilisateur_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('temoignages', function (Blueprint $table) {
            $table->dropColumn('utilisateur_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('commentaires', function (Blueprint $table) {
            $table->dropColumn('utilisateur_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        
        
        Schema::dropIfExists('roles');
        Schema::dropIfExists('admine');
        Schema::dropIfExists('utilisateurs');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
