<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
use Alert;


class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = true;

    public function ticketing()
  {
    return $this->hasMany(Ticketing::class, 'id_department');
  }

// model event
public static function boot()
{
    parent::boot();
    self::deleting(function ($department) {
        // mengecek apakah Customer masih punya customer
        if ($department->Ticketing->count() > 0) {
            // menyiapkan pesan error
            $html = ' department can not be deleted because it still has Department : ';
            $html .= '<ul>';
            foreach ($department->Ticketing as $Department) {
                $html .= "<li>$Department->title</li>";
            }
            $html .= '</ul>';
            Session::flash("flash_notification", [
                "level" => "danger",
                "message" => $html,
            ]);
            Alert::error('Failed', 'Data not deleted because department have ticketing');
            return false;
        }
    });
}
}
