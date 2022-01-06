<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kodekab extends Model
{
    //
        protected $table = 'kodekabs';

        protected $fillable = [
        'kode', 'email', 'created_at'
    ];
}
