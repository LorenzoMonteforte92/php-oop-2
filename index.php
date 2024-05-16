<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Category.php';

//istanza di category
$dogs = new Category('Cani');
$cats = new Category('Gatti');

//istanze di Food figlia di Product
$mongeDogMoist = new Food('https://picsum.photos/200', 'Pappa Buona', 'Monge', 'Cibo umido con alto apporto nutritivo', 9.99, '250g', 'umido', $dogs );
$mongeDogMoist->setAge('Cucciolo');

$NaturalTrainerCatDry = new Food('https://picsum.photos/200', 'Crocchi Crocchi', 'Natural Trainer', 'Crocchette con alto apporto nutritivo per gatti sterilizzati', 19.99, '1000g', 'secco', $cats );
$NaturalTrainerCatDry->setAge('Adulto');

//istanze di Kennel figlia di Product
$waterproofDogCoat = new Kennel('https://picsum.photos/200', 'Cuccia Cane', 'Cuccia Via', 'cuccia per cane di grossa taglia', 14.99, 'L', $dogs);
$sweaterCat = new Kennel('https://picsum.photos/200', 'Cuccia gatto', 'Gattuccia', 'cuccia per gatto', 12.99, 'S', $cats);

//instanze di Toy
$plushDog = new Toy('https://picsum.photos/200', 'Scoiattolo Peluche', 'Active Dog', 'peluche scoiattolo', 3.99, $dogs);
$plushDog->setAge('Cucciolo');

$catnipBallCat = new Toy('https://picsum.photos/200', 'Palla di Gatto', 'Dynamicat', 'Pallina di erba gatta', 4.99, $cats);
$catnipBallCat->setAge('Adulto');


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PetShop</title>
</head>
<body>
<header class="bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Logo</h1>
            </div>
        </div>
    </div>
</header>
<main>
<!-- prodotti per gatti -->
    <div class="container my-5">
        <div class="row my-3">
            <h2 class=" py-3" >Prodotti per Gatti</h2>
            <div class="col-12 d-flex gap-4">
            <?php foreach($catProducts as $catProduct) { ?>
                <div class="card" style="width: calc(100% / 3);">
                    <img src="<?php echo $catProduct->image?>" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title"><?php echo $catProduct->name ?></h5>
                        <h6 class="card-text"><?php echo $catProduct->brand ?></h6>
                        <div class="card-text">
                            <p><?php echo $catProduct->description ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="card-text"><?php echo $catProduct->price?>$</p>
                            <p class="card-text"><?php echo $catProduct->category->name?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
<!-- /prodotti per gatti -->

<!-- prodotti per cani -->
        <div class="row my-3">
            <h2 class=" py-3" >Prodotti per Cani</h2>
            <div class="col-12 d-flex gap-4">
            <?php foreach($dogProducts as $dogProduct) { ?>
                <div class="card" style="width: calc(100% / 3);">
                    <img src="<?php echo $dogProduct->image?>" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title"><?php echo $dogProduct->name ?></h5>
                        <h6 class="card-text"><?php echo $dogProduct->brand ?></h6>
                        <div class="card-text"><p ><?php echo $dogProduct->description ?></p></div>
                        <div class="d-flex justify-content-between">
                            <p class="card-text"><?php echo $dogProduct->price?>$</p>
                            <p class="card-text"><?php echo $dogProduct->category->name?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
<!-- /prodotti per cani -->
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>