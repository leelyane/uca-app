<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class EtudiantFLSHM extends Model
{
    use HasFactory, Notifiable;
    protected $connection = 'flshm';
    protected $table = 'etudiants';
    protected $fillable =['user_id', 'filiere_id','faculte', 'code', 'nom', 'prenom', 'birthdate', 'sexe', 'cni', 'cne', 'email', 'tel', 'adresse', 'ville', 'photo', 'anneebac', 'seriebac', 'filiere_id', 'statut', 'valid', 'retire'];

    public function filiere(): BelongsTo{
        return $this->belongsTo(FLSHMFiliere::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function getFiliereNameAttribute()
    {
        $filierename = $this->filiere->name ?? null;
        return $filierename;
    }
}
