<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="<?= CSS ?>/error.css" />
    <title>Error</title>
</head>
<body>
    <section class="notFound">
        <div class="img">
        <img src="https://assets.codepen.io/5647096/backToTheHomepage.png" alt="Back to the Homepage"/>
        <img src="https://assets.codepen.io/5647096/Delorean.png" alt="El Delorean, El Doc y Marti McFly"/>
        </div>
        <div class="text">
        <h1>404</h1>
        <h2><?= $this->mensaje ?></h2>
        <h3>BACK TO HOME?</h3>
        <a href="<?=BASE_URL?>employee/render" class="yes">YES</a>
        <a href="https://www.youtube.com/watch?v=G3AfIvJBcGo">NO</a>
        </div>
    </section>
</body>
</html>