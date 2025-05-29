<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('The title of the post');
            $table->text('content')->comment('The content of the post');
            $table->string('slug')->comment('URL Identifier for the post');
            $table->timestamp('publication_date')->nullable()->comment('The date and time when the post is published');
            $table->timestamp('last_modified_date')->nullable()->comment('date and time when the post was last modified');
            $table->string('status')->comment('D - Draft, P - Published, I - Inactive');
            $table->string('featured_image_url')->comment('URL of the featured image for the post');
            $table->integer('views_count')->default(0)->comment('Number of views the post has received');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
