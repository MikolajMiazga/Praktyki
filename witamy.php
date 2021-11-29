<?php
session_start();

if (!isset($_SESSION['udanarejestracja'])) {
    header('Locaction: index.php');
    exit();
} else {
    unset($_SESSION['udanarejestracja']);
}

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <style>
        body {
            background-image: url(img/webb.png);
            margin: 0;
        }

        #cont {
            margin-top: 20%;
            width: 100%;
            height: 90%;
            background-color: #309bc5;
            border-top: 1px #f4d06f dashed;
            border-bottom: 1px #f4d06f dashed;
        }

        #text1 {
            color: #392f5a;
            font-family: 'lato';
            font-size: 90%;
            font-weight: bold;
            text-align: center;

        }

        a:hover {
            color: #309bc5 !important;
        }
    </style>
    <link rel="stylesheet" href="rejestracja.css?v=<?php echo time(); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> Dziękujemy za rejestracje!</title>
</head>

<body>

    <div id="cont">
        <p id="text1">Dziękujemy za rejestracje w serwisie! Możesz już zalogować się na swoje konto!<br /> <br />

            <a href="index.php" style="color: #dcc12e; text-decoration: none;">Zaloguj się na swoje konto!</a>
            <br /> <br />
    </div>

</body>

</html>