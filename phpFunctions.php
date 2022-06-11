<?php
/*======================================================*/
/*======================classi php======================*/
/*======================================================*/
class corso {
    public $id;
    public $nome;
    public $descrizione;
    public $info_prof;
    public $id_colore;
    public $anno;
    public $semestre;
    public $curriculum;
    public $cfu;
    public $ssd;
}
class utente {
    public $matricola;
    public $nome;
    public $cognome;
    public $password;
}
/*======================================================*/
/*=====================Funzioni php=====================*/
/*======================================================*/
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
function getCorsi(){
     /*accedo al file xml*/
    $xmlString = "";
    foreach ( file("corsi.xml") as $node ) {
        $xmlString .= trim($node);
    }
    
    // Creazione del documento
    $doc = new DOMDocument();
    $doc->loadXML($xmlString);
    $records = $doc->documentElement->childNodes;

    $listaCorsi = [];

    for ($i=0; $i<$records->length; $i++) {
        $corso = new corso();
        $record = $records->item($i);
        
        $con = $record->firstChild;
        $corso->id = $con->textContent;
        $con = $con->nextSibling;
        $corso->nome = $con->textContent;
        $con = $con->nextSibling;
        $corso->descrizione = $con->textContent;
        $con = $con->nextSibling;
        $corso->info_prof = $con->textContent;
        $con = $con->nextSibling;
        $corso->id_colore = $con->textContent;
        $con = $con->nextSibling;
        $corso->anno = $con->textContent;
        $con = $con->nextSibling;
        $corso->semstre = $con->textContent;
        $con = $con->nextSibling;
        $corso->curriculum = $con->textContent;
        $con = $con->nextSibling;
        $corso->cfu = $con->textContent;
        $con = $con->nextSibling;
        $corso->ssd = $con->textContent;
        
        $listaCorsi[] = $corso;
    }
    return $listaCorsi;

}
function getCorsoById($_id){
    /*accedo al file xml*/
    $xmlString = "";
   foreach ( file("corsi.xml") as $node ) {
       $xmlString .= trim($node);
   }
   
   // Creazione del documento
   $doc = new DOMDocument();
   $doc->loadXML($xmlString);
   $records = $doc->documentElement->childNodes;

   for ($i=0; $i<$records->length; $i++) {
       $corso = new corso();
       $record = $records->item($i);

       $con = $record->firstChild;
       $id = $con->textContent;
       if($id != $_id) continue; 

       $corso->id = $id;
       $con = $con->nextSibling;
       $corso->nome = $con->textContent;
       $con = $con->nextSibling;
       $corso->descrizione = $con->textContent;
       $con = $con->nextSibling;
       $corso->info_prof = $con->textContent;
       $con = $con->nextSibling;
       $corso->id_colore = $con->textContent;
       $con = $con->nextSibling;
       $corso->anno = $con->textContent;
       $con = $con->nextSibling;
       $corso->semestre = $con->textContent;
       $con = $con->nextSibling;
       $corso->curriculum = $con->textContent;
       $con = $con->nextSibling;
       $corso->cfu = $con->textContent;
       $con = $con->nextSibling;
       $corso->ssd = $con->textContent;
       
       return $corso;
   }
   return null;  
}
function getCorsiLike($_nome){
    $xmlString = "";
    foreach ( file("corsi.xml") as $node ) {
        $xmlString .= trim($node);
    }
    
    // Creazione del documento
    $doc = new DOMDocument();
    $doc->loadXML($xmlString);
    $records = $doc->documentElement->childNodes;

    $listaCorsi = [];

    for ($i=0; $i<$records->length; $i++) {
        $corso = new corso();
        $record = $records->item($i);
        
        $con = $record->firstChild;
        $corso->id = $con->textContent;
        $con = $con->nextSibling;
        $corso->nome = $con->textContent;  
        $con = $con->nextSibling;
        $corso->descrizione = $con->textContent;
        $con = $con->nextSibling;
        $corso->info_prof = $con->textContent;
        $con = $con->nextSibling;
        $corso->id_colore = $con->textContent;
        $con = $con->nextSibling;
        $corso->anno = $con->textContent;
        $con = $con->nextSibling;
        $corso->semstre = $con->textContent;
        $con = $con->nextSibling;
        $corso->curriculum = $con->textContent;
        $con = $con->nextSibling;
        $corso->cfu = $con->textContent;
        $con = $con->nextSibling;
        $corso->ssd = $con->textContent;
        
        /*controllo sul nome*/
        if(preg_match("#^{$_nome}#i", $corso->nome)) $listaCorsi[] = $corso;
    }
    return $listaCorsi;

}
function existsUser($_username,$_password){
    $xmlString = "";
    foreach ( file("utenti.xml") as $node ) {
        $xmlString .= trim($node);
    }
    
    // Creazione del documento
    $doc = new DOMDocument();
    $doc->loadXML($xmlString);
    $records = $doc->documentElement->childNodes;
    for ($i=0; $i<$records->length; $i++) {
        $record = $records->item($i);
        $user = new utente();
        $con = $record->firstChild;
        $user->matricola = $con->textContent;
        $con = $con->nextSibling;
        $user->nome = $con->textContent;  
        $con = $con->nextSibling;
        $user->cognome = $con->textContent;
        $con = $con->nextSibling;
        $user->password = $con->textContent;

        if(!strcmp($user->matricola, $_username) && !strcmp($user->password, $_password)){
            console_log("porco");
            return true;
        }
    }

    return false;
}

function getUserByUsername($_username) {
    $xmlString = "";
    foreach ( file("utenti.xml") as $node ) {
        $xmlString .= trim($node);
    }
    
    // Creazione del documento
    $doc = new DOMDocument();
    $doc->loadXML($xmlString);
    $records = $doc->documentElement->childNodes;
    for ($i=0; $i<$records->length; $i++) {
        $record = $records->item($i);
        $user = new utente();
        $con = $record->firstChild;
        $user->matricola = $con->textContent;
        $con = $con->nextSibling;
        $user->nome = $con->textContent;  
        $con = $con->nextSibling;
        $user->cognome = $con->textContent;
        $con = $con->nextSibling;
        $user->password = $con->textContent;
        
        if(!strcmp($user->matricola, $_username))
            return $user;
    }
    return null;
}
?>