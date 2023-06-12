<?php ob_start() ?>
<p>Completez le formulaire pour modifier l'association</p>
    <form method="POST" action="index.php?id=<?php echo $association['id_association']; ?>">
        <label for="vehicleId">Vehicle ID:</label>
        <select name="vehicleId" id="vehicleId">
            <?php foreach ($vehicles as $vehicle): ?>
                <option value="<?php echo $vehicle['id']; ?>" <?php if ($vehicle['id'] === $association['id_vehicule']) echo 'selected'; ?>>
                    <?php echo $vehicle['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="driverId">Driver ID:</label>
        <select name="driverId" id="driverId">
            <?php foreach ($drivers as $driver): ?>
                <option value="<?php echo $driver['id']; ?>" <?php if ($driver['id'] === $association['id_conducteur']) echo 'selected'; ?>>
                    <?php echo $driver['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <button type="submit">Save</button>
    </form>

<?php
$content = ob_get_clean();
$title = "Édition de l'association (ID: " . $association->getId() . ")";
require_once "base.html.php";
?>
