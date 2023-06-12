<?php

require_once "modele/ConducteurManager.php";

class ConducteurController
{
    private $conducteurManager;

    public function __construct()
    {
        $this->conducteurManager = new ConducteurManager;
        $this->conducteurManager->loadConducteurs();
    }

    public function displayConducteurs()
    {
        $conducteurs = $this->conducteurManager->getConducteurs();
        require_once "view/conducteurs.view.php";
    }

    public function newConducteurForm()
    {
        require_once "view/new.conducteur.view.php";
    }

    public function newConducteurValidation()
    {
        $this->conducteurManager->newConducteurDB($_POST['nom'], $_POST['prenom']);
        header('Location: ' . URL . "conducteurs");
    }

    public function editConducteurForm($id)
    {
        $conducteur = $this->conducteurManager->getConducteurById($id);
        require_once "view/edit.conducteur.view.php";
    }

    public function editConducteurValidation()
    {
        $this->conducteurManager->editConducteurDB($_POST['id-conducteur'], $_POST['nom'], $_POST['prenom']);
        header('Location:' . URL . "conducteurs");
    }

    public function deleteConducteur($id)
    {
        $this->conducteurManager->deleteConducteurDB($id);
        header('Location:' . URL . "conducteurs");
    }
}
