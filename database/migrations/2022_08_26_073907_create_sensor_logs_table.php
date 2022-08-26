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
        Schema::create('sensor_logs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->comment('Identificador de registro de sensores');
            $table->integer('heart_rate')->comment('Frecuencia cardiaca de la cría');
            $table->integer('blood_rate')->comment('Frecuencia sanguínea de la cría');
            $table->integer('breathing_rate')->comment('Frecuencia respiratoria de la cría');
            $table->double('temperature', 8, 1)->comment('Temperatura de la cría');
            $table->foreignId('calf_id')->comment('Relacion de los registros del sensor con la cría')->constrained();
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
        Schema::dropIfExists('sensor_logs');
    }
};
