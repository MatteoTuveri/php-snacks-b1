<?php
    $games= [
        [
            'homeTeam' => 'Olimpia Milano',
            'awayTeam' => 'Cantù',
            'homeTeamScore' => 55,
            'awayTeamScore' => 60
        ],
        [
            'homeTeam' => 'Banco di Sardegna Sassari',
            'awayTeam' => 'Bertram Derthona Tortona',
            'homeTeamScore' => 45,
            'awayTeamScore' => 30
        ],
        [
            'homeTeam' => 'Carpegna Prosciutto Pesaro',
            'awayTeam' => 'Dolomiti Energia Trentino',
            'homeTeamScore' => 50,
            'awayTeamScore' => 85
        ],
    ]
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
    <?php 
    foreach($games as $game){
        echo $game['homeTeam'] . '-' . $game['awayTeam'] . '|' . $game['homeTeamScore'] .'-' . $game['awayTeamScore'] . '<br />';
    }
    ?>  
</body>
</html>