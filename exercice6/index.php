<?php
  $page = 'Exercice 6';//déclaration d'une variable pour l'exercice
  $department = array(//création d'un tableau associatif
    02 => 'Aisne',//index et élément du tableau
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-De-Calais',
    80 => 'Somme'
  );
  include '../header.php';//inclus le header et la navbar
?>
<div class="text-center" style="font-size: 25px">
  <p>C'est le département du <?= $department[59]. '.'//affiche la valeur de l'index dans le html ?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
