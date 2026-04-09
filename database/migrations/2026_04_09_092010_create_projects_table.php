<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('pole', ['pole_1', 'pole_2'])->index();
            $table->string('culture')->nullable()->index();
            $table->string('location')->index();
            $table->decimal('surface_hectare', 10, 2)->nullable();
            $table->string('service_type');
            $table->enum('status', ['en_cours', 'termine'])->default('en_cours')->index();
            $table->text('summary')->nullable();
            $table->string('cover_image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};