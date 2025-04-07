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
        Schema::create('users', function (Blueprint $table) {
            $table->id('userid');
            $table->string('username', 20);
            $table->string('password', 20);
            $table->enum('gender', ['Male', 'Female']);
            $table->unsignedBigInteger('jobid');
            $table->timestamps();

            $table->foreign('jobid')->references('jobid')->on('tbluserjob');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
