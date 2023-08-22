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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name',length:100);
            $table->string('status');           
            $table->string('description');
            $table->string('location',length:30);
            $table->string('employee'); 
            $table->string('image')->nullable(); 
            $table->date('start_date');  
            $table->date('end_date');
            $table->date('extend_date')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
