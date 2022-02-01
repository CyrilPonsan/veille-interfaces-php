<?php

abstract class Animaux
{

    private string $nom;

    abstract function manger(int $nbreRepas): string;
    abstract function dormir(): void;

    public function __construct(string $n)
    {
        $this->nom = $n;
    }

    public function getNom() : string
    {
        return $this->nom;
    }
}

interface Terrestres
{

    public function courir(): void;
    public function crier(): void;
}

interface Aquatiques
{

    public function nager(): void;
    public function faireDesBulles(): void;
}
