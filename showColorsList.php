<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .colorSample {
            width: 50px;
            height: 30px;
            border-radius: 6px;
        }

        .colorsContainer {
            display: flex;
            flex-direction: column;
            flex-flow: column wrap;
            height: 98vh;
        }

        .colorContainer {
            display: grid;
            grid-template-columns: 60px 145px 70px 130px;
            align-items: center;
            width: 400px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            margin: 4px;
        }
    </style>
</head>

<body>
    <div class="colorsContainer">

        <?php
        include "php/colors.php";

        echo Colors::MakeList(Colors::ReadFile("data/colors.txt"));














        ?>
    </div>
</body>

</html>