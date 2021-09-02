<?php


//TODO Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

//TODO Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... $c = new CreditCard(..); $user->insertCreditCard($c);

//TODO BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).




//* Il progetto è così strutturato: creiamo un file user.php dove andremo ad inserire delle tessere fedeltà, ognuna delle quali avrà delle agevolazioni. Dopodiché creiamo un secondo file, denominato user_plus.php che non sarà altro che il nostro "Employee.php", ovvero la classe figlio di user.php (classe genitore), dove inseriremo anche gli utenti premium, che avranno delle agevolazioni maggiori. Per collegare il tutto utilizzo il require_once 'user.php' all'interno di user_plus.php, e il require_once 'user_plus.php' all'interno di 'index.php'.


// require_once 'user.php';
require_once 'user_plus.php';



$UserOne = new NormalUser('Pippo', 'Rossi');
$UserOne->setCard(1);

$UserTwo = new NormalUser('Pluto', 'Verdi');
$UserTwo->setCard(2);

$UserThree = new PremiumUser('Paperino', 'Gialli');
$UserThree->setCard(3);
$UserThree->setPremio('più un prodotto gratuito')






?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>
        <?php echo "L'utente " . $UserOne->getFullName() . " ha la carta Basic, quindi ha diritto ad uno sconto del " . $UserOne->getCard() . '%'; ?>
    </h2>

    <h2>
        <?php echo "L'utente " . $UserTwo->getFullName() . " ha la carta Silver, quindi ha diritto ad uno sconto del " . $UserTwo->getCard() . '%'; ?>
    </h2>

    <h2>
        <?php echo "L'utente " . $UserThree->getFullName() . " ha la carta Gold, quindi ha diritto ad uno sconto del " . $UserThree->getCard() . '% ' . $UserThree->getPremio() ; ?>
    </h2>



</body>
</html>