<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Session;


class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
   public $timestamps = true;

    public function ticketing()
   {
    return $this->hasMany(Ticketing::class, 'id_customer');
  }
  // model event
  public static function boot()
  {
      parent::boot();
      self::deleting(function ($customer) {
          // mengecek apakah Customer masih punya customer
          if ($customer->Ticketing->count() > 0) {
              // menyiapkan pesan error
              $html = ' customer can not be deleted because it still has Customer : ';
              $html .= '<ul>';
              foreach ($customer->Ticketing as $Customer) {
                  $html .= "<li>$Customer->title</li>";
              }
              $html .= '</ul>';
              Session::flash("flash_notification", [
                  "level" => "danger",
                  "message" => $html,
              ]);
              Alert::error('Failed', 'Data not deleted because customers have ticketing');
              return false;
          }
      });
  }

}
