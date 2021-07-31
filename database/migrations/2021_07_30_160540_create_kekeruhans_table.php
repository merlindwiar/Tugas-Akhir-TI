<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKekeruhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kekeruhans', function (Blueprint $table) {
            $table->id('id_kekeruhan');
            $table->integer('NTU');
            $table->unsignedBigInteger('id_status_kekeruhan');
            $table->unsignedBigInteger('id_alat');
            $table->timestamps();

            $table->foreign('id_status_kekeruhan')->references('id_status_kekeruhan')->on('status_kekeruhans');
            $table->foreign('id_alat')->references('id_alat')->on('alats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kekeruhans');
    }
}
