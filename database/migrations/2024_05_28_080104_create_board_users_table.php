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
        Schema::create('board_users', function (Blueprint $table) {
            $table->id();  
            $table->integer('user_id');
            $table->integer('member_id');
            $table->string('member_type');
            $table->foreignId('board_id')->constrained('boards')->onDelete('cascade');
            $table->enum('status', ['USER', 'ADMIN']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('board_users');
    }
};
