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
        Schema::create('konfigurasi', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('judul_logo');
            $table->string('title_img');
            $table->string('title');
            $table->text('map');
            $table->string('alamat');
            $table->string('email');
            $table->string('link_email');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('telepon');
            $table->string('footer_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfigurasi');
    }
};
