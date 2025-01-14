<?php

if(isset($_SESSION["user"]) && !$_GET["exit"]){
    header("Location: employee/render") ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>
</head>
<body>
<form action="<?= BASE_URL ?>login/singin" method="post">
<!-- <?= BASE_URL ?> -->
<section class="vh-100" style="background-color: #6a6a6a;">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

            <h3 class="mb-2">Login to</h3>
            <h3 class="mb-5">Employees Management</h3>
                <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2">Email</label>
                    <input type="email" id="typeEmailX-2" name="nameLogin" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX-2">Password</label>
                    <input type="password" id="typePasswordX-2" name="namePassword" class="form-control form-control-lg" />
                </div>

<?php
    if ($_SERVER['QUERY_STRING'] == "error=true") {
        echo "<p id='errorMsg'>The email or the password are incorrects</p>";
    };
    if ($_SERVER['QUERY_STRING'] == "notSession=true") {
        echo "<p id='errorMsg'>You have to log in!</p>";
    };
?>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Log in</button>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</form>
</body>
</html>