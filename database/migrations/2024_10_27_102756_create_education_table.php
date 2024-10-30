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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id');
            $table->string('educational_qualification');
            $table->string('educational_institution');
            $table->string('study_country');
            $table->string('study_city');
            $table->date('study_start_date');
            $table->date('study_end_date');
            $table->text('study_description');
            $table->foreign('profile_id')->references('profile_id')->on('profiles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
