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
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('profile_id');
            $table->string('personal_picture')->nullable();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->enum('gender', ['male', 'female']);
            $table->string('email')->unique();
            $table->string('address');
            $table->string('city', 100);
            $table->boolean('driving_license');
            $table->date('birthday');
            $table->string('nationality', 100);
            $table->string('marital_status', 100);
            $table->string('achievements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
