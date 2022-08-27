<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sick_calf_logs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->comment('Identificador de registro de cría enferma');
            $table->longText('diet')->comment('Descripción de dieta de la cría enferma');
            $table->longText('treatment')->comment('Descripción de tratamiento de la cría enferma');
            $table->foreignId('calf_id')->comment('Relacion de los registros de cuarentena de la cría')->constrained();
            $table->foreignId('barnyard_id')->comment('Relacion de la cría con el corral')->constrained();
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
        Schema::dropIfExists('sick_calf_logs');
    }
};
