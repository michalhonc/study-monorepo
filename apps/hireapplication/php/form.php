<?php
// promene
$errors = array();

$name = "";
$email = "";
$birth = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    array_push($errors, "Povinne pole jmeno");
    } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        array_push($errors, "Only letters and white space allowed");
    }
    }
    
    if (empty($_POST["email"])) {
    array_push($errors, "Email je povinna polozka");
    } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email není validní");
    }
    }
    
    if (!empty($_POST["birth"])) {
    $birth = test_input($_POST["birth"]);
    if (!preg_match("%\A(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19[0-9][0-9]|20[0-1][0-9])\z%", $birth)) {
        array_push($errors, "Datum narození není ve validním formátu. Validni formaty jsou dd-mm-yyyy nebo dd.mm.yyyy nebo dd/mm/yyyy");
    } 
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

    if (count($errors) > 0) {
    echo "<ul><h3>Formulář obsahuje následující chyby:</h3><br>";
    for ($i=0; $i < count($errors); $i++) { 
        echo "<li style='color: #FF0000'>" . $errors[$i] . "</li>";
    }
    echo "</ul>";
    } else {
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $birth;

    $name = "";
    $email = "";
    $birth = "";
    }
?>
