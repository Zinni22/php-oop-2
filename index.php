<?php
require_once __DIR__.'/classes/product.php';
require_once __DIR__.'/classes/food.php';
require_once __DIR__.'/classes/toy.php';
require_once __DIR__.'/classes/cuccia.php';

// CATEGORIE
$dogCategory = new Category(
    'Cani',
    '&#128054;'
);
$catCategory = new Category(
    'Gatti',
    '&#128049;'
);


$productsArray = [];
// PRODOTTI GENERALI
$productsArray[] = new Product(
    'Lettiera per gatti',
    9.99,
    'https://arcaplanet.vtexassets.com/arquivos/ids/270557/perfect-lettiera-agglomerante-eco-vegetale-20-l.jpg?v=1764603099&quality=1&width=80&height=80',
    12,
    $catCategory,
);

// PRODOTTI => CIBO
$productsArray[] = new Food(
    'Crocchette',
    12.99,
    'https://www.gardenbedettishop.com/14348-large_default/crocchette-per-cani-prolife-sensitive-grain-free-sensitive-manzo-e-patate-adult-mediumlarge-nutrigenomic-10-kg.jpg',
    25,
    $dogCategory,
    '12/05/2025',
);

// PRODOTTI => GIOCHI
$productsArray[] = new Toy(
    'Tiragraffi',
    14.99,
    'https://www.grupposanmarco.eu/image/cache/catalog/product-6856/tiragraffi-dune-blu-4-800x800.jpg',
    30,
    $catCategory,
    'Compensato, Legno, <br> Moquette, Corda in sisal',
);

// PRODOTTI => CUCCIA
$productsArray[] = new Cuccia(
    'Cuccia',
    79.99,
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3hq-tfZh0gULbaG4wCwLE0rYChzNSG1aQSw&usqp=CAU',
    30,
    $dogCategory,
    '73 x 85 x 67.5 cm'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <!-- MIO CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1>
        PHPet Shop
        </h1>
    </header>

    <main>

        <?php
            foreach($productsArray as $index => $product){
        ?>

            <div class="product">
                <h3>
                    <?php
                    echo $product->name;
                    ?>
                </h3>

                <img src="
                <?php
                    echo $product->image;
                    ?>
                " alt="">
                    
                <p>
                    <strong>Prezzo:</strong>
                    <?php
                    echo $product->price;
                    ?> €
                </p>

                <p>
                    <strong>Categoria:</strong>
                    <?php
                    echo $product->category->icon;
                    ?>
                </p>

                <p>
                    <?php
                    echo $product->expiration;
                    ?>
                </p>

                <p>
                    <?php
                    echo $product->material;
                    ?>
                </p>

                <p>
                    <?php
                    echo $product->size;
                    ?>
                </p>
                
            </div>

        <?php
            }
        ?>
    </main>
    
</body>
</html>