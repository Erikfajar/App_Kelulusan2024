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
        Schema::create('data_taruna', function (Blueprint $table) {
            $table->id();
            $table->string('nit', 7);
            $table->string('nisn', 15);
            $table->string('nama', 50);
            $table->string('kelas', 10);
            $table->string('kompetensi_keahlian', 50);
            $table->enum('keterangan', ['lulus', 'tidak lulus','catatan']);
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
        Schema::dropIfExists('data_taruna');
    }
};
