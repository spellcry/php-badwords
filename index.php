<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
    $text = "Nella Seconda Era, Sauron, l'Oscuro Signore di Mordor, donò 19 anelli alle razze della Terra di Mezzo: tre ai re degli elfi, sette ai re dei nani e nove ai re degli uomini; tutti loro, però, furono ingannati dall'Oscuro Signore, il quale forgiò l'Unico Anello, in grado di controllare tutti gli altri. Nella battaglia contro Sauron, Isildur, figlio del re degli uomini Elendil, tagliò a Sauron il dito al quale era infilato l'Anello, ottenendo così la vittoria. Egli, preso l'Anello, si lasciò corrompere dal suo potere e ignorò il consiglio dell'elfo Elrond di gettarlo tra le fiamme del vulcano Monte Fato, per sconfiggere definitivamente il nemico. Questa scelta gli costò la vita, portò alla rovina la razza degli uomini e alla perdita dell'Unico Anello il quale, in seguito, pervenne alla creatura Gollum, anche lui consumato dal suo potere. L'Anello, infine, abbandonò Gollum e fu raccolto dall'hobbit Bilbo Baggins.";
    $length = strlen($text);
    $replace = $_GET['replace'];
    $newText = str_replace($replace, '***', $text);
    $newTextLength = strlen($newText);
    ?>
    <p><?= $text ?></p>
    <p>Il paragrafo è lungo <span class="length"><?= $length ?></span> caratteri.</p>
    <p><?= $newText ?></p>
    <p>Il paragrafo è lungo <span class="length"><?= $newTextLength ?></span> caratteri.</p>
</body>
</html>