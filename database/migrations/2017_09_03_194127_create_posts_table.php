<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // TITULO; IMAGEM CAPA; CATEGORIA; TAG; CONTEUDO
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('cover');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('posts_categories');
            $table->text('tags')->nullable();
            $table->text('content');
            $table->string('writer_id');
            $table->integer('views')->default(0);
            $table->integer('up_votes')->default(0);
            $table->date('publish_date');
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
        Schema::dropIfExists('posts');
    }
}
