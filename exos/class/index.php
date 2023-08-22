<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
        }

        .Robot {
            width: fit-content;
            height: fit-content;
            margin: auto;
            padding: 1rem;

            border-radius: 5px;
            background-color: #ccc;
            box-shadow: 10px 10px #ddd;
        }

        .Robot p:nth-child(2n+1) {
            margin: .5rem 1rem 0 .5rem;
            background-color: #ccc;
        }

        .Robot p:nth-child(n+3) {
            /* display: none; */
        }

        h1 {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="Robot">
        <h1>Robot-Factory</h1>
        <p>
            <?php require('./requiet.php') ?>
        </p>
    </div>
</body>

</html>