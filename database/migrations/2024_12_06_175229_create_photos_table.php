<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('themes')) {
            Schema::create('themes', function (Blueprint $table) {
                $table->id();  // primary key
                $table->string('name');
                $table->string('description')->nullable();  // Add this for the description
                $table->string('cover_image')->nullable();  // Add this for the cover image
                $table->timestamps();
            });
        }

        // Create 'photos' table if not exists
        if (!Schema::hasTable('photos')) {
            Schema::create('photos', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->foreignId('theme_id')->constrained('themes')->onDelete('cascade');
                $table->string('image_path');
                $table->integer('likes')->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
        Schema::dropIfExists('themes');
    }
};
