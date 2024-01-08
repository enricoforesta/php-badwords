<!-- Variabili  -->
<?php
$text = $_GET["text"];
$censured = $_GET["censured"];
$text_censured = str_replace($censured, "***", $text);
?>
<!-- / Variabili  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULT</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- / My CSS -->
</head>

<body>
    <div class="container result">
        <div class="title">
            <h1>Risultati</h1>
        </div>
        <!-- paragrafo iniziale -->
        <div>
            <h2>Paragrafo iniziale: </h2>
            <p>
                <?php
                echo $text;
                ?>
            </p>
            <span>Il paragrafo è lungo
                <?php
                echo strlen($text);
                ?>
            </span>
        </div>
        <!-- / paragrafo iniziale -->
        <!-- paragrafo censurato -->
        <div>
            <h2>Paragrafo censurato: </h2>
            <p>
                <?php
                echo $text_censured;
                ?>
            </p>
            <span>Il paragrafo è lungo
                <?php
                echo strlen($text_censured);
                ?>
            </span>
        </div>
        <!-- / paragrafo censurato -->
    </div>
</body>

</html>