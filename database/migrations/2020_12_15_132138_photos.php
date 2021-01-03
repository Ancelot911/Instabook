<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Photos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string("title"); // Titre de la photo
            $table->text("description");// Description de la photo
            $table->string("file");// Chemin menant à la photo
            $table->date("date")->nullable(); // Date de publication
            $table->integer("resolution")->nullable();  // Résolution de la photo          
            $table->integer("width"); // Largeur de la photo
            $table->integer("height"); // Hauteur de la photo
            $table->foreignId("user_id")->nullable()->constrained()->onDelete("set null"); // ID de l'utlisateur étant le propriétaire de la photo
            $table->foreignId("group_id")->constrained()->onDelete("cascade");  // ID du groupe dans lequel se trouve la photo
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
        Schema::dropIfExists('photos');
    }
}
