<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phs', function (Blueprint $table) {
            $table->id('id_ph');
            $table->integer('kadar_ph');
            $table->foreignId('id_status_ph');
            $table->foreignId('id_alat');
            $table->timestamps();

            // $table->foreign('id_status_ph')->references('id_status_ph')->on('status_phs');
            // $table->foreign('id_alat')->references('id_alat')->on('alats');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phs');
    }
}
