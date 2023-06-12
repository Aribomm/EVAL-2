<?php

class Association
{
    private int $associationId;
    private Vehicule $vehicule;
    private Conducteur $conducteur;

    public function __construct(int $associationId, Vehicule $vehicule, Conducteur $conducteur)
    {
        $this->associationId = $associationId;
        $this->vehicule = $vehicule;
        $this->conducteur = $conducteur;
    }

    public function getAssociationId(): int
    {
        return $this->associationId;
    }

    public function getVehicule(): Vehicule
    {
        return $this->vehicule;
    }

    public function getConducteur(): Conducteur
    {
        return $this->conducteur;
    }
}