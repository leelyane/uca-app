<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FSJESFiliere extends Model
{
    use HasFactory;
    use HasFactory;
    protected $connection = 'fsjes';
    protected $table = 'filieres';
    protected $fillable = [
        'name',
        'departement_id',
    ];
    public function departement():BelongsTo{
        return $this->belongsTo(DepartementFSJES::class);
    }
}
