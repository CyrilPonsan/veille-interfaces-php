<?php

include './php/Animaux.php';

class Ornithorynque extends Animaux implements Terrestres, Aquatiques
{

    public function manger(int $nbreRepas): string
    {
        return "des trucs " . $nbreRepas . " fois par jour<br>";
    }

    public function  dormir(): void
    {
        echo "de temps en temps<br>";
    }

    public function courir(): void
    {
        echo "quand il est sur terre<br>";
    }

    public function crier(): void
    {
        echo "....<br>";
    }

    public function nager(): void
    {
        echo "comme un ornithorynque dans l'eau<br>";
    }

    public function faireDesBulles(): void
    {
        echo "qd il a le temps<br>";
    }
}
