<?php

require_once "manager.php";
require_once "vehicule.php";

class VehiculeManager extends Manager
{
    private $vehicules;

    public function addVehicule($vehicule)
    {
        $this->vehicules[] = $vehicule;
    }

    public function getVehicules()
    {
        return $this->vehicules;
    }

    public function loadVehicules()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM vehicule");
        $req->execute();
        $myVehicules = $req->fetchAll();
        $req->closeCursor();

        foreach ($myVehicules as $vehicule) {
            $v = new Vehicule($vehicule['id_vehicule'], $vehicule['marque'], $vehicule['modele'], $vehicule['couleur'], $vehicule['immatriculation']);
            $this->addVehicule($v);
        }
    }

    public function newVehiculeDB($marque, $modele, $couleur, $immatriculation)
    {
        $req = "INSERT INTO vehicule (marque, modele, couleur, immatriculation)
              VALUES (:marque, :modele, :couleur, :immatriculation)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":marque", $marque, PDO::PARAM_STR);
        $statement->bindValue(":modele", $modele, PDO::PARAM_STR);
        $statement->bindValue(":couleur", $couleur, PDO::PARAM_STR);
        $statement->bindValue(":immatriculation", $immatriculation, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();
        if ($result) {
            $vehicule = new Vehicule($this->getBdd()->lastInsertId(), $marque, $modele, $couleur, $immatriculation);
            $this->addVehicule($vehicule);
        }
    }

    public function getVehiculeById($id)
    {
        foreach ($this->vehicules as $vehicule) {
            if ($vehicule->getId() == $id) {
                return $vehicule;
            }
        }
    }

    public function editVehiculeDB($id, $marque, $modele, $couleur, $immatriculation)
    {
        $req = "UPDATE vehicule SET marque = :marque, modele = :modele, couleur = :couleur, immatriculation = :immatriculation
        WHERE id_vehicule = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->bindValue(":marque", $marque, PDO::PARAM_STR);
        $statement->bindValue(":modele", $modele, PDO::PARAM_STR);
        $statement->bindValue(":couleur", $couleur, PDO::PARAM_STR);
        $statement->bindValue(":immatriculation", $immatriculation, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if ($result) {
            $vehicule = $this->getVehiculeById($id);
            $vehicule->setMarque($marque);
            $vehicule->setModele($modele);
            $vehicule->setCouleur($couleur);
            $vehicule->setImmatriculation($immatriculation);
        }
    }

    public function deleteVehiculeDB($id)
    {
        $req = "DELETE FROM vehicule WHERE id_vehicule = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $result = $statement->execute();
        $statement->closeCursor();
        if ($result){
            $vehicule = $this->getVehiculeById($id);
            unset($vehicule);
        }
    }
    
}
