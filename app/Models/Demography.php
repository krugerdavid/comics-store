<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demography extends Model
{
    protected $table = 'demography';

    protected $fillable = [
        'name',
        'status',
    ];
}
