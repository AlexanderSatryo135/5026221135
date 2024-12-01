<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKertashvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kertashvs', function (Blueprint $table) {
            $table->increments('kode_kertashvs'); // Auto-increment primary key
            $table->string('merk_kertashvs', 30); // Merk Kertas HVS
            $table->integer('stock_kertashvs'); // Stok Kertas HVS
            $table->char('tersedia', 1); // Status tersedia (Y/N)
            $table->timestamps(); // Created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kertashvs');
    }
}
