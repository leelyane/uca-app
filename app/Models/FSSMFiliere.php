<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FSSMFiliere extends Model
{
    use HasFactory;
    protected $connection = 'fssm';
    protected $table = 'filieres';
    protected $fillable = [
        'name',
        'departement_id',
    ];
    public function departement():BelongsTo{
        return $this->belongsTo(DepartementFSSM::class);
    }
}
