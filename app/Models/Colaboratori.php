<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaboratori extends Model
{
    protected $table = 'Colaboratori';
    use HasFactory;


    public function IstoricProiecte()
    {
        return $this->hasMany(IstoricProiecte::class);
    }
}
