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
    Schema::create('courses', function (Blueprint $table) {

        $table->id();

        $table->string('course_code');

        $table->string('course_name');

        $table->string('department');

        $table->integer('credit');

        $table->string('teacher');

        $table->text('description')->nullable();

        $table->string('status')->default('Active');

        $table->string('prerequisites')->nullable();

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
