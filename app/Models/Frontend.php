<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    use HasFactory;
    protected $fillable = ['id_ticketing','id_detail'];
    public $timestamps = true;

    public function ticketing()
    {
        return $this->belongsTo(Ticketing::class, 'id_ticketing');
    }
    public function detail()
    {
        return $this->belongsTo(Detail::class, 'detail');
    }
}
