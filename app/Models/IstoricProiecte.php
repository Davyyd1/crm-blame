<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IstoricProiecte extends Model
{
    protected $table = 'IstoricProiecte';
    public $fillable = [
        'id',
        'proiecte_id',
        'action_type',
        'colaborator_id',
        'suma',
        'data'
    ];
    use HasFactory;

    // un model(istoric proiecte) apartine proiect
    public function Proiecte()
    {
        return $this->belongsTo(Proiecte::class);
    }

    public function setDataAttribute($value)
    {
        $this->attributes['data'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }
}
