<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbluserjob', function (Blueprint $table) {
            $table->id('jobid');
            $table->string('jobname');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbluserjob');
    }
}; 