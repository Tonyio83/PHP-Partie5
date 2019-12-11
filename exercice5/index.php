<?php
  $page = 'Exercice 5';//déclaration d'une variable pour afficher le numéro d'exercice
  $department = [//création d'un tableau associatif
    02 => 'Aisne',//index et élément du tableau
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-De-Calais',
    80 => 'Somme'
  ];
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="container-full row justify-content-center" style="font-size: 25px">
  <ul class="list-group text-center col-3">
  <?php foreach ($department as $element) {//boucle qui récupère les éléments du tableau?>
    <li class="list-group-item"><?= $element; }//affiche les éléments du tableau dans le html ?></li>
  </ul>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
