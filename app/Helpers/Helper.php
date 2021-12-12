<?php

use App\Models\Classeroom;

function nbClasses()
{
    return Classeroom::count();
}

function nbClassesNiveau(string $niveau)
{
    $c = Classeroom::where('niveau', 'like', '%'. $niveau .'%')->count();

    return $c;
}
