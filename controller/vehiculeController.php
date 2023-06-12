<?php

require_once "modele/VehiculeManager.php";
require_once "Vehicule.php";

class VehiculeController
{
    private $vehiculeManager;

    public function __construct()
    {
        $this->vehiculeManager = new VehiculeManager();
        $this->vehiculeManager->loadVehicules();
    }

    public function displayVehicules()
    {
        $vehicules = $this->vehiculeManager->getVehicules();
        require_once "view/vehicules.view.php";
    }

    public function newVehiculeForm()
    {
      
        require_once "view/new.vehicule.view.php";
       
    }
  
    public function newVehiculeValidation()
    {
        $this->vehiculeManager->newVehiculeDB($_POST['marque'], $_POST['modele'], $_POST['couleur'], $_POST['immatriculation']);
        header('Location: ' . URL . "vehicules");
        exit();
    }

    public function editVehiculeForm($id)
    {
        $vehicule = $this->vehiculeManager->getVehiculeById($id);
        if (!$vehicule) {
          
            header('Location: ' . URL . 'vehicules');
            exit();
        }
        require_once "view/edit.vehicule.view.php";
    }
    public function editVehiculeValidation()
    {
        $this->vehiculeManager->editVehiculeDB($_POST['id-vehicule'], $_POST['marque'], $_POST['modele'], $_POST['couleur'], $_POST['immatriculation']);
        header('Location: ' . URL . "vehicules");
        exit();
    }

    public function deleteVehicule($id)
    {
        $this->vehiculeManager->deleteVehiculeDB($id);
        header('Location: ' . URL . "vehicules");
      
    }
}
