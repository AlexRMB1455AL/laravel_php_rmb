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
            $table->unsignedBigInteger('likes')->default(1);
            $table->boolean('is_published')->default(true);
            $table->string('author')->nullable();
            $table->timestamps();
            $table->string('uber')->nullable();
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();


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
