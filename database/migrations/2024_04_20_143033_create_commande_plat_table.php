<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandePlatTable extends Migration
{
    public function up()
    {
        Schema::create('commande_plat', function (Blueprint $table) {
            $table->foreignId('commande_id')->constrained('commandes');
            $table->foreignId('plat_id')->constrained('plats');
            $table->integer('nombre')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commande_plat');
    }
}

