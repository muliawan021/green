<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class artikel extends Model
{
    protected $fillable = [
        'userId', 'judul', 'isiArtikel',
    ];
}
