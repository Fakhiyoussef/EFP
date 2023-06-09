<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Patients;

class Paiement extends Model
{
    use HasFactory;
    protected $table = 'paiements'; 

    protected $primaryKey = 'NumPaiement';


    protected $fillable = [
        'NumPaiement',
        'Apayer',
        'Avance',
        'Reste',
        'Montant',
        'DatePaiement',
        'Statut',
        'NumDoss',
    ];

    /*public function patient(): BelongsTo
    {
        return $this->belongsTo(patient::class);
    }*/
    public function patient(): BelongsTo
{
    return $this->belongsTo(Patients::class, 'NumDoss', 'NumDoss');
}
    /*public function patient(): BelongsTo
{
    return $this->belongsTo(Patient::class, 'NumDoss', 'NumDoss');
}*/
}


