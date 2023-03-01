<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Ticketing extends Model
{
    use HasFactory;
    protected $fillable = ['id_jenisrequests','id_customer','nama_subject','id_department','nama_stat',
    'id_priority','tanggal_request','tanggal_selesai','nama_pic','deskripsi'];
    public $timestamps = true;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'id_department');
    }
    public function priority()
    {
        return $this->belongsTo(Priority::class, 'id_priority');
    }
    public function jenisrequest()
    {
        return $this->belongsTo(Jenisrequest::class, 'id_jenisrequest');
    }
    public function detail()
    {
      return $this->hasMany(Detail::class, 'id_detail');
    }


// public function image()
// {
//     if ($this->cover && file_exists(public_path('image/ticketings/'
//         . $this->cover))) {
//         return asset('image/ticketings/' . $this->cover);
//     } else {
//         return asset('image/no_image.jpg');
//     }
// }
// // mengahupus image(cover) di storage(penyimpanan) public
// public function deleteImage()
// {
//     if ($this->cover && file_exists(public_path('image/ticketings/'
//         . $this->cover))) {
//         return unlink(public_path('image/ticketings/' . $this->cover));
//     }
// }
}
