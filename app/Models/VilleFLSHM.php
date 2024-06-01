<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VilleFLSHM extends Model
{
    use HasFactory;
    protected $connection = 'flshm';
    protected $table = 'villes';
    protected $fillable = [
        'name',
    ];
}
