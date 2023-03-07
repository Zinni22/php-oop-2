<?php
require_once __DIR__.'/classes/product.php';

// CATEGORIE
$dogCategory = new Category(
    'Cani',
    '&#128054;'
);
$catCategory = new Category(
    'Gatti',
    '&#128049;'
);


$products = [];
// PRODOTTI GENERALI
$products[] = new Product(
    'Lettiera per gatti',
    9.99,
    'https://arcaplanet.vtexassets.com/arquivos/ids/270557/perfect-lettiera-agglomerante-eco-vegetale-20-l.jpg?v=1764603099&quality=1&width=80&height=80',
    12,
    $catCategory,
);

// PRODOTTI => CIBO
// PRODOTTI => GIOCHI
// PRODOTTI => CUCCIA


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
        PHP OOP 2
        </h1>
    </header>

    <main>
        <div>
            <?php
                foreach($products as $index => $product){
            ?>
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
                    <?php
                    echo $product->price;
                    ?>
                </p>

                <p>
                    <?php
                    echo $product->category->icon;
                    ?>
                </p>
                

            <?php
                }
            ?>
        </div>
    </main>
    
</body>
</html>