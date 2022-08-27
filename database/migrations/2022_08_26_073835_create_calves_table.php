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
        Schema::create('calves', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->comment('Identificador de cría');
            $table->double('weight', 11, 2)->comment('Peso de la cría');
            $table->integer('muscle_color')->comment('Color de musculo, 3-5: Grasa tipo 1, 1,2,6,7: Grasa tipo 2');
            $table->integer('marbling')->comment('Calidad de marmoleo en escala de 1-5');
            $table->double('cost', 11, 2)->comment('Costo de la cría');
            $table->string('name')->comment('Nombre con la que se identifica la cría');
            $table->boolean('is_in_quarantine')->comment('false: No esta en cuarentena, true: Esta en cuarentena');
            $table->longText('description')->comment('Descripción de la cría');
            $table->foreignId('provider_id')->comment('Relacion de la cría con proveedor')->constrained();
            $table->foreignId('meat_classification_id')->comment('Relacion de la cría con la clasificación de la carne')->constrained();
            $table->foreignId('barnyard_id')->comment('Relacion de la cría con el corral')->constrained();
            $table->date('date')->comment('Fecha de registro de cría');
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
        Schema::dropIfExists('calves');
    }
};
