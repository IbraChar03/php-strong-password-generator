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
        }

        .container {
            width: 50%;
            background-color: #222225;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
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
        }

        .btn {
            padding: 8px 15px;
            background-color: white;
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
                            <input type="text" class="inputLength" name=length <?php
                            if ($_GET["length"]) {
                                echo "value = $length";
                            }

                            ?>>
                        </div>
                        <div class="options">
                            <input class="customRadio" type="radio" name="numbers" <?php
                            if ($numbers == "on") {
                                $characters .= "0123456789";
                                echo "checked";
                            }

                            ?>>
                            <label class=textOptions for="numbers">Numbers</label>
                            <br>
                            <input class="customRadio" type="radio" name="letters" <?php
                            if ($letters == "on") {
                                $characters .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                                echo "checked";
                            }
                            ?>>
                            <label class=textOptions for="letters">Letters</label>
                            <br>
                            <input class="customRadio" type="radio" name="symbols" <?php
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
                    <input type="submit" value="GENERATE" class=btn>

                </div>
            </form>


            <div class="pswGen">
                <?php
                echo generateRandomString($length, $characters);
                ?>
            </div>
        </div>
    </div>

</body>

</html>