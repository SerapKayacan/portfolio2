<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('references', function (Blueprint $table) {
            if (!Schema::hasColumn('references', 'url')) {
                $table->string('url')->nullable()->after('description');
            }
            if (!Schema::hasColumn('references', 'badge')) {
                $table->string('badge')->nullable()->after('url');
            }
            if (!Schema::hasColumn('references', 'technologies')) {
                $table->string('technologies')->nullable()->after('badge');
            }
            if (!Schema::hasColumn('references', 'gradient')) {
                $table->string('gradient')->nullable()->after('technologies');
            }
        });
    }

    public function down(): void
    {
        Schema::table('references', function (Blueprint $table) {
            $table->dropColumn(['url', 'badge', 'technologies', 'gradient']);
        });
    }
};
