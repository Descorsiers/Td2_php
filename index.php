<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Td2</title>
</head>
<body>
    <p>
    <?php
    $FirstName = 'nicolas ';$Name = 'Descorsiers ';$Age = 20;$City = 'verberie'; 
    $sentence = 'Bonjour, je m\'appelle ' . ucfirst($FirstName) . strtoupper($Name) .', j\'ai ' . $Age . ' ans et j\'habite ' . ucwords($City) .'.'; // Déclaration de la chaine de charactère
    $secondSentence = "Je suis une \"chaîne de caractères\"."; // Déclaration d'une seconde variable
    echo ucwords($sentence);
    ?>
    <br>
    <?php echo $secondSentence;?>
    <br>
    <?php echo 'La taille du prénom est : ' . strlen($FirstName);?>
    </p>
    <p>
        <?php $heredocSentence = <<< TEXT
            Croisant les bras, et tous s'assirent autour du foyer, rougie, rendait violâtre. 
            Avoue que je suis simplement ici pour tenir compagnie au tien et pour t'imaginer 
            que tu souffres par ta faute.
            Élevez un étendard sur une montagne, et je serais 
            dans un extrême embarras.
            Voir, si touchés que je fusse un grand misérable! 
            Facile, il devait trouver le cardinal seul, sans interlocuteur, un drame invisible et 
            inconnu aux autres spectateurs que nous jouions, du pauvre pygmée qui s'en allait. 
            TEXT;
            echo $heredocSentence;
        ?>
        <br>
    </p>
    <p>
        <?php $Notes = [15, 13, 8, 10, 17];$Subjects = ['html/css', 'algorithmique', 'anglais', 'marketing', 'ui/ux']; // Création des tableaux ?> 
        <?php echo 'La dernière matières et note de l\'étudiant sont : ' . $Subjects[4] . ' et '. $Notes[4]?>
        <br>
        <?php $Combine = (array_combine($Subjects,$Notes));$Stock = $Combine['algorithmique'];$Combine['algorithmique'] = $Combine['marketing'];$Combine['marketing'] = $Stock?>
        <?php print_r($Combine)?>
        <br>
        <br>
        <?php $Container = [['Nicolas'=>$Combine,],['Tom'=>$Combine],['Fred'=>$Combine],['Matthais'=>$Combine]];?>
        <?php print_r($Container)?>
    </p>
    
</body>
</html>