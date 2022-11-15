<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements_replies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('course_user')->cascadeOnDelete();
            $table->foreignId('comment_id')->constrained('announcement_comments')->cascadeOnDelete();
            $table->text('replay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements_replies');
    }
};
