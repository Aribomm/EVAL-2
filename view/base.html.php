<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/morph/bootstrap.min.css" integrity="sha512-9kbRw+1/EdzoBB85Lhvmksr87jNAj6Vl4ebRgJvz+1mUmRE9y78ROqc1mXSMsbOyxwip+U7AAZldtOR3lartQw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MVC - POO</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>vehicules">Véhicules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>conducteurs">Conducteurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>associations">Associations</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1 class="my-4 text-center bg-secondary shadow p-2">
            <?= $title ?>
        </h1>
        <?= $content ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eTUlwIyQ2J4GtcOH7rFxWruZnFMs3Q4R4Rkk+AiBjG7E4Q5Q4TD7+gjhxWZgm" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
