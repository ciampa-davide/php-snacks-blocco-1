<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato” -->
<?php
  $name = $_GET["name"];
  $email = $_GET["mail"];
  $age = $_GET["age"];
  $check = is_numeric($age);


  //controllo sulla lunghezza del nome
    if(strlen($name) > 3){

      if(strpos($email, ".") !== false && strpos($email, "@") !== false ){
        $access = "Accesso consentito";
        // if(is_int($age)){
        //
        //   $access = "Accesso consentito";
        //
        // }else{
        //   $access = "Accesso Negato"
        // }

      }else{
        $access = "Accesso Negato";
      }

    }else{
      $access = "Accesso Negato";
    }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Snack 2</title>
</head>
<body>
   <p><?php echo $access ?></p>
   <p><?php echo var_dumb($chek) ?></p>
</body>
</html>
