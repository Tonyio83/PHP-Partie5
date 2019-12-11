<?php
  $page = 'Exercice 10';//déclaration d'une variable pour afficher le numéro d'exercice sur la page
  $department = array(//création d'un tableau associatif
    '02' => 'Aisne',//index et élément du tableau
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-De-Calais',
    80 => 'Somme'
  );
  $department[51] = 'Marne';
  include '../header.php';//inclus le header et la navbar
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <?php foreach ($department as $key => $value) {//boucle qui permet de récupérer tous les index et les valeurs du tableau ?>
  <p><?= 'Le département ' .$value. ' a le numéro ' .$key. '.'; }//affiche la concatenation  ?></p>
</div>
<? include '../footer.php' //inclus le fichier dans le html?>
