# CONTRIBUTO RAPPRESENTATIVO 3 (XML - DOM)

Contribuenti:
 1. Luca Zanchetta;
 2. Mattia Aquilina.

---

Indirizzo del repository: https://github.com/luca-zanchetta/contributo3_XML-DOM_Zanchetta-Aquilina

Prima pagina visitabile: homepage.php

---

# DESCRIZIONE DEL LAVORO SVOLTO

L'idea principale è stata quella di voler creare una variante, senza troppe pretese, del noto portale "Infostud" della Sapienza. Un qualsiasi utente può visualizzare i corsi offerti dall'unico corso di laurea disponibile, con le relative informazioni ed i relativi appelli. L'applicazione web implementa due differenti modalità di visualizzazione: una visualizzazione di insieme, che permette cioè all'utente di visualizzare tutti i corsi (o tutti gli appelli, in base al pulsante premuto) contenuti nel relativo file XML, oppure una visualizzazione specifica, che permette all'utente di visualizzare tutti i corsi (o tutti gli appelli, in base al pulsante premuto) che soddisfino un determinato pattern di ricerca. È possibile apprezzare quest'ultima modalità di visualizzazione effettuando una ricerca nell'apposita barra situata in alto in posizione centrale nelle opportune pagine web del sito.

È inoltre possibile, mediante un account di amministrazione, avere accesso a diverse funzionalità. In particolare un amministratore, se loggato (credenziali di login: Username: admin; Password: admin), può inserire od elimnare un corso od un appello relativo ad un corso. L'inserimento (sia di un corso che di un appello) avviene tramite un'opportuna form dalla quale, mediante opportuni script php, è possibile estrarre i dati da inserire negli appositi file XML. L'eliminazione (sia di un corso che di un appello), invece, avviene attraverso la pressione del bottone "elimina" presente nell'opportuna schermata di visualizzazione; la pressione di questo pulsante attiverà un opportuno script php che eliminerà l'elemento (corso o appello) dal relativo file XML. In caso di eliminazione di un corso, naturalmente, verranno eliminati anche tutti gli appelli relativi al corso che si sta eliminando.

---

Le caratteristiche di XML (ed in particolare del modello DOM - Document Object Model) che si sono volute testare (ed implementare) in questo contributo sono state, a grandi linee, le seguenti:

- Visualizzazione dei dati contenuti in un file XML, da script PHP;
- Ricerca di un elemento contenuto in un file XML, da script PHP;
- Ricerca di un elemento contenuto in un file XML, il cui contenuto testuale di uno specifico tag soddisfi un determinato pattern, da script PHP (funzione preg_match());
- Inserimento di un elemento contenuto in un file XML, da script PHP;
- Eliminazione di un elemento contenuto in un file XML, da script PHP.

---
