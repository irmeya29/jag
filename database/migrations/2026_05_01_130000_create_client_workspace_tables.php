<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('client_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('users')->cascadeOnDelete();
            $table->enum('pole', ['pole_1', 'pole_2'])->index();
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('location')->nullable();
            $table->decimal('surface_hectare', 10, 2)->nullable();
            $table->json('cultures')->nullable();
            $table->string('cycle')->nullable();
            $table->string('status')->default('en_preparation')->index();
            $table->text('summary')->nullable();
            $table->text('objective')->nullable();
            $table->decimal('budget_planned', 14, 2)->nullable();
            $table->decimal('budget_spent', 14, 2)->nullable();
            $table->decimal('contracted_volume', 14, 2)->nullable();
            $table->decimal('mobilized_volume', 14, 2)->nullable();
            $table->decimal('delivered_volume', 14, 2)->nullable();
            $table->string('delivery_window')->nullable();
            $table->string('quality_status')->nullable();
            $table->boolean('just_control_live_enabled')->default(false);
            $table->timestamps();
        });

        Schema::create('project_parcels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_project_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->decimal('surface_hectare', 10, 2)->nullable();
            $table->string('culture')->nullable();
            $table->string('status')->nullable();
            $table->text('notes')->nullable();
            $table->string('photo_path')->nullable();
            $table->timestamps();
        });

        Schema::create('project_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_project_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('period')->nullable();
            $table->text('summary')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        Schema::create('project_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_project_id')->constrained()->cascadeOnDelete();
            $table->string('type')->index();
            $table->string('title');
            $table->string('file_path')->nullable();
            $table->date('issued_at')->nullable();
            $table->timestamps();
        });

        Schema::create('project_expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_project_id')->constrained()->cascadeOnDelete();
            $table->string('label');
            $table->string('category')->nullable();
            $table->decimal('amount', 14, 2)->default(0);
            $table->date('spent_at')->nullable();
            $table->string('proof_path')->nullable();
            $table->timestamps();
        });

        Schema::create('project_alerts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_project_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('severity')->default('info');
            $table->text('message')->nullable();
            $table->text('recommendation')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();
        });

        Schema::create('supply_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_project_id')->constrained()->cascadeOnDelete();
            $table->string('lot_reference');
            $table->date('planned_at')->nullable();
            $table->date('delivered_at')->nullable();
            $table->decimal('volume', 14, 2)->nullable();
            $table->string('quality_status')->nullable();
            $table->string('reception_status')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('supply_deliveries');
        Schema::dropIfExists('project_alerts');
        Schema::dropIfExists('project_expenses');
        Schema::dropIfExists('project_documents');
        Schema::dropIfExists('project_reports');
        Schema::dropIfExists('project_parcels');
        Schema::dropIfExists('client_projects');
    }
};
