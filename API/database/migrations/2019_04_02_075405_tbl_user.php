<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('fullname', 60);
            $table->string('email', 50)->unique()->charset('utf8');
            $table->string('username', 30)->unique()->charset('utf8');
            $table->string('url_foto', 255);
            $table->string('password', 255);
            $table->char('phone', 15)->nullable($value = true);
            $table->string('address', 50);
            // $table->string('api_token', 60)->unique()->nullable()->change();
            $table->rememberToken();
            $table->timestamp('date_join')->useCurrent();
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
