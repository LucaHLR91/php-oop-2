<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online.
Ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditariet√† dove necessario.
Ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
oppure diverse tipologie di prodotti.
BONUS:
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
        $c = new CreditCard(..);
        $user->insertCreditCard($c);
2.    Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php 
require_once 'shop.php';
require_once 'products.php';
require_once 'discount.php';
require_once 'user.php';



?>