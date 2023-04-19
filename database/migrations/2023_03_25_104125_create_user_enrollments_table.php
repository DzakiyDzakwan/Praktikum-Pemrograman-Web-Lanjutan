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
        Schema::create('user_enrollments', function (Blueprint $table) {
            $table->id('enrollment_id');
            $table->unsignedBigInteger('mata_kuliah_id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('mata_kuliah_id')->references('id')->on('matakuliahs');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_enrollments');
    }
};
