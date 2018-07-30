<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice6</title>
</head>
<body>
  <p>
    <?php
    //Déclaration de la variable haut De France avec pour index le numéro des départements
    $hautDeFrance = array('60' => 'Oise', '02' => 'Aisne',
    '80' => 'Somme', '59' => 'Nord', '62' => 'Pas-De-Calais');
    //Affichage de la valeur de l'index 59
    echo $hautDeFrance [59];
    ?>
  </p>
</body>
</html>
