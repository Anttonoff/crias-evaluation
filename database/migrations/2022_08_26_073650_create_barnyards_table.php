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
        Schema::create('barnyards', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->comment('Identificador de corral');
            $table->string('name')->comment('Nombre con el que se identifica el corral');
            $table->foreignId('barnyard_type_id')->comment('Relacion de corral con tipo de corral')->constrained();
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
        Schema::dropIfExists('barnyards');
    }
};
