<?php

    /*
    |--------------------------------------------------------------------------
    | Working with arrays (2)
    |--------------------------------------------------------------------------
    |
    | Display all the articles in the $articles array
    | You need to display the title, the description, the image the author name
    |
    | Doc: https://devdocs.io/php/language.types.array
    |
    | Preview: http://localhost:8080/exercise_05
    |
    */

    $articles = [
        [
            'title' => 'Espagne – 18 morts dans la traditionnelle bataille de boîtes de conserve de tomate',
            'image' => 'http://www.legorafi.fr/wp-content/uploads/2019/12/canned-food-570114_1280-1-e1576660083638.jpg',
            'description' => 'Buñol – Cette année encore le bilan de la « Latatina », célèbre bataille de boîtes de conserve de tomate du petit village espagnol situé de près de Valence est très lourd. Les autorités ont annoncé 18 morts et plus de 180 blessés à l’issue de l’événement festif qui consiste en une grande bataille rangée où chaque participant ne peut utiliser comme seule arme que des boîtes de conserve à la tomate.',
            'author' => 'La vérité'
        ],
        [
            'title' => 'Il trouve enfin un sens à sa vie en obtenant le badge de « Super fan » sur une misérable page Facebook',
            'image' => 'http://www.legorafi.fr/wp-content/uploads/2019/08/adult-facial-expression-fashion-1036627.jpg',
            'description' => 'Toul – Un jeune homme a enfin, semble-t-il, trouvé un sens à sa vie après l’obtention d’un badge «  Super fan » d’une page Facebook à laquelle il était abonné. Reportage.',
            'author' => 'Wolah c\'est vrai'
        ]
    ];
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- Article -->
        <h4>Titre de l'article</h4>
        <img src="urlimage">
        <p>Description de l'article</p>
        <small>Rédigé par Jean Paul</small>
        <hr>
        <!-- END Article -->
    </div>
</body>
</html>
