<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatsTable extends Migration
{
    public function up()
    {
        Schema::create('plats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->constrained('categories'); 
            $table->string('intitule');
            $table->text('description');
            $table->decimal('prix', 8, 2);
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plats');
    }
}

