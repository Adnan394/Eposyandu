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
        Schema::create('imunisasis', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_imunisasi');
            $table->string('usia_saat_vaksin');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('periode');
            $table->string('id_vaksin');
            $table->string('id_anak');
            $table->string('id_petugas');
            $table->string('id_ibu');
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
        Schema::dropIfExists('imunisasis');
    }
};