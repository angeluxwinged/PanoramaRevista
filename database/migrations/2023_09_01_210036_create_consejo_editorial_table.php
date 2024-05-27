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
        Schema::create('consejo_editorial', function (Blueprint $table) {
            $table->increments('id_consejo_editorial');
            
            $table->string('nombre');
            $table->string('cargo');
            $table->binary('foto')->nullable();

            $table->unsignedInteger('no_edicion');   
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
        Schema::dropIfExists('consejo_editorial');
    }
};
