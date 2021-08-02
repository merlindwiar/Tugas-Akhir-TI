<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusKekeruhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_kekeruhans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kekeruhan')->unique();
            $table->integer('min_kekeruhan');
            $table->integer('max_kekeruhan');
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
        Schema::dropIfExists('status_kekeruhans');
    }
}
