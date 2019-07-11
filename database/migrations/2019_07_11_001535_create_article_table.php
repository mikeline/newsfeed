<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('desc');
            $table->text('content');
            $table->unsignedBigInteger('news_users_id')->nullable();
            $table->foreign('news_users_id')->references('id')->on('news_users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('date_created')->default(now());
            $table->string('photo');
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
        Schema::dropIfExists('article');
    }
}
