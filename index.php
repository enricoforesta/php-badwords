<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Badwords</title>
</head>

<body>
   <div class="container">
      <!-- form -->
      <form action="result.php" method="get">
         <label for="text"> inserisci il paragrafo:</label>
         <textarea name="text" id="text" cols="30" rows="10"></textarea>
         <label for="censured">Inserisci la parola da censurare:</label>
         <input type="text" id="censured" name="censured">
         <input type="submit" value="Invia">
      </form>
      <!-- / form -->
   </div>
</body>

</html>