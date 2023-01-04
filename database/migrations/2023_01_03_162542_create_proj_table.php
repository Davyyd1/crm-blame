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
        Schema::create('proiecte', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Denumire_Proiect');
            $table->string('Firma_Client');
            $table->string('Reprezentant_Firma');
            $table->string('Contact_Client');
            $table->integer('Suma_Proiect');
            $table->integer('Numar_Transe');
            $table->string('Status_Proiect');
            $table->timestamps();
        });

        Schema::create('istoricproiecte', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('proiecte_id');
            $table->string('action_type');
            $table->string('colaborator_id');
            $table->integer('suma');
            $table->date('data')->nullable();
            $table->timestamps();
            $table->foreign('proiecte_id')
                ->references('id')
                ->on('proiecte')
                ->onDelete('cascade');
        });

        Schema::create('colaboratori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nume');
            $table->string('Skillset');
            $table->integer('Pret_h');
            $table->integer('suma');
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
        Schema::dropIfExists('proiecte');
    }
};
