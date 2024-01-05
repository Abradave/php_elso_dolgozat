<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="bg-body-secondary">
    <?php

    if (isset($_SESSION['state'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        switch ($_SESSION['state']) {
            case 'success':
                break;
            case 'error':
                foreach ($_SESSION['errors'] as $error) {
                    echo "<p>$error</p>";
                }
                break;
        }
        unset($_SESSION['state']);
        unset($_SESSION['message']);
        unset($_SESSION['errors']);
    }

    $errors = [];
    if (!isset($_POST["jarmu"]) || empty($_POST["jarmu"])) {
        $errors[] = "Jármű típus megadása kötelező";
    }
    if (!isset($_POST["gyartasi_ev"]) || empty($_POST["gyartasi_ev"])) {
        $errors[] = "Gyártási év megadása kötelező";
    }
    if (!isset($_POST["utas_kapacitas"]) || empty($_POST["utas_kapacitas"])) {
        $errors[] = "Utas kapacitás megadása kötelező";
    }
    if (!isset($_POST["gyartott_db"]) || empty($_POST["gyartott_db"])) {
        $errors[] = "Gyártott darab megadása kötelező";
    }

    if (empty($errors)) {
        require_once "methods.php";
        $database = new Methods();
        if (empty($errors)) {
            $database->newData($_POST);
        }
    }
    ?>
    <main class="container">
        <div class="navbar navbar-expand-lg bg-body-tertiary border">
            <nav class="navbar-nav">
                <a href="index.php" class="nav-link">Főoldal</a>
                <a href="regisztracio.php" class="nav-link">Regisztráció</a>
            </nav>
        </div>

        <form action="" method="post">
            <div class="mb-3">
                <label for="jarmu" class="form-label">Jármű fajtája</label>
                <input type="text" id="jarmu" name="jarmu" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gyartasi_ev" class="form-label">Gyártási év</label>
                <input type="year" name="gyartasi_ev" id="gyartasi_ev" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="utas_kapacitas" class="form-label">Utas Kapacitás</label>
                <input type="number" name="utas_kapacitas" id="utas_kapacitas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gyartott_db" class="form-label">Forgalomban</label>
                <input type="number" name="gyartott_db" id="gyartott_db" class="form-control" required>
            </div>
            <div class="form-check form-switch">
                <label for="kotottpalyas" class="form-check-label">Kötöttpályás</label>
                <input type="checkbox" name="kotottpalyas" id="kotottpalyas" class="form-check-input">
            </div>
            <button type="submit" class="btn btn-primary">Elküld</button>
        </form>
    </main>
</body>

</html>