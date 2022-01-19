
<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->



<?php

  require_once __DIR__ . "/classes/Shop.php";
  require_once __DIR__ . "/classes/Product.php";
  require_once __DIR__ . "/classes/User.php";
  require_once __DIR__ . "/classes/UserPremium.php";
  require_once __DIR__ . "/classes/Payment.php";
  require_once __DIR__ . "/classes/PayCard.php";

  $new_shop = new Shop("Ciccia Buffa S.r.l.");
  $new_shop->streetName = "via nonloso";
  $new_shop->town = "Strangolagalli ";
  $new_shop->country = "Italia";
  // var_dump($new_shop);
  // var_dump($new_shop->getGenericAddress());

  $new_product = new Product("Spremiagrumi elettrico", 30, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aperiam.");
  // var_dump($new_product);

  $new_user = new User("Giada", "Saputo");
  $new_user-> getDob();
  $new_user->streetName = "via noncè";
  $new_user->town = "Monterotondo ";
  $new_user->postCode = 12345;
  $new_user->country = "Italia";
  //var_dump( $new_user);
  //var_dump( $new_user->getAddressShipping());

  $premium_user = new UserPremium("Giada", "Saputo");
  $premium_user->setCustomerPremium("Silver");
  //var_dump($premium_user);


  $new_user->addProductToCart($new_product);
  $premium_user->addProductToCart($new_product);
  // var_dump($new_user);
  // var_dump($premium_user);


  $new_payment = new Payment("carta");
  // var_dump($new_payment);

  

  try {
    $new_payCard = new PayCard("carta", 121212121212 , "01/2020");
    var_dump($new_payCard);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
  
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
    <!-- e-commerce name -->
  <h1>
    <?php echo  $new_shop->getName()?>
  </h1>

  <!-- product -->
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

  <!-- user -->
  <p>
    <?php echo $new_user->getName() ?>
    <?php echo $new_user->getLastname() ?>
    <?php echo $new_user->customerDiscount() ?>
  </p>

  <!-- payment -->
  <p>
    <?php echo $new_payment->payType() ?>
  </p>
  <p>
    Pago con
    <?php echo $new_payment->getType() ?>
  </p>



</body>
</html>