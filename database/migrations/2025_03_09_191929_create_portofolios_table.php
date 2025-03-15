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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->references('id')->on('users');
            $table->foreignUuid('template_id')->references('id')->on('templates');
            $table->string('name');
            $table->string('photo');
            $table->string('contact');
            $table->string('slug')->unique()->index();
            $table->string('position');
            $table->text('description');
            $table->json('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
