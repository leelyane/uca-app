<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FLSHMFiliere extends Model
{
    use HasFactory;
    protected $connection = 'flshm';
    protected $table = 'filieres';
    protected $fillable = [
        'name',
        'departement_id',
    ];
    public function departement():BelongsTo{
        return $this->belongsTo(DepartementFLSHM::class);
    }
}
