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
        Schema::create('kelass', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained()->on('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('guru_id')->constrained()->on('gurus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('mapel_id')->constrained()->on('mapels')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tahun_pelajaran_id')->constrained()->on('tahun_pelajarans')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('nama_kelas',['VII','VIII','IX']);
            $table->enum('kode_kelas',['A','B','C','D']);
            $table->enum('semester',['ganjil','genap']);
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
        Schema::dropIfExists('kelass');
    }
};
