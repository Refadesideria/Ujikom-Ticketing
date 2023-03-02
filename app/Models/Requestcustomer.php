<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requestcustomer extends Model
{
    use HasFactory;

    protected $fillable = ['nama_customer','email_customer','notelp_customer','tanggal_request','tanggal_selesai','request_perbaikan','deskripsi_customer'];
   public $timestamps = true;

}
