<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($db as $key => $teacher) {
        echo '<h3>' . $key . '</h3>';
        foreach ($teacher as $value) {
            if ($key === 'teachers') {
                echo '<p>' . $value['name'] . '</p>';
                echo '<p>' . $value['lastname'] . '</p>';
            } elseif ($key === 'pm') {
                echo '<p>' . $value['name'] . '</p>';
                echo '<p>' . $value['lastname'] . '</p>';
            }
        }
    } ?>
</body>

</html>