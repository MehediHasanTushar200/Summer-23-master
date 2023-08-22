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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',length:100);
            $table->string('contact_number');           
            $table->string('address');
            $table->string('email',length:30);
            $table->string('status')->nullable(); 
            $table->string('appartment_name');  
            $table->date('visit_date')->nullable();
            $table->time('visit_time')->nullable(); 
            $table->text('additional_comments');

            $table->timestamps();
        });
    }         /**
             * Reverse the migrations.
             */
            public function down(): void
            {
                Schema::dropIfExists('bookings');
   
            }
};
