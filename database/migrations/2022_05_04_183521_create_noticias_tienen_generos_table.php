<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias_tienen_generos', function (Blueprint $table) {
            $table->foreignId('noticia_id')->constrained('noticias','noticia_id');
            $table->unsignedSmallInteger('genero_id');
            $table->foreign('genero_id')->references('genero_id')->on('generos');
            $table->primary(['noticia_id','genero_id']);
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
        Schema::dropIfExists('noticias_tienen_generos');
    }
};
