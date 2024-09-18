Baru! Pintasan keyboard … Pintasan keyboard Drive telah diperbarui untuk memberi Anda navigasi huruf pertama
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    var $table ='peta_kehadiran';
    public function up(): void
    {
        Schema::create($this->table, function(Blueprint $table) {
            $table->increments('id');
            $table->integer('no_hari');
            $table->time('jam_masuk');
            $table->time('jam_pulang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};