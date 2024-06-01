<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FSSMDeclinedEtudiant extends Model
{
    use HasFactory;
    protected $connection = 'fssm';
    protected $table = 'declined_etudiants';
    protected $fillable =['code','filiere_id','nom', 'prenom', 'birthdate', 'sexe', 'cni', 'cne', 'email', 'tel', 'adresse', 'ville', 'photo', 'anneebac', 'seriebac'];

    public function filiere(): BelongsTo{
        return $this->belongsTo(FSSMFiliere::class);
    }

    public function getFiliereNameAttribute()
    {
        $filierename = $this->filiere->name ?? null;
        return $filierename;
    }
}
