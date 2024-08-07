<?php

use App\Models\Marketing;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('komisis', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Marketing::class)->constrained()->cascadeOnDelete();
            $table->string('bulan');
            $table->integer('omzet');
            $table->integer('komisi_persen');
            $table->integer('komisi_nominal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komisis');
    }
};
