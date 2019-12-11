<?php
  $page = 'Exercice 7';//déclaration d'une variable pour afficher le numéro d'exercice sur la page
  $department = [//création d'une variable qui prend comme valeur un tableau associatif
    02 => 'Aisne',//index et élément du tableau
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-De-Calais',
    80 => 'Somme'
  ];
  $department[51] = 'Marne';//ajoute un élément au tableau avec son index
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="text-center" style="font-size: 25px">
  <p>Reims est dans le département du <?= $department[51].'.'//affiche l'élément du tableau dans le html ?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
