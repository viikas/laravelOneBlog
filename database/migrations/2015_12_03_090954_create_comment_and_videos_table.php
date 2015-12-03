<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentAndVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('videos',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('detail',100)->default('');
            $table->text('video_source');
            $table->boolean('status')->default(TRUE);
            $table->string('type')->default('Funny');
            $table->timestamps();
        });

        Schema::create('comment',function(Blueprint $table){
            $table->increments('id');
            $table->string('comment',100);
            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('video_id')->unsigned()->default(1);
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->boolean('status')->default(FALSE);
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
        Schema::drop('videos');
        Schema::drop('comment');
    }
}
