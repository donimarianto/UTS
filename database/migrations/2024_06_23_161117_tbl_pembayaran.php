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
        Schema::create('tbl_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_telepon');
            $table->string('kelas_gedung');
            $table->date('tanggal_acara')->unique();
            $table->date('tanggal_selesai')->unique();
            $table->decimal('harga', 10, 2);
            $table->decimal('diskon', 10, 2);
            $table->decimal('total', 10, 2);
            $table->decimal('bayar', 10, 2);
            $table->decimal('kembalian', 10, 2);
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
