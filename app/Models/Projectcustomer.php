<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectcustomer extends Model
{
    use HasFactory;
    protected $fillable = ['id_customer','id_jenisrequest','nama_project'];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
    public function jenisrequest()
    {
        return $this->belongsTo(jenisrequest::class, 'id_jenisrequest');
    }
}
