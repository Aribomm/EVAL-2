<?php ob_start(); ?>

<a class="btn btn-primary" href="<?= URL ?>vehicules/add">Ajouter un véhicule</a>

<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Marque</th>
            <th scope="col">Modèle</th>
            <th scope="col">Couleur</th>
            <th scope="col">Immatriculation</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vehicules as $vehicule) : ?>
            <tr>
                <th scope="row"><?= $vehicule->getId() ?></th>
                <td><?= $vehicule->getMarque() ?></td>
                <td><?= $vehicule->getModele() ?></td>
                <td><?= $vehicule->getCouleur() ?></td>
                <td><?= $vehicule->getImmatriculation() ?></td>
                <td>
                <a href="<?= URL ?>vehicules/edit/<?= $vehicule->getId() ?>" class="btn btn-primary">Edit</a>
                <a class="btn btn-danger" href="<?= URL ?>vehicules/delete/<?= $vehicule->getId() ?>"><i class="fas fa-trash"></i></a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); ?>
<?php $title = 'Liste des véhicules'; ?>
<?php require_once 'view/base.html.php'; ?>
