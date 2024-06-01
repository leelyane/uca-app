<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DepartementFSSM extends Model
{
    use HasFactory;
    protected $connection = 'fssm';
    protected $table = 'departements';
    protected $fillable = [
        'name',
        'etablissement_id',
    ];
    public function etablissement():BelongsTo{
        return $this->belongsTo(EtablissementFSSM::class);
    }
}
