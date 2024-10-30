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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('training_course');
            $table->unsignedBigInteger('profile_id');
            $table->date('training_course_start_date');
            $table->date('training_course_end_date');
            $table->text('training_course_description');
            $table->foreign('profile_id')->references('profile_id')->on('profiles')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
