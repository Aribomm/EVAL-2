<?php

require_once 'modele/AssociationManager.php';
class AssociationController
{
    private $associationManager;

    public function __construct()
    {
        $this->associationManager = new AssociationManager();
    }

    public function displayAssociations()
    {
        $associations = $this->associationManager->loadAssociations();
        require 'view/association.view.php';
    }

}


?>
