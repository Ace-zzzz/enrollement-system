<?php

use App\Models\Section;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id('LRN');
            $table->foreignIdFor(Section::class);
            $table->string('profile');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthday');   
            $table->string('gender');
            $table->string('address');
            $table->string('contact_no');
            $table->string('email');
            $table->boolean('enrolled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
