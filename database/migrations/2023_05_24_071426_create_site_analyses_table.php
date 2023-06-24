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
        Schema::create('site_analyses', function (Blueprint $table) {
            $table->id();
            $table -> string('ip') -> unique();
            $table -> string('country');
            $table -> string('last_visit');
            $table -> integer('visit_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_analyses');
    }
};
