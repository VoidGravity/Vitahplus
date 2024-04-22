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
        Schema::create('birth_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('Gender');
            $table->string('weight');
            $table->string('height');
            $table->string('mother_name');
            $table->string('father_name');
            $table->string('report');
            // date
            $table->date('date');
            // $table->unsignedBigInteger('patient_report_id');
            // $table->foreign('patient_report_id')->references('id')->on('patient_reports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birth_reports');
    }
};
