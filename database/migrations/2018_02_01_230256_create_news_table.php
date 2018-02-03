<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('sub_title');
            $table->text('body');
            $table->integer('status_id')->unsigned()->default(1);
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign('news_status_id_foreign');
            $table->dropForeign('news_user_id_foreign');

            $table->dropIndex('news_status_id_foreign');
            $table->dropIndex('news_user_id_foreign');
        });

        Schema::dropIfExists('news');
    }
}
