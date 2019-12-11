<?php
  $page = 'Exercice 3';//déclaration d'une variable pour l'exercice
  $months = array ('Janvier', 'février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="text-center" style="font-size: 25px">
  <p>C'est le mois de <?= $months[5]. '.'//affiche l'index 5 du tableau ?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
