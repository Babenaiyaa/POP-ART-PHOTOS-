<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::table('photos', function (Blueprint $table) {
            $table->string('name')->nullable()->change(); // Make 'name' column nullable
        });
    }

    public function down(){
        Schema::table('photos', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change(); // Revert 'name' column to not nullable
        });
    }
};
