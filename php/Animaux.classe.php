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

    public function getNom(): string
    {
        return $this->nom;
    }
}

class Terestres extends Animaux
{

    public function manger(int $nbreRepas): string
    {
        return parent::getNom() . " mange de tout " . $nbreRepas . " fois par jour <br>";
    }
    public function dormir(): void
    {
        echo "dort bcp <br>";
    }
    public function courir(int $vitesse): void
    {
        echo parent::getNom() . " court à " . $vitesse . " km/h <br>";
    }
}

class Aquatiques extends Animaux
{

    public function manger(int $nbreRepas): string
    {
        return parent::getNom() . " mange ce qu'il trouve " . $nbreRepas . " fois par mois <br>";
    }
    public function dormir(): void
    {
        echo "dort pas bcp <br>";
    }
    public function nager(int $vitesse): void
    {
        echo "nage à " . $vitesse;
    }
}
