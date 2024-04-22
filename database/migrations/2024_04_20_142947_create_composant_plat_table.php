<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComposantPlatTable extends Migration
{
    public function up()
    {
        Schema::create('composant_plat', function (Blueprint $table) {
            $table->foreignId('composant_id')->constrained('composants');
            $table->foreignId('plat_id')->constrained('plats');
            $table->decimal('quantite', 8, 2);
            $table->string('unite');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('composant_plat');
    }
}

