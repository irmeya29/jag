<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', 30)->nullable()->after('email');
            $table->string('organization')->nullable()->after('phone');
            $table->string('avatar_path')->nullable()->after('organization');
            $table->string('logo_path')->nullable()->after('avatar_path');
        });

        Schema::table('contact_leads', function (Blueprint $table) {
            $table->string('status')->default('nouveau')->index()->after('message');
            $table->foreignId('approved_user_id')->nullable()->after('status')->constrained('users')->nullOnDelete();
            $table->timestamp('approved_at')->nullable()->after('approved_user_id');
            $table->timestamp('archived_at')->nullable()->after('approved_at');
            $table->text('admin_notes')->nullable()->after('archived_at');
        });
    }

    public function down(): void
    {
        Schema::table('contact_leads', function (Blueprint $table) {
            $table->dropConstrainedForeignId('approved_user_id');
            $table->dropColumn(['status', 'approved_at', 'archived_at', 'admin_notes']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'organization', 'avatar_path', 'logo_path']);
        });
    }
};
