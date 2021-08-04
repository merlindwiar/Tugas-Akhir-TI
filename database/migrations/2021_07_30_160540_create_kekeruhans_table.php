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
            $table->id();
            $table->unsignedBigInteger('alat_id');
            $table->unsignedBigInteger('status_kekeruhan_id');
            $table->float('NTU');
            $table->timestamps();
            // $table->foreign('alat_id')->references('id')->on('alats');
            // $table->foreign('alat_id')->references('id')->on('alats');
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
