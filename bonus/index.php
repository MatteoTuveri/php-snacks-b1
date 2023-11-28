<?php
    $paragrafo=$_GET['paragrafo'] ?? '';
    $separato = explode('.', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack-1</title>
</head>
<body>
    <div class="container">
        <form action="index.php">
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="paragrafo" placeholder="Scrivi un paragrafo">
                </div>
                <button type="submit">Send</button>
        </form>
        <?php 
        foreach($separato as $paragraf){
            echo $paragraf. '<br />';
        }
        ?> 
    </div>
</body>
</html>