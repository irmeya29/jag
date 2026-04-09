<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contact_leads', function (Blueprint $table) {
            $table->id();
            $table->enum('profile_type', ['investisseur', 'industriel'])->index();
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('job_title')->nullable();
            $table->string('email')->index();
            $table->string('phone', 30);
            $table->string('land_location')->nullable();
            $table->decimal('land_size_hectare', 10, 2)->nullable();
            $table->boolean('has_borehole')->nullable();
            $table->string('requested_product')->nullable();
            $table->decimal('annual_volume', 12, 2)->nullable();
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_leads');
    }
};