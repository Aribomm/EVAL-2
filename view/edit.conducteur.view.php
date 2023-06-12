<?php ob_start() ?>
<p>Completez le formulaire pour modifier le conducteur</p>

<form method="POST" action="<?= URL ?>conducteurs/editvalid">
    <div class="form-group">
        <label for="nom">Nom du conducteur</label>
        <input type="text" class="form-control" value="<?= $conducteur->getNom() ?>" name="nom" id="nom">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom du conducteur</label>
        <input type="text" class="form-control" value="<?= $conducteur->getPrenom() ?>" name="prenom" id="prenom">
    </div>
    <input type="hidden" name="id-conducteur" value="<?= $conducteur->getId() ?>">
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<?php
$content = ob_get_clean();
$title = "Édition de : " . $conducteur->getNom() . " " . $conducteur->getPrenom();
require_once "base.html.php";
?>
