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
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('text');
            $table->string('author');
            $table->date('publication_date');
            $table->boolean('status')->nullable();
            $table->integer('clicks')->default(0);
            $table->boolean('gallery')->nullable();
            $table->foreignId('category_posts_id');
            $table->foreign('category_posts_id')
                ->references('id')
                ->on('category_posts');
            $table->softDeletes();
            $table->timestamps();
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
