<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FSJESDeclinedEtudiant extends Model
{
    use HasFactory;
    protected $connection = 'fsjes';
    protected $table = 'declined_etudiants';
    protected $fillable =['code','filiere_id','nom', 'prenom', 'birthdate', 'sexe', 'cni', 'cne', 'email', 'tel', 'adresse', 'ville', 'photo', 'anneebac', 'seriebac', 'filiere_id', 'statut', 'valid', 'retire'];

    public function filiere(): BelongsTo{
        return $this->belongsTo(FSJESFiliere::class);
    }

    public function getFiliereNameAttribute()
    {
        $filierename = $this->filiere->name ?? null;
        return $filierename;
    }
}
