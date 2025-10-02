<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .box {
            border: 1px solid red;
        }

        .green {
            background-color: lightgreen;
        }

        .blue {
            background-color: lightblue;
        }
    </style>

    <title>Document</title>
</head>

<body>
    <h1>Hello, World!<h1>
            <p>This is my first PHP file.</p>

            <?php
            for ($i = 200; $i <= 250; $i++) {
                if ($i % 2 == 1) {
                    print $i . " Hello world <br>";
                }
            }
            ?>
</body>

</html>