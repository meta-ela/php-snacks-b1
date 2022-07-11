<!-- 
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.

-->

<?php
$studentsList = [
    [
        "name" => "Mario",
        "cognome" => "Rossi",
        "grades" => [
            "matematica" => rand(1, 10),
            "inglese" => rand(1, 10),
            "storia" => rand(1, 10),
            "letteratura" => rand(1, 10),
            "filosofia" => rand(1, 10),
            "fisica" => rand(1, 10),
            "ginnastica" => rand(1, 10),
        ]
    ],
    [
        "name" => "Lucia",
        "cognome" => "Verdi",
        "grades" => [
            "matematica" => rand(1, 10),
            "inglese" => rand(1, 10),
            "storia" => rand(1, 10),
            "letteratura" => rand(1, 10),
            "filosofia" => rand(1, 10),
            "fisica" => rand(1, 10),
            "ginnastica" => rand(1, 10),
        ]
    ],
    [
        "name" => "Davide",
        "cognome" => "Bosi",
        "grades" => [
            "matematica" => rand(1, 10),
            "inglese" => rand(1, 10),
            "storia" => rand(1, 10),
            "letteratura" => rand(1, 10),
            "filosofia" => rand(1, 10),
            "fisica" => rand(1, 10),
            "ginnastica" => rand(1, 10),
        ]
    ],
    [
        "name" => "Sara",
        "cognome" => "Mariotti",
        "grades" => [
            "matematica" => rand(1, 10),
            "inglese" => rand(1, 10),
            "storia" => rand(1, 10),
            "letteratura" => rand(1, 10),
            "filosofia" => rand(1, 10),
            "fisica" => rand(1, 10),
            "ginnastica" => rand(1, 10),
        ]
    ],
    [
        "name" => "Micol",
        "cognome" => "Dalpozzo",
        "grades" => [
            "matematica" => rand(1, 10),
            "inglese" => rand(1, 10),
            "storia" => rand(1, 10),
            "letteratura" => rand(1, 10),
            "filosofia" => rand(1, 10),
            "fisica" => rand(1, 10),
            "ginnastica" => rand(1, 10),
        ]
    ],
    [
        "name" => "Laura",
        "cognome" => "Gialli",
        "grades" => [
            "matematica" => rand(1, 10),
            "inglese" => rand(1, 10),
            "storia" => rand(1, 10),
            "letteratura" => rand(1, 10),
            "filosofia" => rand(1, 10),
            "fisica" => rand(1, 10),
            "ginnastica" => rand(1, 10),
        ]
    ],
    [
        "name" => "Simone",
        "cognome" => "Truffo",
        "grades" => [
            "matematica" => rand(1, 10),
            "inglese" => rand(1, 10),
            "storia" => rand(1, 10),
            "letteratura" => rand(1, 10),
            "filosofia" => rand(1, 10),
            "fisica" => rand(1, 10),
            "ginnastica" => rand(1, 10),
        ]
    ],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Snack7</title>
</head>
<body>
    <div class="container">
        <div>
            <?php for($i = 0; $i < $studentsList; $i++){
                $student = $studentsList[$i];
                $grades = array_values($student["grades"]);
                $averageGrades = round(array_sum($grades) / count($grades), 1);
                ?>
                <div><?php echo $student["name"] . " " . $student["cognome"] . " " . $averageGrades ?></div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
