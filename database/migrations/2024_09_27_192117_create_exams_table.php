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
        Schema::create('exams', function (Blueprint $table) {
            $table->id('qualification_Id');
            $table->foreignId('matter_Id')->unsigned();
            $table->string('title', 50)->nullable();
            $table->foreignId('student_Id')->unsigned();
            $table->string('id_exam', 50)->nullable();
            $table->double('qualification', 2, 1)->nullable();
            $table->foreignId('period_Id')->unsigned();
            $table->string('partial', 20)->nullable();
            $table->timestamps();

            $table->foreign('matter_Id')->references('matter_Id')->on('matters')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('student_Id')->references('student_Id')->on('students')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('period_Id')->references('period_Id')->on('period')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
