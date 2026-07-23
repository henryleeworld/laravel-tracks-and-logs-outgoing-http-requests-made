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
        Schema::connection(config('spy.connection'))
            ->table(config('spy.table_name'), function (Blueprint $table) {
                $table->unsignedInteger('duration_ms')->nullable()->after('status')->index();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection(config('spy.connection'))
            ->table(config('spy.table_name'), function (Blueprint $table) {
                $table->dropColumn('duration_ms');
            });
    }
};
