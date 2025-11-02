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
        Schema::create('studentadditional_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('parent_id');
            $table->date('date_of_birth')->nullable();
            $table->string('bld_group')->nullable();
            $table->string('course_name')->nullable();
            $table->string('admission_fees')->nullable();
            $table->string('semester_fees')->nullable();
            $table->string('total_semester')->nullable();
            $table->string('examination_fees')->nullable();
            $table->string('total_fee')->nullable();
            $table->bigInteger('emergency_contact')->nullable();
            $table->string('emergency_contact_person')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentadditional_details');
    }
};
