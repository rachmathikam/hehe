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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->constrained()->on('kelass')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nis');
            $table->string('nama',100);
            $table->string('tempat_lahir',40);
            $table->date('tanggal_lahir');
            $table->string('gender',10);
            $table->string('agama',20);
            $table->text('alamat');
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
        Schema::dropIfExists('siswas');
    }
};
