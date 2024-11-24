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
            $table->foreign('user')->references('email')->on('users')->onDelete('cascade');
            $table->binary('image64');
            $table->timestamps();
        });
        $sql = 'alter table images change image image longblob';
        DB::statement($sql);
        $sql = 'alter table images change image64 image64 longblob';
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
