<?php ob_start() ?>

<?php 
$content = ob_get_clean();
$title = "Ajouter un conducteur";
require_once "base.html.php";
?>

<form class="my-4 mx-auto" style="max-width: 300px;" method="POST" action="<?= URL ?>conducteurs/add">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" name="prenom" id="prenom">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
