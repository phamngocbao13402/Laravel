<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertTableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('cmt_id');
            $table->string('cmt_content');
            $table->dateTime('cmt_date');
            $table->integer('cmt_status');
            $table->integer('post_id');
            $table->integer('user_id');

            // $table->foreign('post_id')->references('post_id')->on('posts');

            // $table->foreign('user_id')->references('user_id')->on('users');
            $table->rememberToken();
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
