<?php ob_start() ?>
<p>Completez le formulaire pour modifier le véhicule</p>

<form method="POST" action="<?= URL ?>vehicules/editvalid">
    <div class="form-group">
        <label for="marque">Marque du véhicule</label>
        <input type="text" class="form-control" value="<?= $vehicule->getMarque() ?>" name="marque" id="marque">
    </div>
    <div class="form-group">
        <label for="modele">Modèle du véhicule</label>
        <input type="text" class="form-control" value="<?= $vehicule->getModele() ?>" name="modele" id="modele">
    </div>
    <div class="form-group">
        <label for="couleur">Couleur du véhicule</label>
        <input type="text" class="form-control" value="<?= $vehicule->getCouleur() ?>" name="couleur" id="couleur">
    </div>
    <div class="form-group">
        <label for="immatriculation">Immatriculation du véhicule</label>
        <input type="text" class="form-control" value="<?= $vehicule->getImmatriculation() ?>" name="immatriculation" id="immatriculation">
    </div>
    <input type="hidden" name="id-vehicule" value="<?= $vehicule->getId() ?>">
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<?php
$content = ob_get_clean();
$title = "Edition de : " . $vehicule->getMarque() . " " . $vehicule->getModele();
require_once "base.html.php";
?>
