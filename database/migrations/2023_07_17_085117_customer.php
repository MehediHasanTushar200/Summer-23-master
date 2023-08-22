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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('phone_number')->nullable();
            $table->string('status',length:10)->default('active');
            $table->string('image')->nullable(); 
            $table->string('email'); 
            $table->string('password'); 
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Customers');
    }
};
