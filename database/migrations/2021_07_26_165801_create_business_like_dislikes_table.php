<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessLikeDislikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_like_dislikes', function (Blueprint $table) {
            $table->id('likeDislikeId');
            $table->string('userId');
            $table->string('businessId');
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
        Schema::dropIfExists('business_like_dislikes');
    }
}
