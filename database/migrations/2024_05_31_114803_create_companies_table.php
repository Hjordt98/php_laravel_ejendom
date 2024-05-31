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
        Schema::create('Companies', function (Blueprint $table) {
            $table->id('company_id');
            $table->timestamps();
            $table->string('name')->require();
            $table->string('email');
            $table->binary('logo');
            $table->string('website');
        });
    }

       /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Companies');
    }
};