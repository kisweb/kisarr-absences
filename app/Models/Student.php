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

    public function classeroom()
    {
    	return $this->belongsTo(Classeroom::class);
    }

    public function scopeNomComplet()
    {
        return $this->prenoms .' '. $this->nom;
    }

    public static function search($search)
    {
       return empty($search)
       ? static::query()
       : static::query()->where('matricule', 'like', '%' . $search . '%')
                ->orWhere('prenoms', 'like', '%' . $search . '%')
                ->orWhere('nom', 'like', '%' . $search . '%');
    }
}
