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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('original_name');
            $table->string('name');
            $table->string('path');
            $table->string('type');
            $table->string('user');
            $table->binary('image');
            $table->binary('image64');
            $table->timestamps();
        });
        $sql = 'alter table file change image image longblob';
        DB::statement($sql);
        $sql = 'alter table file change image64 image64 longblob';
        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
