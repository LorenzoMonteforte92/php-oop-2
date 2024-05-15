<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';

//instanze di Product
$plushDog = new Product('dd', 'Active Dog', 'peluche scoiattolo', 3.99,);
$catnipBallCat = new Product('dd', 'Dynamicat', 'Pallina di erba gatta', 4.99,);

//istanze di Food figlia di Product
$mongeDogMoist = new Food('dd', 'Monge', 'Cibo umido con alto apporto nutritivo', 9.99, '250g', 'umido' );
$NaturalTrainerCatDry = new Food('dd', 'Natural Trainer', 'Crocchette con alto apporto nutritivo per gatti sterilizzati', 19.99, '1000g', 'secco' );

//istanze di Kennel figlia di Product
$waterproofDogCoat = new Kennel('dd', 'Cuccia Via', 'cuccia per cane di grossa taglia', 14.99, 'L',);
$sweaterCat = new Kennel('dd', 'Gattuccia', 'cuccia per gatto', 12.99, 'S');





//array che raccolgono prodotti per categorie: cane o gatto
$dogProducts = [
    $plushDog,
    $mongeDogMoist,
    $waterproofDogCoat,
];

$catProducts = [
    $catnipBallCat,
    $NaturalTrainerCatDry,
    $sweaterCat,
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
</head>
<body>
   
</body>
</html>