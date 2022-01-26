




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= constant("CSS")?>style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand me-2" href="#/">
                <img src="../assets/images/IFunny-Logo.png" height="40" alt="Logo" loading="lazy" style="margin-top: -1px;" />
                </a>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" id="dashPage"><a href="render">Dashboard</a> </li>
                    <li class="breadcrumb-item" id="employeesPage"><a href="getEmployees">Employees</a></li>
                </ol>
                </nav>
                <div class="d-flex align-items-center">
                <button type="button" class="btn btn-link"><a class="link-warning" href="./library/loginController.php?Logout">LogOut</a></button>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>