<?php
    require_once('phpFunctions.php');
    if(isset($_GET['appello'])){
        if(eliminaAppello($_GET['appello']))
            header("Location: avvisoOk.html");
        else
            header("Location: avvisoErrore.html");
    }
?>