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
        Schema::create('student_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('parent_id');
            $table->bigInteger('course_id')->nullable();
            $table->bigInteger('contact_number')->nullable();
            $table->text('last_qualification')->nullable();
            $table->text('last_qualification_organisation_name')->nullable();
            $table->string('class_xth_percentage')->nullable();
            $table->string('class_xth_organisation_name')->nullable();
            $table->string('class_xiith_percentage')->nullable();
            $table->string('class_xiith_organisation_name')->nullable();
            $table->boolean('payment_status')->default(false);
            $table->string('course_name')->nullable();
            $table->string('organisation_name')->nullable();
            $table->string('profile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_details');
    }
};
