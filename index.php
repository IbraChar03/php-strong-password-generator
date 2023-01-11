<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $characters = "";
    $numbers = $_GET["numbers"];
    $letters = $_GET["letters"];
    $symbols = $_GET["symbols"];
    $length = $_GET["length"];
    require_once __DIR__ . "/partials/helper.php";
    ?>
    <style>
        body {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #00ff41;
        }

        .container {
            width: 50%;
            background-color: #222225;
            /* height: 500px; */
            padding: 50px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }

        .inner-cont {
            height: 100%;
            width: 70%;
            /* background-color: red; */
        }

        h1 {
            color: white;
            font-size: 30px;
        }

        .pswGen {
            width: 100%;
            height: 40px;
            border: 1px solid #ededed;
            margin-top: 10px;
            color: #ededed;
            font-size: 25px;
            display: flex;
            align-items: center;
            text-align: center;
        }

        h2 {
            color: white;
            font-size: 22px;
        }

        .form {
            height: 250px;
            width: 100%;
            border: 1px solid #ededed;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .formBox {
            width: 90%;
            /* background-color: blue; */
            height: 90%;
            display: flex;
        }

        .length {
            width: 50%;
            height: 100%;
            /* background-color: chartreuse; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pswLength {
            color: white;
            font-size: 20px;
            /* font-weight: bold; */
            margin-right: 10px;
        }

        .inputLength {
            width: 50px;
            height: 30px;
            background-color: #222225;
            outline: none;
            border: 1px solid #ededed;
            color: white;
            font-size: 18px;
            text-align: center;
        }

        .options {
            width: 50%;
            height: 100%;
            padding-top: 70px;
            padding-left: 50px;

        }

        .customRadio {
            height: 20px;
            width: 20px;
        }

        .textOptions {
            color: white;
            font-size: 20px;
        }

        .gen {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .btn {
            padding: 12px 29px;
            background-color: #00ff41;
            color: black;
            font-size: 15px;
            text-align: center;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="inner-cont">
            <h1>> Generate a secure password</h1>
            <h2>Customize your Password</h2>

            <form>
                <div class="form">
                    <div class="formBox">
                        <div class="length">
                            <label for="length" class=pswLength>Password Length </label>
                            <input type="number" class="inputLength" name=length <?php
                            if ($_GET["length"]) {
                                echo "value = $length";
                            }

                            ?>>
                        </div>
                        <div class="options">
                            <input class="customRadio" type="checkbox" name="numbers" <?php
                            if ($numbers == "on") {
                                $characters .= "0123456789";
                                echo "checked";
                            }

                            ?>>
                            <label class=textOptions for="numbers">Numbers</label>
                            <br>
                            <input class="customRadio" type="checkbox" name="letters" <?php
                            if ($letters == "on") {
                                $characters .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                                echo "checked";
                            }
                            ?>>
                            <label class=textOptions for="letters">Letters</label>
                            <br>
                            <input class="customRadio" type="checkbox" name="symbols" <?php
                            if ($symbols == "on") {
                                $characters .= "~!@#$%^&*(){}[],./";
                                echo "checked";
                            }
                            ?>>
                            <label class=textOptions for="symbols">Symbols</label>
                            <br>

                        </div>
                    </div>

                </div>
                <div class="gen">
                    <input type="submit" value="GENERATE" name="send" class=btn>

                </div>
                <div class="error">
                    <?php
                    if ($_GET["send"] && $numbers != "on" && $letters != "on" && $symbols != "on") {
                        echo "<h1> Error! You need to select at least 1 option </h1>";
                    }
                    ?>
                </div>
            </form>


            <div class="pswGen">
                <?php
                $passwordGen = generateRandomString($length, $characters);
                echo $passwordGen;
                ?>
            </div>
        </div>
    </div>

</body>

</html>