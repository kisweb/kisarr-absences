<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [

    	'classeroom_id',
    	'prenoms',
    	'nom',
    	'dateNaissance',
        'lieuNaissance',
        'sexe',
        'matricule',
        'photo',
        'provenance',
        'pere',
        'mere',
        'tuteur',
        'contact',
        'adresse',

    ];

    protected $casts = [
        'dateNaissance' => 'date:d-m-Y',
    ];

    public function classe()
    {
    	return $this->belongsTo(Classeroom::class, 'classeroom_id', 'refClasse');
    }

    public function scopeNomComplet()
    {
        return $this->prenoms .' '. $this->nom;
    }
}
