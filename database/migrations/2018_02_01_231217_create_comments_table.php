<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->integer('status_id')->unsigned()->default(1);
            $table->integer('user_id')->unsigned();
            $table->integer('news_id')->unsigned();
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('news_id')->references('id')->on('news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('comments_status_id_foreign');
            $table->dropForeign('comments_user_id_foreign');
            $table->dropForeign('comments_news_id_foreign');

            $table->dropIndex('comments_status_id_foreign');
            $table->dropIndex('comments_user_id_foreign');
            $table->dropIndex('comments_news_id_foreign');
        });

        Schema::dropIfExists('comments');
    }
}
