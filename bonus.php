<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus</title>
</head>
<body>
    <?php $firstNames = ['Steve','Jeff','Marck','Sundar'];
        $firstNames[2] = 'Mark';
        array_push($firstNames,'Bill');
        array_push($firstNames,'Julie');
        sort($firstNames);
    ?>
    <p>
    <?php print_r($firstNames)?>
    <br>
    <?php echo 'Le premier prénom du tableau firstNames est '. $firstNames[0] . '. Il y a ' . count($firstNames) . ' prénom.';
    foreach($firstNames as $firstName){
        echo ' ' . $firstName;
    }
    ?>
    </p>
    
</body>
</html>