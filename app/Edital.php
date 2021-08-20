<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edital extends Model
{
    protected $fillable = [
        'titulo', 'numero', 'data_abertura', 'data_encerramento', 'campos_extras', 'status'
    ];
}
