<!-- 
## Snack 1
Creiamo un array contenente le partite di basket di 
un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.

esempio:
Olimpia Milano - Cantù | 55-60
-->

<?php
// Creiamo un array contenente le partite di basket

$teams = [
    [
        "hostTeam" => "Olimpia Milano",
        "hostedTeam" => "Cantù",
        "hostTeamScore" => rand(1, 100),
        "hostedTeamScore" => rand(1, 100),
    ],
    [
        "hostTeam" => "AC Picchia",
        "hostedTeam" => "AS Intomatici",
        "hostTeamScore" => rand(1, 100),
        "hostedTeamScore" => rand(1, 100),
    ],
    [
        "hostTeam" => "Sailor Rum",
        "hostedTeam" => "Cantù",
        "hostTeamScore" => rand(1, 100),
        "hostedTeamScore" => rand(1, 100),
    ],
    [
        "hostTeam" => "Le scarpe della LIDL",
        "hostedTeam" => "Atletico ma non troppo",
        "hostTeamScore" => rand(1, 100),
        "hostedTeamScore" => rand(1, 100),
    ],
    [
        "hostTeam" => "Slam Drunk",
        "hostedTeam" => "Team Broglio",
        "hostTeamScore" => rand(1, 100),
        "hostedTeamScore" => rand(1, 100),
    ],
    [
        "hostTeam" => "Sdeng on Tour",
        "hostedTeam" => "Fun Cool",
        "hostTeamScore" => rand(1, 100),
        "hostedTeamScore" => rand(1, 100),
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Snack1</title>
</head>
<body>

    <div class="container">
        <h1 class="text-center text-uppercase text-primary mb-3">basketball third tournament match results</h1>
        <div class="row row-cols-3 g-3">
            <!-- Stampiamo a schermo tutte le partite con questo schema -->
            <!-- ciclo for php -->
            <?php for($i = 0; $i < count($teams); $i++){
                    $results = $teams[$i];
                ?>
                <div class="col">
                    <div class="card text-center h-100">
                        <div> <strong><?php echo $results["hostTeam"]?></strong> - <strong><?php echo $results["hostedTeam"]?></strong></div>
                        <div> <strong><?php echo $results["hostTeamScore"]?></strong> - <strong><?php echo $results["hostedTeamScore"]?></strong></div>
                    </div>
                </div>
            <?php } ?>

            <!-- 
            <?php for($i = 0; $i < count($teams); $i++){
                ?>
                <div class="col">
                    <div class="card text-center h-100">
                        <div> <strong><?php echo $teams[$i]["hostTeam"]?></strong> - <strong><?php echo $teams[$i]["hostedTeam"]?></strong></div>
                        <div> <strong><?php echo $teams[$i]["hostTeamScore"]?></strong> - <strong><?php echo $teams[$i]["hostedTeamScore"]?></strong></div>
                    </div>
                </div>
            <?php } ?> -->
        </div>
    </div>
</body>
</html>
