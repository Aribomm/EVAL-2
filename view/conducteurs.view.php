<?php ob_start() ?>

<table class="table table-hover text-center table-lg">
  <thead class="table-dark">
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($conducteurs as $conducteur) : ?>
      <tr>
        <td><?= $conducteur->getNom() ?></td>
        <td><?= $conducteur->getPrenom() ?></td>
        <td>
          <form action="<?= URL ?>conducteurs/edit/<?= $conducteur->getId() ?>" method="post">
            <button type="submit" class="btn"><i class="fas fa-edit"></i></button>
          </form>
        </td>
        <td>
          <form action="<?= URL ?>conducteurs/delete/<?= $conducteur->getId() ?>" method="post" onSubmit="return confirm('Êtes-vous sûr de vouloir supprimer?')">
            <button type="submit" class="btn"><i class="fas fa-trash"></i></button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?= URL ?>conducteurs/add" class="btn btn-success w-25 d-block m-auto shadow">Ajouter un conducteur</a>

<?php
$content = ob_get_clean();
$title = "Liste des conducteurs";
require_once "base.html.php";
?>
