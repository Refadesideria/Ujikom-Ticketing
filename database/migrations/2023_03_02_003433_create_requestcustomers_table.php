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
        Schema::create('requestcustomers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_customer');
            $table->string('email_customer');
            $table->string('notelp_customer');
            $table->date('tanggal_request');
            $table->date('tanggal_selesai');
            $table->string('request_perbaikan');
            $table->text('deskripsi_customer');
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
        Schema::dropIfExists('requestcustomers');
    }
};
