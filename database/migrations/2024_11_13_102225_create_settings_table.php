<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('address');
            $table->string('contact_number');
            $table->text('telephone_number')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->string('tiktok_url')->nullable();
            $table->text('map_url')->nullable();
            $table->string('college_name');
            $table->string('email');
            $table->string('footer_description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
