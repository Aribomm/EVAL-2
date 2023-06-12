<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

require_once "controller/vehiculeController.php";
require_once "controller/conducteurController.php";
require_once "controller/associationController.php";

$vehiculeController = new VehiculeController();
$conducteurController = new ConducteurController();
$associationController = new AssociationController();

if (empty($_GET['page'])) {
    require_once "view/home.view.php";
} else {
    $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
    switch ($url[0]) {
        case 'accueil':
            require_once "view/home.view.php";
            break;
        case 'vehicules':
            if (empty($url[1])) {
                $vehiculeController->displayVehicules();
            } else if ($url[1] === "add") {
                $vehiculeController->newVehiculeForm();
            } else if ($url[1] === "addvalid") {
                $vehiculeController->newVehiculeValidation();
            } else if ($url[1] === "edit") {
                $vehiculeController->editVehiculeForm($url[2]);
            } else if ($url[1] === "editvalid") {
                $vehiculeController->editVehiculeValidation();
            } else if ($url[1] === "delete") {
                $vehiculeController->deleteVehicule($url[2]);
            }
            break;
        case 'conducteurs':
            if (empty($url[1])) {
                $conducteurController->displayConducteurs();
            } else if ($url[1] === "add") {
                $conducteurController->newConducteurForm();
            } else if ($url[1] === "addvalid") {
                $conducteurController->newConducteurValidation();
            } else if ($url[1] === "edit") {
                $conducteurController->editConducteurForm($url[2]);
            } else if ($url[1] === "editvalid") {
                $conducteurController->editConducteurValidation();
            } else if ($url[1] === "delete") {
                $conducteurController->deleteConducteur($url[2]);
            }
            break;
        case 'associations':
            if (empty($url[1])) {
                $associationController->displayAssociations();
            } else if ($url[1] === "add") {
                $associationController->newAssociationForm();
            } else if ($url[1] === "addvalid") {
                $associationController->newAssociationValidation();
            } else if ($url[1] === "edit") {
                $associationController->editAssociationForm($url[2]);
            } else if ($url[1] === "editvalid") {
                $associationController->editAssociationValidation();
            } else if ($url[1] === "delete") {
                $associationController->deleteAssociation($url[2]);
            }
            break;
    }
}
?>
