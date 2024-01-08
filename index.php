<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Badwords</title>
   <!-- My CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- / My CSS -->
</head>

<body>

   <div class="container">
      <div class="title">
         <h1>Censura i tuoi testi</h1>
      </div>
      <!-- form -->
      <form action="result.php" method="get">
         <div>
            <label for="text"> Inserisci il paragrafo:</label><br>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
         </div>
         <div>
            <label for="censured">Inserisci la parola da censurare:</label><br>
            <input type="text" id="censured" name="censured">
         </div>
         <input id="submit" type="submit" value="Invia">
      </form>
      <!-- / form -->
   </div>
</body>

</html>