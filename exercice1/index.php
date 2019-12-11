<?php
  $page = 'Exercice 1';//déclaration d'une variable pour afficher le numéro de l'exercice dans le html
  include '../header.php';//inclus le header et la navbar
  $months = [// déclaration d'une variable qui prend comme valeur un tableau
    'Janvier',// élément du tableau
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
?>
<div class="container-full row justify-content-center" style="font-size: 25px">
  <ul class="list-group text-center col-3">
    <?php for ($index = 0; $index <= 11; $index++) {// boucle qui récupère les valeurs du tableau ?>
      <!-- affiche toutes les valeurs du tableau dans le html -->
      <li class="list-group-item"><?= $months[$index]; } ?></li>
    </ul>
  </div>
<?php include '../footer.php' //inclus le footer?>
