<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ediciones', function (Blueprint $table) {
            $table->id();
            
            $table->string('titulo')->nullable();
            $table->string('fecha');
            $table->unsignedInteger('no_edicion');  
            $table->integer('no_continuidad');
            $table->string('epoca');
            $table->integer('no_ano');
            $table->text('link');
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
        Schema::dropIfExists('ediciones');
    }
};
