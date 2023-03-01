<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
use Alert;

class jenisrequest extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public $timestamps = true;

    public function ticketing()
  {
    return $this->hasMany(Ticketing::class, 'id_jenisrequest');
  }
  // public function detail()
  // {
  //   return $this->hasOne(Detail::class, 'id_jenisrequest');
  // }
  public function projectcustomer()
  {
    return $this->hasMany(Projectcustomer::class, 'id_jenisrequest');
  }
  // model event
  public static function boot()
  {
      parent::boot();
      self::deleting(function ($jenisrequest) {
          // mengecek apakah Customer masih punya customer
          if ($jenisrequest->Ticketing->count() > 0) {
              // menyiapkan pesan error
              $html = ' jenisrequest can not be deleted because it still has Jenisrequest : ';
              $html .= '<ul>';
              foreach ($jenisrequest->Ticketing as $Jenisrequest) {
                  $html .= "<li>$Jenisrequest->title</li>";
              }
              $html .= '</ul>';
              Session::flash("flash_notification", [
                  "level" => "danger",
                  "message" => $html,
              ]);
              Alert::error('Failed', 'Data not deleted because jenis request have ticketing');
              return false;
          }
      });
  }
}
