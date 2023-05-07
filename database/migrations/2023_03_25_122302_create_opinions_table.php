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
        Schema::create('opinions', function (Blueprint $table) {
            $table->integer('offer_id')->foreign()->references('id')->on('offers');
            $table->integer('user_id')->foreign()->references('id')->on('users');
            $table->string('content');
            $table->integer('rating');
            $table->timestamps();
            $table->primary(['offer_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opinions');
    }
};
