<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentiste extends Model
{
    use HasFactory;

    protected $table = "dentiste";
    protected $fillable = [
        'NomDent',
        'PrenomDent',
        'TelDent',
        'EmailDent',
        'Password',
        'Ville',
        'Adresse',
    ];
}
