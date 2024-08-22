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
        Schema::table('activities', function (Blueprint $table) {
                  
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); 
            $table->string('name');
            $table->string('description')->nullable();;
            $table->enum('status', ['pending', 'done'])->default('pending');
            $table->text('remark')->nullable();
            $table->timestamps();
            $table->integer('duration')->nullable;
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activities', function (Blueprint $table) {
            //
        });
    }
};
