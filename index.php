<?php
require_once __DIR__ .'/class/customer/Customer.php';
require_once __DIR__ .'/class/customer/Registered.php';

 require_once __DIR__ .'/class/db/items.php';

$customer1 = new Customer("Vasco","Bianchi","vaschissimo@gmail.com",['crocchette cane S','cuccia cane S'],'123456789','22/05/01');
$user1 = new Registered("Paolo","Menegazzi","paolone@gmail.com",['crocchette gatto','cuscino gatto'],'123456789','22/05/01');
$user1->setDiscount(20);
var_dump($user1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animal House</title>
</head>
<body>

  <head>

  </head>

  <main>
    <?php echo $user1->getDiscount(); ?>

    
  </main>

</body>
</html>