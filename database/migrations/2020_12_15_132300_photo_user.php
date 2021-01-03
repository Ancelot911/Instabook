<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhotoUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId("photo_id")->constrained()->cascadeOnDelete();// ID de la photo
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();// ID de l'utilisateur
            $table->unique(["photo_id", "user_id"]); // Liste de toutes les photos appartenant au même utilisateur
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_user');
    }
}
