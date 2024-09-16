<?php

use App\Models\Section;
use App\Models\Teacher;
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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('profile');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('license');
            $table->string('rank');
            $table->string('contact_no');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('section_teacher', function(Blueprint $table){
            $table->foreignIdFor(Section::class);
            $table->foreignIdFor(Teacher::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
