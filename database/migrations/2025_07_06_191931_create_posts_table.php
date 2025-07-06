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
            $table->text('content');
            $table->unsignedBigInteger('likes')->default(0);
            $table->boolean('is_published')->default(false);
            $table->string('author')->nullable();
            $table->timestamps();
            $table->string('uber')->nullable();
        });
    }
//php artisan migrate
//php artisan migrate:rollback
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
