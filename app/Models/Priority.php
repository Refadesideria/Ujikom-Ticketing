<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alert;
use Session;



class Priority extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = true;

    public function ticketing()
  {
    return $this->hasMany(Ticketing::class, 'id_priority');
  }
  public static function boot()
{
    parent::boot();
    self::deleting(function ($priority) {
        // mengecek apakah Customer masih punya customer
        if ($priority->Ticketing->count() > 0) {
            // menyiapkan pesan error
            $html = ' priority can not be deleted because it still has Priority : ';
            $html .= '<ul>';
            foreach ($priority->Ticketing as $Priority) {
                $html .= "<li>$Priority->title</li>";
            }
            $html .= '</ul>';
            Session::flash("flash_notification", [
                "level" => "danger",
                "message" => $html,
            ]);
            Alert::error('Failed', 'Data not deleted because priority have ticketing');
            return false;
        }
    });
}


}
