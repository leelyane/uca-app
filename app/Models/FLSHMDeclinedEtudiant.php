<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FLSHMDeclinedEtudiant extends Model
{
    use HasFactory;
    protected $connection = 'flshm';
    protected $table = 'declined_etudiants';
    protected $fillable =['code','nom','filiere_id', 'prenom', 'birthdate', 'sexe', 'cni', 'cne', 'email', 'tel', 'adresse', 'ville', 'photo', 'anneebac', 'seriebac', 'filiere_id', 'statut', 'valid', 'retire'];

    public function filiere(): BelongsTo{
        return $this->belongsTo(FLSHMFiliere::class);
    }

    public function getFiliereNameAttribute()
    {
        $filierename = $this->filiere->name ?? null;
        return $filierename;
    }
}
