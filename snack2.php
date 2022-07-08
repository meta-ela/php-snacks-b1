<!-- 
## Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione):
    - che name sia più lungo di 3 caratteri, 
    - che mail contenga un punto e una chiocciola 
    - e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php
// Passare come parametri GET name, mail e age
$email = key_exists("email", $_GET) ? trim($_GET["email"]) : false;
if (!$email) {
    echo "email assente";
} else {
    // mail contenga un punto e una chiocciola
    $validEmail = false;
    if(strpos( $email, "@") && strpos($email, ".")) {
        $validEmail = true;
    }
    /* var_dump($validEmail); */
}
echo "<br>";
$name = key_exists("name", $_GET) ? trim($_GET["name"]) : false;
if (!$name) {
    echo "name assente";
} else {
    // name sia più lungo di 3 caratteri
    $validName = false;
    if(strlen($name) > 3) {
        $validName = true;
    }
    /* var_dump($validName); */
}
echo "<br>";
$age = key_exists("age", $_GET) ? trim($_GET["age"]) : false;
if (empty($age)) {
    echo "age assente";
} else {
    // che age sia un numero
    $validAge = false;
    if(is_numeric($age)) {
        $validAge = true;
    }
    /* var_dump($validAge); */
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Snack2</title>
</head>
<body>
<!-- Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
    <div class="container">
        <?php if($validAge && $validEmail && $validName) { ?>
            <div class="alert alert-success">accesso consentito</div>
        <?php } else{ ?>
            <div class="alert alert-danger">accesso non consentito</div>
        <?php } ?>
    </div>
</body>
</html>
