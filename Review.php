<!doctype html>

<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bob's Burger">
    <meta name="author" content="Bob">
    <title>Bob's Vote</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="back">
<header class="header">
    <h1>Bob's Burger </h1>
</header>

<?php
$review = "";
if(isset($_POST['status_1'])){
    $review = 1;
    } else if (isset($_POST['status_0'])){
    $review = 0;
}

file_get_contents('https://api.thingspeak.com/update?api_key=IUZNL60AFK4PJW9W&field1='.$review);
?>

<div class="screen">
    <div class="review">
        <div class="reviewHeading">
            <h3>Danke für die Bewertung</h3>
        </div>

        <div class="container_2">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1265950/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
        </div>
    </div>
</div>
</body>
</html>