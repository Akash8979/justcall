<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentLikeDislikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_like_dislikes', function (Blueprint $table) {
            $table->id('likeDislikeId');
            $table->string('userId');
            $table->string('businessId');
            $table->string('commentId');
            $table->string('likeDislike')->comment('0=Dislike,1=Like');
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
        Schema::dropIfExists('comment_like_dislikes');
    }
}
