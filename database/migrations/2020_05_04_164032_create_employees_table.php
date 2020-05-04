<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('nik', 8);
            $table->string('jabatan');
            $table->string('dept');
            $table->string('npwp');
            $table->string('grade');
            $table->string('cabang');
            $table->string('bulan');
            $table->string('picture')->unique();
            $table->float('gajipokok', 20);
            $table->float('makan', 20);
            $table->float('transport', 20);
            $table->float('absen', 20);
            $table->string('datasheet')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
