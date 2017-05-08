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
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
              $table->increments('id');
              $table->string('title');
              $table->string('slug');
              $table->text('body');
              $table->decimal('rating', 5, 2);
              $table->integer('user_id')->nullable()->unsigned();
              $table->integer('category_id')->nullable()->unsigned();
              $table->timestamps();

              $table->foreign('category_id')
                    ->references('id')
                    ->on('categories');

              $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
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
