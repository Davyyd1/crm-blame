<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IstoricProiecte extends Model
{
    protected $table = 'IstoricProiecte';
    public $fillable = [
        'id_proiect',
        'action_type',
        'colaborator_id',
        'suma',
        'data'
    ];
    use HasFactory;
}
