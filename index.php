<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $numbers = $_GET["numbers"];
    $letters = $_GET["letters"];
    $symbols = $_GET["symbols"];
    $length = $_GET["length"];
    require_once __DIR__ . "/partials/helper.php";
    ?>
</head>

<body>
    <form>
        <label for="length">Length </label>
        <input type="text" name=length <?php
        if ($_GET["length"]) {
            echo "value = $length";
        }
        ?>> <br> <br>
        <label for="numbers">Numbers</label>
        <input type="radio" name="numbers" <?php
        if ($numbers == "on") {
            $characters .= "0123456789";
            echo "checked";
        }

        ?>> <br>
        <label for="letters">Letters</label>
        <input type="radio" name="letters" <?php
        if ($letters == "on") {
            $characters .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            echo "checked";
        }
        ?>><br>
        <label for="symbols">Symbols</label>
        <input type="radio" name="symbols" <?php
        if ($symbols == "on") {
            $characters .= "~!@#$%^&*(){}[],./";
            echo "checked";
        }
        ?>> <br>
        <input type="submit" value="CREATE">

    </form>
    <?php
    echo generateRandomString($length, $characters);
    ?>

</body>

</html>