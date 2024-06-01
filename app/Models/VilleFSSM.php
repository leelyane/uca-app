<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VilleFSSM extends Model
{
    use HasFactory;
    protected $connection = 'fssm';
    protected $table = 'villes';
    protected $fillable = [
        'name',
    ];
}
