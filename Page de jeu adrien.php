<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css" media="all"/>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Neonguess</title>
<script src="chart.min.js"></script>


</script>
</head>

<body>
<center>

<h1>Partie</h1>
<h2>Trouve la corrélation du nuage de points ci-dessous !</h2>

<?php

  $RandMax = random_int(1,100);
  $RandMin = random_int(-100,-1);

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

  $V1 = $P1Y-$P1X;
  $V2 = $P2Y-$P2X;
  $V3 = $P3Y-$P3X;
  $V4 = $P4Y-$P4X;
  $V5 = $P5Y-$P5X;
  $V6 = $P6Y-$P6X;
  $V7 = $P7Y-$P7X;
  $V8 = $P8Y-$P8X;
  $V9 = $P9Y-$P9X;
  $V10 = $P10Y-$P10X;
  $V11 = $P11Y-$P11X;
  $V12 = $P12Y-$P12X;
  $V13 = $P13Y-$P13X;
  $V14 = $P14Y-$P14X;
  $V15 = $P15Y-$P15X;
  $V16 = $P16Y-$P16X;
  $V17 = $P17Y-$P17X;
  $V18 = $P18Y-$P18X;
  $V19 = $P19Y-$P19X;
  $V20 =  $P20Y-$P20X;

  $V1 =  $V1 * $V1;
  $V2 =  $V2 * $V2;
  $V3 =  $V3 * $V3;
  $V4 =  $V4 * $V4;
  $V5 =  $V5 * $V5;
  $V6 =  $V6 * $V6;
  $V7 =  $V7 * $V7;
  $V8 =  $V8 * $V8;
  $V9 =  $V9 * $V9;
  $V10 = $V10 * $V10;
  $V11 = $V11 * $V11;
  $V12 = $V12 * $V12;
  $V13 = $V13 * $V13;
  $V14 = $V14 * $V14;
  $V15 = $V15 * $V15;
  $V16 = $V16 * $V16;
  $V17 = $V17 * $V17;
  $V18 = $V18 * $V18;
  $V19 = $V19 * $V19;
  $V20 = $V20 * $V20;

  $MEANY = ($P1Y+$P2Y+$P3Y+$P4Y+$P5Y+$P6Y+$P7Y+$P8Y+$P9Y+$P10Y+$P11Y+$P12Y+$P13Y+$P14Y+$P15Y+$P16Y+$P17Y+$P18Y+$P19Y+$P20Y)/20;

  $W1 = $P1Y-$MEANY;
  $W2 = $P2Y-$MEANY;
  $W3 = $P3Y-$MEANY;
  $W4 = $P4Y-$MEANY;
  $W5 = $P5Y-$MEANY;
  $W6 = $P6Y-$MEANY;
  $W7 = $P7Y-$MEANY;
  $W8 = $P8Y-$MEANY;
  $W9 = $P9Y-$MEANY;
  $W10 = $P10Y-$MEANY;
  $W11 = $P11Y-$MEANY;
  $W12 = $P12Y-$MEANY;
  $W13 = $P13Y-$MEANY;
  $W14 = $P14Y-$MEANY;
  $W15 = $P15Y-$MEANY;
  $W16 = $P16Y-$MEANY;
  $W17 = $P17Y-$MEANY;
  $W18 = $P18Y-$MEANY;
  $W19 = $P19Y-$MEANY;
  $W20 = $P20Y-$MEANY;

  $W1 =  $W1 * $W1;
  $W2 =  $W2 * $W2;
  $W3 =  $W3 * $W3;
  $W4 =  $W4 * $W4;
  $W5 =  $W5 * $W5;
  $W6 =  $W6 * $W6;
  $W7 =  $W7 * $W7;
  $W8 =  $W8 * $W8;
  $W9 =  $W9 * $W9;
  $W10 = $W10 * $W10;
  $W11 = $W11 * $W11;
  $W12 = $W12 * $W12;
  $W13 = $W13 * $W13;
  $W14 = $W14 * $W14;
  $W15 = $W15 * $W15;
  $W16 = $W16 * $W16;
  $W17 = $W17 * $W17;
  $W18 = $W18 * $W18;
  $W19 = $W19 * $W19;
  $W20 = $W20 * $W20;


  $C= $W1+$W2+$W3+$W4+$W5+$W6+$W7+$W8+$W9+$W10+$W11+$W12+$W13+$W14+$W15+$W16+$W17+$W18+$W19+$W20;
  $B= $V1+$V2+$V3+$V4+$V5+$V6+$V7+$V8+$V9+$V10+$V11+$V12+$V13+$V14+$V15+$V16+$V17+$V18+$V19+$V20;
  $R2= ($C-$B)/$C;

 ?>

 <canvas id="graph1" width="200" height="200"></canvas>

   <!-- à partir des exemples sur https://www.chartjs.org/docs/latest/ et
   https://www.chartjs.org/docs/latest/charts/bubble.html -->
   <script type="text/javascript">



     const data = {
       datasets: [{
         label: 'First Dataset',
         data: [
         {x: <?php echo "$P1X"; ?>, y:<?php echo "$P1Y"; ?> },
         {x: <?php echo "$P2X"; ?>, y:<?php echo "$P2Y"; ?> },
         {x: <?php echo "$P3X"; ?>, y:<?php echo "$P3Y"; ?> },
         {x: <?php echo "$P4X"; ?>, y:<?php echo "$P4Y"; ?> },
         {x: <?php echo "$P5X"; ?>, y:<?php echo "$P5Y"; ?> },
         {x: <?php echo "$P6X"; ?>, y:<?php echo "$P6Y"; ?> },
         {x: <?php echo "$P7X"; ?>, y:<?php echo "$P7Y"; ?> },
         {x: <?php echo "$P8X"; ?>, y:<?php echo "$P8Y"; ?> },
         {x: <?php echo "$P9X"; ?>, y:<?php echo "$P9Y"; ?> },
         {x: <?php echo "$P10X"; ?>, y:<?php echo "$P10Y"; ?> },
         {x: <?php echo "$P11X"; ?>, y:<?php echo "$P11Y"; ?> },
         {x: <?php echo "$P12X"; ?>, y:<?php echo "$P12Y"; ?> },
         {x: <?php echo "$P13X"; ?>, y:<?php echo "$P13Y"; ?> },
         {x: <?php echo "$P14X"; ?>, y:<?php echo "$P14Y"; ?> },
         {x: <?php echo "$P15X"; ?>, y:<?php echo "$P15Y"; ?> },
         {x: <?php echo "$P16X"; ?>, y:<?php echo "$P16Y"; ?> },
         {x: <?php echo "$P17X"; ?>, y:<?php echo "$P17Y"; ?> },
         {x: <?php echo "$P18X"; ?>, y:<?php echo "$P18Y"; ?> },
         {x: <?php echo "$P19X"; ?>, y:<?php echo "$P19Y"; ?> },
         {x: <?php echo "$P20X"; ?>, y:<?php echo "$P20Y"; ?> },
              ],
         backgroundColor: 'rgb(255, 99, 132)'
       }]
     };

     const options = {
       responsive: true,
       plugins: {
         legend: {
           position: 'top',
         },
         title: {
           display: true,
           text: 'Un premier graph'
         }
       }
     }

     const config = {
       type: 'scatter',
       data: data,
       options: options
     };

     var ctx = document.getElementById('graph1');

     var myChart = new Chart(ctx, config);

   </script>
   <?php

  echo "  <h1> $R2 </h1>";

    ?>




   <form name="poster" method="post" action="Form2Test.php">
   Corrélation : <input type="text" name="correlation" />
   <input type="submit" name="valider" value="OK"/> <br />
   </form>



<!-- NOTE POUR ADRIEN : Utiliser l'URL :"http://localhost/projet%20S2/Page%20de%20jeu%20(1).php" pour que ca marche-->
</center>
</body>
</html>
