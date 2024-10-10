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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_artikel_id'); // Foreign key
            $table->string('title');
            $table->string('path'); // Path to the image
            $table->text('short_description'); // New field for short description
            $table->text('description');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('kategori_artikel_id')
                ->references('id')
                ->on('kategori_artikels')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
