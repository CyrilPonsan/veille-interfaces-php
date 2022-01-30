<?php

require_once './Animaux.classe.php';

class Ornithorynque extends Animaux implements Terrestres, Aquatiques
{

    public function manger(int $nbreRepas): string
    {
        return "des trucs " . $nbreRepas . " par jour";
    }

    public function  dormir(): void
    {
        echo "de temps en temps";
    }

    public function courir(): void
    {
        echo "quand il est sur terre";
    }

    public function crier(): void
    {
        echo "....";
    }

    public function nager(): void
    {
        echo "comme un ornithorynque dans l'eau";
    }

    public function faireDesBulles(): void
    {
        echo "qd il a le temps";
    }
}
