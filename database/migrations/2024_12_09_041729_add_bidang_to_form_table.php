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
        Schema::table('form', function (Blueprint $table) {
            $table->enum('bidang', ['Pemerintahan', 'Sosial Budaya', 'Sarana dan Prasarana', 'Perekonomian'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('form', function (Blueprint $table) {
            $table->dropColumn('bidang');
        });
    }
};
