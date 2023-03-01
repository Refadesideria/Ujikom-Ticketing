<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTicketing extends Model
{
    protected $user = ['name'];
    protected $timestamp = true;
    use HasFactory;
}
