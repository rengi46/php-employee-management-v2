<?php

if(!isset($_SESSION["user"])){
    header("Location: ../login") ;
}

?>
<?php require_once VIEWS."templets/header.php" ?>


<div id="jsGrid"></div>


<?php require VIEWS."templets/footer.php";?>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer> </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js" defer></script>
<script type="text/javascript" src="<?= JS?>index.js" defer></script>
