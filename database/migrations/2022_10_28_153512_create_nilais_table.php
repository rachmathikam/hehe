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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_siswa_id')->constrained()->on('kelas_siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tahun_pelajaran_id')->constrained()->on('tahun_pelajarans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('mapel_id')->constrained()->on('mapels')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('semester',['ganjil','genap']);
            $table->string('jenis_ujian');
            $table->string('nilai_h1');
            $table->string('nilai_h2');
            $table->string('nilai_h3');
            $table->string('nilai_h4');
            $table->string('nilai_rata2');
            $table->string('kkm');
            $table->string('keterangan');
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
        Schema::dropIfExists('nilais');
    }
};
