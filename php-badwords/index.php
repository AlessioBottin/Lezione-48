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
    $text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo minima vero adipisci? Hic, dolorem eum veritatis, amet placeat fuga repellendus iste enim velit explicabo dignissimos tenetur fugit quod esse corrupti!';
    // Salvo la parola passata dai params 
    $badWord = $_GET['badword'];

    // Sostituisco 3 delle sue lettere con *** 
    $consoredText = str_replace($badWord, '***', $text);
    ?>  
    
    <h1><?php echo $text . ' lunghezza: ' . strlen($text); ?></h1>
    <h1><?php echo $consoredText . ' lunghezza: ' . strlen($consoredText)  ?></h1>

</body>
</html>