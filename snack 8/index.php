<!-- SNACK
Creiamo un array consentente dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->


<?php

$products = [

    [
        'immagine' => 'https://www.centralelatte.sa.it/wp-content/uploads/2017/02/latteinterouht1000.jpg',
        'nome' => 'latte',
        'prezzo' => '1 €',
        'tipologia' => 'alimentare'
    ],


    [
        'immagine' => 'https://www.pentoleprofessionali.it/it/computedimage/9090.i274310-k9it6ku-l1.webp',
        'nome' => 'mestolo',
        'prezzo' => '5 €',
        'tipologia' => 'cucina'
    ],


    [
        'immagine' => 'https://www.ibs.it/images/8005124003007_1_536_0_75.jpg',
        'nome' => 'aspirapolvere',
        'prezzo' => '60 €',
        'tipologia' => 'pulizia'
    ],

];

$filteredProducts = [];
if (isset($_GET['genre']) !== false) {
    $genre = $_GET['genre'];

    if ($genre === 'all') {
        $filteredProducts = $products;
    }
    foreach ($products as $product) {
        if ($product['tipologia'] === $genre) {
            $filteredProducts[] = $product;
        }
    }
} else {
    $filteredProducts = $products;
}



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
    <form action="index.php" method="GET">
        <select name="genre" id="genre">
            <option value="all">all</option>
            <option value="alimentare">alimentare</option>
            <option value="cucina">cucina</option>
            <option value="pulizia">pulizia</option>
        </select>
        <button>Cerca</button>
    </form>
    <div>
        <?php
        foreach ($filteredProducts as $product) { ?>
            <img style="heigth: 80px; width: 60px;" src="<?= $product['immagine'] ?>" alt="">
            <p><?= $product['nome'] ?></p>
            <p><?= $product['prezzo'] ?></p>
            <p><?= $product['tipologia'] ?></p>
        <?php } ?>
    </div>
</body>

</html>