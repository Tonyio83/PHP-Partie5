<?php
  $page = 'Exercice 4';// déclaration d'une variable pour afficher le numéro d'exercice dans le html
  $months = [// déclaration d'une variable avec pour valeur un tableau
    'Janvier', //élément du tableau
    'Février',
    'Mars',
    'Avril',
    'Mai',
    'Juin',
    'Juillet',
    'Aout',
    'Septembre',
    'Octobre',
    'Novembre',
    'Décembre'];
  $modifiedMonths = array (7 => 'Août');
  // défini une variable avec un tableau qui comprend l'index et sa valeur
  $result = array_replace ($months, $modifiedMonths);
  // variable avec pour fonction le remplacement du premier tableau par la valeur du deuxième
  // $months[7] = 'Août';// change la valeur de l'index du tableau
  include '../header.php';//inclus le header et la navbar dans le html
  ?>
<div class="text-center" style="font-size: 25px">
  <p>C'est plutôt le mois d' <?= $result[7].'.'//affiche le résultat dans le html?></p>
</div>
<? include '../footer.php'//inclus le footer dans le html?>
