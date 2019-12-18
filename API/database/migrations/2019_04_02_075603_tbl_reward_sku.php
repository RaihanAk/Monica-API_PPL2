<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblRewardSku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_reward_sku', function (Blueprint $table) {
            $table->increments('id_reward_sku');
            $table->integer('id_user')->unsigned();
            $table->integer('id_reward')->unsigned();
            $table->timestamp('date_achieved')->useCurrent(); 
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
