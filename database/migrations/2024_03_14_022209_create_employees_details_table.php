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
            $table->string('karyawan_status');
            $table->decimal('salary', 10, 2);
            $table->string('direct_supervisor');
            $table->timestamps();
        });

        Schema::create('performance_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->string('performance_evaluation');
            $table->string('award');
            $table->timestamps();
        });

        Schema::create('additional_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->string('health_insurance');
            $table->string('pension_fund');
            $table->timestamps();
        });

        Schema::create('family_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->string('married_status');
            $table->integer('total_children');
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
