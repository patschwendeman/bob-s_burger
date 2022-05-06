<!DOCTYPE html>

<?php /* avoid notice for undefined array index */
   if(isset($_POST['name']))
      $name =  $_POST['name'];
   else
      $name = "Foobar";
      
   if(isset($_POST['size']))
      $size =  $_POST['size'];
   else
      $size = "";

   $toppings = "";
   if(isset($_POST['tomato'])) $toppings .= "Tomaten, ";
   if(isset($_POST['cheese'])) $toppings .=  "Käse, ";
   if(isset($_POST['bacon'])) $toppings .=  "Bacon, ";
   if(isset($_POST['jalapenos'])) $toppings .=  "Jalapénos, ";
    if(isset($_POST['salad'])) $toppings .=  "Salat";
?>

<html lang="de">
  <head>
    <meta charset="UTF-8">
    <title>Bob´s Bestellbestätigung</title>
      <link rel="stylesheet" href="style.css">
  </head>

  <body class="back">
    <header class="header"><h1>Bob´s Burger </h1>
    </header>



    <section class="container_2">
      <h3>Hallo, <?php echo $name ?>!</h3>
      <p>In den nächsten 30 Minuten erhalten sie ihre Bestellung. Diese enthält:
          <?php echo "$size mit extra $toppings"; ?>
      </p>
      <a class="button" target="popup" onclick="window.open
               ('', 'popup', 'width=580,height=360,scrollbars=no, toolbar=no,status=no,
               resizable=yes,menubar=no,location=no,directories=no,top=10,left=10')
               " href="Bewertung.html">bewerten</a>
    </section>
  </body>
</html>

<?php /* send order to pizza baker */
   mail("patrick.schwendemann1993@gmail.com", "Neue Bestellung",
        "Erstelle $size mit $toppings für $name.");
?>
