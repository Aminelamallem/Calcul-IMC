<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<h1>Calcul de l'IMC</h1>
  <section class=section1>
<form action="traitement.php" method="post">
   
    <label for="">Age</label>
    <input type="number" placeholder= "Age" name="age" required >
<br><br>
    
    <label for="">Taille</label>
    <input type="number" placeholder= "taille" name="taille" required >
<br><br>

    <label for="">Poids</label>
    <input type="number" placeholder= "poids" name="poids" required >
<br><br><br><br>
    <button class="button" type="submit" >Valider les donnees </button>
    
</form>
<br><br>
</section>

<?php


?>



</body>
</html>

