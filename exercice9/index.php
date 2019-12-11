<?php
  $page = 'Exercice 9';//déclaration d'une variable pour afficher le numéro d'exercice sur la page
  $department = array(//création d'un tableau associatif
    02 => 'Aisne',//création de l'index et sa valeur
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-De-Calais',
    80 => 'Somme'
  );
  $department[51] = 'Marne';//ajoute un élémement et son index au tableau
  include '../header.php';//inclus le fichier dans le html
?>
<div class="container-full row justify-content-center" style="font-size: 25px">
  <ul class="list-group col-3">
    <?php foreach ($department as $key => $value) {//boucle qui récupère les index et leurs valeurs ?>
    <li class="list-group-item"><?= $key . '. ' . $value; }//affiche les index et leurs valeurs dans le html ?></li>
  </ul>
</div>
<? include '../footer.php' //inclus le fichier dans le html?>
