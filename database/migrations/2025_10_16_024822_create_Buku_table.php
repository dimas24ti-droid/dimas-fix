<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('buku', function (Blueprint $table) {
        $table->increments('buku_id');
        $table->string('judul_buku', 100);
        $table->string('Penulis_buku', 100);
         $table->string('Penerbit', 100);
        $table->date('Tahun_terbit')->nullable();
        $table->string('jumlah', 20)->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Buku');
    }
};
