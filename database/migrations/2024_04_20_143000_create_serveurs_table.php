<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServeursTable extends Migration
{
    public function up()
    {
        Schema::create('serveurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('date_embauche');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('serveurs');
    }
}

