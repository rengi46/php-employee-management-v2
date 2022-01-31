<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= constant("CSS")?>styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <link type="text/css" rel="stylesheet" href="<?= CSS?>/main.css" />
    <script src="<?= JS?>timeBack.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand me-2" href="#/">
                <img src="https://pbs.twimg.com/profile_images/1481754738534322176/mgo8r_Qv_400x400.png" height="40" alt="Logo" loading="lazy" style="margin-top: -1px;" />
                </a>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item boton" id="dashPage"><a href="<?= BASE_URL ?>employee/render">Dashboard</a> </li>
                    
                    <li class="breadcrumb-item boton" id="employeesPage"><a href="<?= BASE_URL ?>employee/render2">Employees</a></li>
                </ol>
                </nav>
                <div class="d-flex align-items-center">
                <button type="button" class="btn btn-link boton"><a class="link-warning" href="../login/logout?exit=true">Log Out</a></button>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>