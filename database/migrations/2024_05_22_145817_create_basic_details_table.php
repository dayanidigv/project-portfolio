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
        Schema::create('basic_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('phone_no')->nullable();
            $table->string('email')->unique(); 
            $table->text('Short_bio');
            $table->date('dob')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->text('address');
            $table->string('cta');
            $table->string('profile_picture')->nullable(); 
            $table->enum('status', ['a', 'i', 'd']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_details');
    }
};
