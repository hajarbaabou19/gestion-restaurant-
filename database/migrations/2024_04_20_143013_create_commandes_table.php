<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('serveur_id')->constrained('serveurs');
            $table->string('numero_table')->nullable();
            $table->enum('etat', ['en cours', 'termine', 'servi', 'emporte'])->default('en cours');
            $table->boolean('paye')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}

