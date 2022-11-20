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
            $table->foreignId('tahun_pelajaran_id')->nullable()->constrained()->on('tahun_pelajarans')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('nama_kelas',['VII','VIII','IX']);
            $table->enum('kode_kelas',['A','B','C','D']);
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
