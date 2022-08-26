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
        Schema::create('barnyard_types', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->comment('Identificador de tipo de corral');
            $table->string('type')->unique()->comment('Tipo de corral, 1: General, 2: Cuarentena');
            $table->string('name')->comment('Nombre de tipo de corral');
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
        Schema::dropIfExists('barnyard_types');
    }
};
