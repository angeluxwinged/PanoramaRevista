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
        Schema::create('uabcs', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('cargo');

            $table->unsignedInteger('no_edicion');
            // $table->foreign('no_edicion')->references('id')->on('ediciones')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('uabcs');
    }
};
