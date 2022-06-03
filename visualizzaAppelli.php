<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="stylesheet" href="stile-base.css">
    <title>Homepage</title>
</head>
<body>
    <div class="header">
        <div class="nav-left">
            <div class="nav-logo">
                <a href="homepage.php">
                    <img src="https://store-images.s-microsoft.com/image/apps.51215.9007199266623456.05e3a154-d5ac-49d8-af6e-ab2f789dc26d.f443b25b-1668-48aa-8137-f8e5609aee45?mode=scale&q=90&h=300&w=300" alt="logo" width="90px">
                </a>
            </div>
            <div class="vertical-bar"></div>
                <h2>
                    <form action="">
                        <input type="button">
                    </form>
                    Infostud
                </h2>
            <div class="vertical-bar"></div>
                <h2>
                    <a class="logout" href="fittizia.html">
                        ADMIN
                    </a>
                </h2>
        </div>
        <div class="nav-central">
            <form action="homepage.php" method="GET">
                <div class="nav-logo">
                    <input type="submit" name="ricerca" value="">
                    <img src="search.png" alt="err" width="20px" style="display: inline-flex;">
                </div>    
                    <input type="text" name="filtro">              
            </form>
        </div>
        <div class="nav-right">
            <img src="account.png" alt="dasdas" width="90px">
        </div>
    </div>
    <div class="central-block">
        <div class="sidebar">
            <h5>
                <a class="opzione" href="fittizia.html">Visualizza corsi</a>
            </h5>
            <h5>
                <a class="opzione" href="fittizia.html">Visualizza appelli</a>
            </h5>
        </div>
        <div class="body">
            <h1 style="text-align: center; color: green;">APPELLI DISPONIBILI:</h1>
            <div class="container-esami">
                <?php
                // Stringa con il contenuto del file XML, privo di spazi o cose simili
                $xmlString = "";
                foreach ( file("appelli.xml") as $node ) {
                    $xmlString .= trim($node);
                }
                
                // Creazione del documento
                $doc = new DOMDocument();
                // Caricamento del contenuto informativo del file XML
                $doc->loadXML($xmlString);
                // Lista degli elementi del file XML caricato
                $records = $doc->documentElement->childNodes; 

                for ($i=0; $i<$records->length; $i++) {
                    $record = $records->item($i); // i-esimo appeello

                    $codiceElement = $record->firstChild;
                    $codice = $codiceElement->textContent;

                    /* WORK IN PROGRESS */
                }                
                
                /*
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            ?>
                                <div class="blocco-esame" style="background-color:<?php echo $row["id_colore"]?>">
                                    <div class="nome-esame" >
                                        <?php echo $row["nome"]?>
                                    </div> 
                                    <div class="info-button">
                                            Info
                                            <form action="visualizza-corso.php" method="GET"> <!--Da implementare  visualizza-corso.php-->
                                                <input type="submit" name="iscriviti" value="" >
                                                <input type="hidden" name="corso" value=" <?php echo $row["id"] ?>">
                                            </form>
                                    </div>  
                                </div>                                     
                        <?php
                        }  
                    }
                    elseif($result->num_rows == 0 and !isset($_GET['filtro'])) {
                        ?>
                            <form action="iscriviti.php" method="post">
                            <div class="zero-esami_central">
                                <h2>Non risultano iscrizioni ad alcun corso.</h2>
                                <input class="button-iscrizione" type="submit" name="iscriviti" value="ISCRIVITI AD UN CORSO">
                            </div>
                            </form>
                        <?php
                    }elseif($result->num_rows == 0 and isset($_GET['filtro'])) {
                        ?>
                            <form action="homepage.php" method="post">
                            <div class="zero-esami_central">
                                <h2>Non sei iscritto a nessun corso con quel nome. Forse devi ancora iscriverti.</h2>
                                <input class="button-iscrizione" type="submit" name="home" value="TORNA ALLA HOME">
                            </div>
                            </form>
                        <?php
                    }*/
                ?>   
            </div>           
        </div>
    </div>
</div>
</body>
</html>