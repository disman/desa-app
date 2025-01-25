<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{

    use HasFactory;
    protected $fillable = [
        'nama_rt',
        'nama_ketua_rt'
    ];
}
