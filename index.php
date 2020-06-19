<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>patie 9 exercice 4</title>
</head>
<body>
    <?php 
        $date = mktime(15, 0, 0, 8, 2, 2016);
    ?>
    <p><?= 'Timestamp actuel : ' . time() ?></p>
    <p><?= 'Timestamp 2 aout 2016 15h00 : ' .$date  ?></p>
</body>
</html>