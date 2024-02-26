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
        Schema::create('indikator_approvals', function (Blueprint $table) {
            $table->id();
            $table->string('domain');
            $table->string('aspek');
            $table->string('indikator');
            $table->unsignedTinyInteger('tingkat')->nullable();
            $table->boolean('disetujui')->default(false);
            $table->text('reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikator_approvals');
    }
};
