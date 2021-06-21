<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css" media="all"/>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Neonguess</title>
<script scr="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js">


</script>
</head>

<body>
<center>

<h1>Partie</h1>
<h2>Trouve la corrélation du nuage de points ci-dessous !</h2>
<br><br><br><br><br><br><br><br><br>



<form name="poster" method="post" action="Form2Test.php">
Corrélation : <input type="text" name="correlation" />
<input type="submit" name="valider" value="OK"/> <br />

<h3>R² : (=Cov(X;Y)²/(Var(X)×Var(Y))</h3>

Taille == len(X) <br>
moyenneX == Sum(X)/Taille<br>
moyenneY == Sum(Y)/Taille<br>
VarX == sum(X^2)/Taille-moyenneX^2<br>
VarY == sum(Y^2)/Taille-moyenneY^2<br>
i==0
COVXY==0<br>
While i < len(X)<br>
  COVXY==COVXY+(()(X-moyenne X)*(X-moyenne Y))/Taille)<br>
  i==i+1<br>
R²==COVXY^2/VarX*VarY<br>

<h3>Différence : (=correlation-R²)</h3><br>
diffcor == Corrélation-R²

<h3>différence moyenne : (moyenne(différences))</h3><br>
</form>

<?php

  $RandMax = 50;
  $RandMin = -50;

  $P1X= 0.05;
  $P1Y= $P1X+ (random_int($RandMin,$RandMax)/100);

  $P2X= 0.10;
  $P2Y=  $P2X+ (random_int($RandMin,$RandMax)/100);

  $P3X= 0.15;
  $P3Y=  $P3X+ (random_int($RandMin,$RandMax)/100);

  $P4X= 0.20;
  $P4Y=  $P4X+ (random_int($RandMin,$RandMax)/100);

  $P5X= 0.25;
  $P5Y=  $P5X+ (random_int($RandMin,$RandMax)/100);

  $P6X= 0.30;
  $P6Y=  $P6X+ (random_int($RandMin,$RandMax)/100);

  $P7X= 0.35;
  $P7Y=  $P7X+ (random_int($RandMin,$RandMax)/100);

  $P8X= 0.40;
  $P8Y=  $P8X+ (random_int($RandMin,$RandMax)/100);

  $P9X= 0.45;
  $P9Y=  $P9X+ (random_int($RandMin,$RandMax)/100);

  $P10X= 0.50;
  $P10Y=  $P10X+ (random_int($RandMin,$RandMax)/100);

  $P11X= 0.55;
  $P11Y=  $P11X+ (random_int($RandMin,$RandMax)/100);

  $P12X= 0.60;
  $P12Y=  $P12X+ (random_int($RandMin,$RandMax)/100);

  $P13X= 0.65;
  $P13Y=  $P13X+ (random_int($RandMin,$RandMax)/100);

  $P14X= 0.70;
  $P14Y=  $P14X+ (random_int($RandMin,$RandMax)/100);

  $P15X= 0.75;
  $P15Y=  $P15X+ (random_int($RandMin,$RandMax)/100);

  $P16X= 0.80;
  $P16Y=  $P16X+ (random_int($RandMin,$RandMax)/100);

  $P17X= 0.85;
  $P17Y=  $P17X+ (random_int($RandMin,$RandMax)/100);

  $P18X= 0.90;
  $P18Y=  $P18X+ (random_int($RandMin,$RandMax)/100);

  $P19X= 0.95;
  $P19Y=  $P19X+ (random_int($RandMin,$RandMax)/100);

  $P20X= 1;
  $P20Y=  $P20X+ (random_int($RandMin,$RandMax)/100);



  echo  " <p>X1 = $P1X </p>";
  echo " <p>Y1 = $P1Y </p>";
  echo  " <p>X15 = $P15X </p>";
  echo " <p>Y15 = $P15Y </p>";
 ?>

<!-- NOTE POUR ADRIEN : Utiliser l'URL :"http://localhost/projet%20S2/Page%20de%20jeu%20(1).php" pour que ca marche-->
</center>
</body>
</html>
