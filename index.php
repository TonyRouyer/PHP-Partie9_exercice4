<?php 
        //retourne le timestamp du 2/08/2016 a 15h00
        $date = mktime(15, 0, 0, 8, 2, 2016);
        // on declare les objet
        $dateOBj = new DateTime();
        $augustDate = new DateTime('2016-08-02 15:00');
    ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>patie 9 exercice 4</title>
</head>
<body>
    <p><?= 'Timestamp actuel : ' . time()  //affiche le timestamps a l'instant T?></p>
    <p><?= 'Timestamp 2 aout 2016 15h00 : ' .$date  ?></p>
    <p><?= 'Actuel Format objet : ' . $dateOBj -> getTimestamp(); ?></p>
    <p><?= '2 Aout : ' . $augustDate -> getTimestamp() ?></p>
</body>
</html>