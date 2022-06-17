<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->string('author');
            $table->string('author_email');
            $table->string('post_title');
            $table->string('post_slug');
            $table->string('post_image')->nullable();
            $table->string('post_banner')->nullable();
            $table->text('post_summary');
            $table->text('post_content');
            $table->unsignedBigInteger('post_views')->default(0);
            $table->tinyInteger('status')->default(0)->comment('0->inactive,1->active');

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
};
