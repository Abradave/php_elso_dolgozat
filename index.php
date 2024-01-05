<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tömegközlekedési eszközök</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="bg-body-secondary">
    <?php
    require_once "methods.php";
    $database = new Methods();
    $jarmuvek = $database->getAll();

    ?>
    <main class="container">
        <div class="navbar navbar-expand-lg bg-body-tertiary border">
            <nav class="navbar-nav">
                <a href="index.php" class="nav-link">Főoldal</a>
                <a href="regisztracio.php" class="nav-link">Regisztráció</a>
            </nav>
        </div>

        <table class="table table-primary table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Jármű</th>
                    <th>Gyártási Év</th>
                    <th>Kötöttpályás</th>
                    <th>Utas Kapacitás</th>
                    <th>Forgalomban</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jarmuvek as $data) : ?>
                    <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['jarmu'] ?></td>
                        <td><?php echo $data['gyartasi_ev'] ?></td>
                        <td><?php echo $data['kotottpalyas'] ?></td>
                        <td><?php echo $data['utas_kapacitas'] ?></td>
                        <td><?php echo $data['gyartott_db'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>

</html>