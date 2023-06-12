<?php ob_start(); ?>



<form class="" method="POST" action="<?= URL ?>vehicules/add">
    <div class="form-group">
        <label for="marque">Marque</label>
        <input type="text" class="form-control" id="marque" name="marque" required>
    </div>
    <div class="form-group">
        <label for="modele">Modèle</label>
        <input type="text" class="form-control" id="modele" name="modele" required>
    </div>
    <div class="form-group">
        <label for="couleur">Couleur</label>
        <input type="text" class="form-control" id="couleur" name="couleur" required>
    </div>
    <div class="form-group">
        <label for="immatriculation">Immatriculation</label>
        <input type="text" class="form-control" id="immatriculation" name="immatriculation" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php $title = 'Ajouter un véhicule'; ?>
<?php require_once 'view/base.html.php'; ?>
