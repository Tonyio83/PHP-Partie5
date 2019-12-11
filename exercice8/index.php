<?php
  $page = 'Exercice 8';//déclaration d'une variable pour afficher le numéro d'exercice sur la page
  //déclaration d'une variable avec comme valeur un tableau
  $months = ['Janvier',//élément du tableau
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
  $months[7] = 'Août';//change la valeur de l'index 7 du tableau
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="container-full row justify-content-center">
  <ul class="list-group col-3 text-center" style="font-size: 25px">
    <?php foreach ($months as $value) {//boucle qui récupère les valeurs du tableau ?>
      <li class="list-group-item"><?= $value; }//affiche les valeurs du tableau dans le html ?></li>
  </ul>
</div>
<? include '../footer.php' //inclus le fichier dans le html?>
