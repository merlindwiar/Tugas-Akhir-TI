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
            $table->id();
            $table->float('kadar_ph');
            $table->unsignedBigInteger('alat_id');
            $table->unsignedBigInteger('status_kekeruhan_id');
            // $table->foreignId('status_ph_id');
            // $table->foreignId('alat_id');
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
