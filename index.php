
<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->



<?php

  require_once __DIR__ . "/classes/Shop.php";
  require_once __DIR__ . "/classes/ShopProduct.php";
  require_once __DIR__ . "/classes/User.php";
  require_once __DIR__ . "/classes/UserPremium.php";
  require_once __DIR__ . "/classes/Payment.php";
  require_once __DIR__ . "/classes/PayCard.php";
  require_once __DIR__ . "/classes/PayCashOnDelivery.php";

  $new_shop = new Shop("Ciccia Buffa S.r.l.");
  var_dump($new_shop);

  $new_product = new ShopProduct("Spremiagrumi elettrico", 30, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aperiam.");
  var_dump($new_product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .product{
      width: 200px;
      background-color: lightgreen;
    }
  </style>

  <title>php-oop-2</title>
</head>
<body>

  <h1>
    <?php echo  $new_shop->getName()?>
  </h1>

  <div class="product">
    <h3>
      <?php echo $new_product->getName() ?>
    </h3>
    <h4>
      Prezzo:
      <?php echo $new_product->getPrice() ?>
    </h4>
    <p>
      Descrizione:
      <?php echo $new_product->getDescription() ?>
    </p>
  </div>
  
</body>
</html>