<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proiecte extends Model
{
    protected $table = 'Proiecte';
    public $fillable = [
        'id',
        'Denumire_Client',
        'Firma_Client',
        'Reprezentant_Firma',
        'Contact_Client',
        'Suma_Proiect',
        'Numar_Transe',
        'Status_Proiect'
    ];
    use HasFactory;

    public function istoricProiecte()
    {
        return $this->hasMany(istoricProiecte::class);
    }
}
