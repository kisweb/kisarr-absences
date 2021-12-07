<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classeroom extends Model
{
    use HasFactory;

    protected $fillable = ['refClasse', 'libClasse', 'niveau'];

    public function id()
    {
        return $this->id;
    }

    public function refClasse()
    {
        return $this->refClasse;
    }

    public function libClasse()
    {
        return $this->libClasse;
    }

    public function niveau()
    {
        return $this->niveau;
    }
}
