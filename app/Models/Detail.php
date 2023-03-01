<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id';
    public function ticketing()
    {
        return $this->belongsTo(Ticketing::class, 'id_ticketing');
    }
}
