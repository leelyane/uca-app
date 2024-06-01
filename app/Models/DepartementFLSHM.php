<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DepartementFLSHM extends Model
{
    use HasFactory;
    protected $connection = 'flshm';
    protected $table = 'departements';
    protected $fillable = [
        'name',
        'etablissement_id',
    ];
    public function etablissement():BelongsTo{
        return $this->belongsTo(EtablissementFLSHM::class);
    }
}
