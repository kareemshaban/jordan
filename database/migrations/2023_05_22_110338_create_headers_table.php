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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table -> string('start_day');
            $table -> string('end_day');
            $table -> time('start_time');
            $table -> time('end_time');
            $table -> string('contact_phone');
            $table -> string('facebook');
            $table -> string('twitter');
            $table -> string('linkedin');
            $table -> string('whatsapp');
            $table -> string('instegram');
            $table -> string('g-mail');
            $table -> string('callback_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};
