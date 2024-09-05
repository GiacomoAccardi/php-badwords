Esercizio di oggi: PHP Badwords
nome repo: php-badwords

Descrizione: Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni: ****- stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

Ricordatevi di fare sempre il file README.md.

Numero di push obbligatori: 7/8.

**Cosa fare**
1. Creare file index.php
2. Creare una pagina che contenga un form con due input
    - Un input che permetta di scrivere un testo 
    - Un input che permetta di scrivere una parola da censurare
3. Creare un nuovo file php 
4. All'interno di questo nuovo file tramite "$_GET" Recuperiamo i valori delle form
5. Sempre all'interno del nuovo file, sostituire la parola da censurare utilizzando "str_replace()"
6. stampare il paragrafo censurato e utilizzare "strlen()" per contare la lunghezza del paragrafo in caratteri 