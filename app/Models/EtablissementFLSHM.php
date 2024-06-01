<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EtablissementFLSHM extends Model
{
    use HasFactory;
    protected $connection = 'flshm';
    protected $table = 'etablissements';
    protected $fillable = [
        'name',
        'ville_id',
    ];
    public function ville():BelongsTo{
        return $this->belongsTo(VilleFLSHM::class);
    }
}
