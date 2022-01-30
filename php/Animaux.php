<?php

abstract class Animaux
{

    protected string $nom;

    abstract function manger(int $nbreRepas): string;
    abstract function dormir(): void;
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
