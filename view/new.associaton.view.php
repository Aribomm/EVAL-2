<?php ob_start() ?>

<p>Ajouter un association</p>

<?php 
$content = ob_get_clean();
$title = "Ajouter un conducteur";
require_once "base.html.php";
?>

<form class="" method="POST" action="<?= URL ?>association/add">
    <div class="form-group">
        <label for="vehiculeId">ID du véhicule</label>
        <input type="text" class="form-control" name="vehiculeId" id="vehiculeId">
    </div>
    <div class="form-group">
        <label for="conducteurId">ID du conducteur</label>
        <input type="text" class="form-control" name="conducteurId" id="conducteurId">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
