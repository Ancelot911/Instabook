<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId("comment_id")->nullable()->constrained()->onDelete("set null"); // ID du commentaire
            $table->text("text"); //Contenu du commentaire
            $table->foreignId("photo_id");// ID de la photo
            $table->foreignId("user_id")->nullable()->constrained()->onDelete("set null"); // ID de l'utilisateur
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
        Schema::dropIfExists('comments');
    }
}
