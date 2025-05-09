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
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // judul artikel
        $table->string('subtitle'); // Sub Judul artikel
        $table->string('category'); // kategori artikel
        $table->string('slug')->unique(); 
        $table->text('content'); 
        $table->text('excerpt')->nullable();
        $table->text('media_path')->nullable();
        $table->string('thumbnail')->nullable(); // Gambar untuk card
        $table->string('detail_image')->nullable(); // Gambar untuk single artikel
        $table->enum('status', ['draft', 'published'])->default('draft');  
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
