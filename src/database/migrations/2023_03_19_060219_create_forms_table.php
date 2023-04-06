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
        Schema::create(config('form.table_name'), function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('cache_key');
            $table->json('data')->nullable();
            $table->string('source');
            $table->bigInteger('form_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(config('form.table_name'));
    }
};
