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
        Schema::create('noticias_tienen_tickets', function (Blueprint $table) {
            $table->foreignId('noticia_id')->constrained('noticias','noticia_id');
            $table->unsignedSmallInteger('ticket_id');
            $table->foreign('ticket_id')->references('ticket_id')->on('tickets');
            $table->primary(['noticia_id','ticket_id']);
            $table->date('fecha');
            $table->integer('precio');
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
        Schema::dropIfExists('noticias_tienen_tickets');
    }
};
