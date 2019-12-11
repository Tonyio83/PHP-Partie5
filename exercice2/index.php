<?php
  $page = 'Exercice 2';//déclaration d'une variable pour le numéro d'exercice
  $months = array ('Janvier', 'février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <p>C'est le mois de <?= $months[2]. '.'//affiche la troisème valeur du tableau ?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
