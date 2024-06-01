<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DepartementFSJES extends Model
{
    use HasFactory;
    protected $connection = 'fsjes';
    protected $table = 'departements';
    protected $fillable = [
        'name',
        'etablissement_id',
    ];
    public function etablissement():BelongsTo{
        return $this->belongsTo(EtablissementFSJES::class);
    }
}
