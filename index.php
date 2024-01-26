<?php 
include __DIR__.'/partials/functions.php';

$random_password = '';

    if(isset($_GET['password'])) {
        $password = intval($_GET['password']);
        $random_password = generateRandomPassword($password);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-12">
                <form action="./index.php" method="GET">
                    <div class="row">
                        <div class="col-6 py-4">
                            <label for="control-label" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="col-6 py-4">
                            <label for="control-label" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Lunghezza Password" min='1'>
                        </div>
                        <div class="col-12 py-1 d-flex justify-content-center">
                            <button type="submit" class="btn btn-sm btn-primary">Genera</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 pt-4 text-center">
            <?php echo $random_password;?>
        </div>
    </div>
</body>
</html>