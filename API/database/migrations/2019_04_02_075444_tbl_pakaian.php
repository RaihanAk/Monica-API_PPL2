<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPakaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pakaian', function (Blueprint $table) {
            $table->increments('id_pakaian');
            $table->integer('id_user')->unsigned();
            $table->integer('id_request')->unsigned();
            $table->string('jenis_ukuran', 10);
            $table->string('jenis_gender', 10);
            $table->string('jenis_usia', 10);
            $table->string('jenis_baju', 10);
            $table->string('foto', 255);
            $table->timestamp('date_input')->useCurrent();  
            $table->timestamp('update_date')->useCurrent(); 
            $table->string('delete_status', 10);
            $table->string('status', 255);
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
        //
    }
}
