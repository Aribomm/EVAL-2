<?php ob_start() ?>

<h2 class="mt-4">Liste des associations</h2>

<table class="table table-hover text-center table-lg">
    <thead class="table-dark">
        <tr>
            <th>Association ID</th>
            <th>Véhicule ID</th>
            <th>Conducteur ID</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($associations as $association) : ?>
            <tr>
                <td><?= $association->getAssociationId() ?></td>
                <td><?= $association->getVehiculeId() ?></td>
                <td><?= $association->getConducteurId() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); ?>
<?php $title = 'Liste des associations'; ?>
<?php require_once 'view/base.html.php'; ?>
