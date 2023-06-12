<?php


require_once "manager.php";
require_once "association.php";

class AssociationManager
{
    private $vehiculeManager;
    private $conducteurManager;

    public function __construct()
    {
        $this->vehiculeManager = new VehiculeManager();
        $this->conducteurManager = new ConducteurManager();
    }

    public function loadAssociations()
    {
        $associations = [];

 
        $associationData = [
            [
                'id_association' => 1,
                'id_vehicule' => 1,
                'id_conducteur' => 1
            ],
            [
                'id_association' => 2,
                'id_vehicule' => 2,
                'id_conducteur' => 2
            ],
        ];

        foreach ($associationData as $data) {
            $associationId = $data['id_association'];
            $vehiculeId = $data['id_vehicule'];
            $conducteurId = $data['id_conducteur'];

            $vehicule = $this->vehiculeManager->getVehiculeById($vehiculeId);
            $conducteur = $this->conducteurManager->getConducteurById($conducteurId);

            $association = new Association($associationId, $vehicule, $conducteur);

            $associations[] = $association;
        }

        return $associations;
    }

 
}
