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
        Schema::create('months', function (Blueprint $table) {
            $table->id();

            $table->enum('month_name', [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ])->comment('Create months enum in Indonesian language');
            $table->foreignId('year_id')->constrained('years')->onDelete('cascade');

            $table->bigInteger('collection')->unsigned()->default(0)->comment('en for penghimpunan');
            $table->bigInteger('distribution')->unsigned()->default(0)->comment('en for pendistribusian');

            $table->timestamps();

            $table->unique(['month_name', 'year_id']); // Membatasi bulan unik dalam satu tahun
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('months');
    }
};
