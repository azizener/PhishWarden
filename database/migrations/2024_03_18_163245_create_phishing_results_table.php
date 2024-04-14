<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public $timestamps = false;
    public function up(): void
    {
        
        Schema::create('phishing_results', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->boolean('result');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('phishing_results');
    }
};
