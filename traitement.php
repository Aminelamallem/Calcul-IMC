
  <link rel="stylesheet" href="style.css">



<?php 
    if(isset($_POST['age'])&& (isset($_POST['taille']))&& (isset($_POST['poids'])) ){
        $age = ($_POST['age']);
        $taille = ($_POST['taille']);
        $poids = ($_POST['poids']);
      
    }

?>
<?php
$imc =($poids / ($taille * $taille) * 10000) ;

    $typeImc = "";
    if( $imc <= 18.5){
        $typeImc = "Insuffisance pondérale (maigreur)"; 
    }elseif($imc >= 18.5 && $imc <= 25){
        $typeImc = "Corpulence normale";
    }elseif($imc >= 25 && $imc <= 30){
       $typeImc = "surpoids";
    }elseif($imc >= 30 && $imc <= 35){
        $typeImc = "Obésité modérée";
    }elseif($imc >= 35 && $imc <= 40){
        $typeImc = "Obésité sévère";
    }else{
        $typeImc =    "Obésité morbide ou massive";
    }
        ?>




<h4 class=paragraph>
  <?php 
    echo "Merci d'avoir utilisé notre application !<br><br>
    Nous tenons à vous remercier chaleureusement d'avoir choisi notre application. Votre confiance et votre utilisation nous sont très précieuses.<br><br>
    Grâce à vous, nous avons pu améliorer nos services et vous offrir une expérience optimisée.<br><br>
    N'hésitez pas à revenir vers nous pour toute question ou suggestion. Nous sommes toujours à votre écoute pour rendre votre expérience encore meilleure !<br><br>
    Merci encore et à très bientôt !<br><br>
    L’équipe";
  ?>
</h4>


    <h1> Votre IMC est de <?php echo number_format($imc,1)  ?></h1>


    <h2> Voici les résultats de votre utilisation : <?php echo $typeImc  ?></h2>
