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
        Schema::create('careers', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('profile_id');
                $table->string('company_name');
                $table->string('job_title');
                $table->string('job_city');
                $table->date('job_start_date');
                $table->date('job_end_date')->nullable();
                $table->string('job_roles');
                $table->boolean('is_current_job')->default(true); 
                $table->foreign('profile_id')->references('profile_id')->on('profiles')->onDelete('cascade');
                $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
