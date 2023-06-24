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
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->string('phone_txt');
            $table->string('phone');
            $table->string('email_txt');
            $table->string('email');
            $table->string('location1_txt');
            $table->decimal('location1_lang');
            $table->decimal('location1_lat');
            $table->string('location2_txt');
            $table->decimal('location2_lang');
            $table->decimal('location2_lat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_infos');
    }
};
