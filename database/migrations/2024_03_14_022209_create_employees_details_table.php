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
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->string('status_karyawan');
            $table->decimal('gaji', 10, 2);
            $table->string('atasan_langsung');
            $table->timestamps();
        });

        Schema::create('performance_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->string('evaluasi_kinerja');
            $table->string('penghargaan');
            $table->timestamps();
        });

        Schema::create('additional_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->string('asuransi_kesehatan');
            $table->string('dana_pensiun');
            $table->timestamps();
        });

        Schema::create('family_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->string('status_perkawinan');
            $table->integer('jumlah_anak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_details');
        Schema::dropIfExists('performance_information');
        Schema::dropIfExists('additional_information');
        Schema::dropIfExists('family_information');
    }
};
