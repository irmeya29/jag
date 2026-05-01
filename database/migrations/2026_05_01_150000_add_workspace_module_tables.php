<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_project_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('status')->default('prevu');
            $table->date('planned_at')->nullable();
            $table->date('completed_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('project_commercializations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_project_id')->constrained()->cascadeOnDelete();
            $table->string('harvest_status')->nullable();
            $table->string('outlet')->nullable();
            $table->decimal('sales_amount', 14, 2)->nullable();
            $table->text('cycle_balance')->nullable();
            $table->timestamps();
        });

        Schema::create('project_quality_checks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_project_id')->constrained()->cascadeOnDelete();
            $table->string('lot_reference')->nullable();
            $table->decimal('humidity', 5, 2)->nullable();
            $table->string('calibration')->nullable();
            $table->decimal('impurity_rate', 5, 2)->nullable();
            $table->string('certificate_path')->nullable();
            $table->date('checked_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_quality_checks');
        Schema::dropIfExists('project_commercializations');
        Schema::dropIfExists('project_tasks');
    }
};
