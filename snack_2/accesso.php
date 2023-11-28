<?php

    $result ='';
    $name = $_GET['name'] ?? $result = 'Accesso Negato';
    $mail = $_GET['mail'] ?? $result = 'Accesso Negato';
    $age = $_GET['age'] ?? $result = 'Accesso Negato';
    if(strlen($name)>3 && str_contains($mail, '@' && '.') && is_numeric($age)){
        $result = 'Accesso riuscito';
    }
    else{
        $result = 'Accesso Negato';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack-2</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $result ?></h1>
    </div>
</body>
</html>