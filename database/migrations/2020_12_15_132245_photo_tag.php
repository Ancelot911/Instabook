<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhotoTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId("photo_id")->constrained()->cascadeOnDelete(); // ID de la photo
            $table->foreignId("tag_id")->constrained()->cascadeOnDelete(); // ID du tag
            $table->unique(["photo_id", "tag_id"]); // Liste de toutes les photos ayant le même tag
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
        Schema::dropIfExists('photo_tag');
    }
}
