<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factory\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    //use App\Models\HasFactory;

    protected $fillable = [
        'nom', 'telephone', 'email', 'date', 'heure', 'message'
    ];
};
