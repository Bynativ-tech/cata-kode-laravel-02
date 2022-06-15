<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    //
    protected $fillable = [
        'nom', 'telephone', 'email', 'date', 'heure', 'message',
    ];
}
