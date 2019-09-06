<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailworks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pekerjaan');     
            $table->date('tgl');
            $table->string('status_pegerjaan');
            $table->integer('persentase_pengerjaan');
            $table->longText('keterangan');
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
        Schema::dropIfExists('detailworks');
    }
}
