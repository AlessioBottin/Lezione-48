<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    $text = 'Hello World';
    // Salvo la parola passata dai params 
    $badWord = $_GET['badword'];

    // Sostituisco 3 delle sue lettere con *** 
    $fixedBadWord = str_replace('occ', '***', $badWord);
    ?>  
    
    <h1><?php echo $text . ' lunghezza: ' . strlen($text); ?></h1>
    <h1><?php echo $fixedBadWord . ' lunghezza: ' . strlen($fixedBadWord)  ?></h1>

</body>
</html>