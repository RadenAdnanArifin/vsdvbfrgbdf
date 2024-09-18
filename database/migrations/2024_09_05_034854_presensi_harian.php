<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Nama tabel yang akan digunakan.
     */
    protected $table = 'presensi_harian';

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->id(); // Mengganti increments() dengan id()
            $table->datetime('tgl_masuk')->nullable();
            $table->datetime('tgl_pulang')->nullable();
            $table->timestamps(); // Mengganti timestamp() dengan timestamps()
            $table->char('ket_hari', 1);
            $table->char('nip', 9);
            $table->string('ip_masuk', 15);
            $table->string('ip_keluar', 15);
            $table->unsignedBigInteger('peta_kehadiran_id');
            $table->time('jam_harus_masuk');
            $table->time('jam_harus_pulang');

            // Menambahkan foreign key
            $table->foreign('peta_kehadiran_id')
                ->references('id')->on('peta_kehadiran')
                ->onDelete('cascade'); // Optional: untuk menghapus data presensi jika peta_kehadiran dihapus

            $table->foreign('nip')
                ->references('nip')->on('pengguna')
                ->onDelete('cascade'); // Optional: untuk menghapus data presensi jika pengguna dihapus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
};
