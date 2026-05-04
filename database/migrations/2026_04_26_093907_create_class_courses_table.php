<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('class_courses', function (Blueprint $table) {
            $table->id();
            $table->string('code'); // A101
            $table->string('title');
            $table->text('description');
            $table->string('cost');
            $table->string('schedule');
            $table->string('prerequisite');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('class_courses');
    }
};
