<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JsonArtikel extends Model
{
    protected $fillable = [
        'userId', 'judul', 'isiArtikel',
    ];
}
