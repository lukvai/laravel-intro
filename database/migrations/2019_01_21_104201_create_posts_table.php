<?php
//created terminal-> 'php artisan make:model -mcr posts' -> php artisan migrate ->
// ->if there is some problem or u forgot to add smth -> artisan migrate:refresh
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
            $table->timestamps('posted_at');
            $table->longText('post');
            $table->string('image');
            $table->integer('user_id');
            $table->integer('comment_id');

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
