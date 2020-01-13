<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_request', function (Blueprint $table) {
            $table->increments('id_request');
            $table->integer('id_user')->unsigned();
            $table->string('penerima', 40)->nullable();
            $table->timestamp('request_date')->useCurrent(); 
            $table->string('status', 40);
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
