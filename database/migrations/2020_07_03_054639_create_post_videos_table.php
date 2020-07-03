<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_videos', function (Blueprint $table) {
            $table->id();
            $table->string('post_title')->nullable();
            $table->longText('post_brief')->nullable();
            $table->string('photo')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('video_title')->nullable();
            $table->string('video_link')->nullable();
            $table->longText('video_brief')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->tinyInteger('post_video')->nullable();
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
        Schema::dropIfExists('post_videos');
    }
}
