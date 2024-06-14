<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

<?php
$favourite_site = 'Musica Pop';
switch ($favourite_site) {
  case 'Pop Japones':
    echo "Mi Pop Japones favorito es el de Anri!";
    break;
  case 'Pop Americano':
    echo "Mi pop Americano Favorito es el de Michael Jackson!";
    break;
  case 'pop Koreano':
    echo "El kPop que mas escucho es el de BTS!";
    break;
  case 'Pop de los 80s':
    echo "Me gusta cualquiera!";
    break;
  case 'Pop chino':
    echo "Mi pop chino favorito es el de WeiBird!";
    break;
  default:
    echo "Todos los pop son buenos.. menos sus fans!";
}
?>
  </body>
</html>