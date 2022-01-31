<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?


if (empty($_GET['name']) === false) {

    $name = $_GET['name'];
    if (strlen($name) > 3) {
        $message = 'Accesso riuschito';
    } else {
        $message = 'Accesso non riuscito';
    }
} else {
    $message = 'Non hai passato nessun valore';
}

if (empty($_GET['age']) === false) {
    $age = $_GET['age'];
    if (is_numeric($age)) {
        $message = 'Accesso riuschito';
    } else {
        $message = 'Accesso non riuscito';
    }
} else {
    $message = 'Non hai passato nessun valore';
}

if (empty($_GET['mail']) === false) {

    $mail = $_GET['mail'];
    if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
        $message = 'Accesso riuschito';
    } else {
        $message = 'Accesso non riuscito';
    }
} else {
    $message = 'Non hai passato nessun valore';
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
    <h1><?php echo $message ?></h1>
</body>

</html>