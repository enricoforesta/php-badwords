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
    <title>Result</title>
</head>

<body>
    <div class="result">
        <!-- paragrafo iniziale -->
        <div>
            <h2>paragrafo iniziale: </h2>
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
            <h2>paragrafo censurato: </h2>
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