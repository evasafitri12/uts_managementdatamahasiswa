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
    Schema::dropIfExists('mahasiswas');
}

public function down()
{
    // Jika perlu, tambahkan kode untuk membuat kembali tabel ini jika rollback dilakukan
}
};
