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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('ketJudul');
            $table->string('kk');
            $table->string('ketkk');
            $table->string('jurusan1');
            $table->string('ket1jurusan1');
            $table->string('ket2jurusan1');
            $table->string('jurusan2');
            $table->string('ket1jurusan2');
            $table->string('ket2jurusan2');
            $table->string('profesi');
            $table->string('ketprofesi');
            $table->string('profesi1');
            $table->string('ketprofesi1');
            $table->string('profesi2');
            $table->string('ketprofesi2');
            $table->string('profesi3');
            $table->string('ketprofesi3');
            $table->string('profesi4');
            $table->string('ketprofesi4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
