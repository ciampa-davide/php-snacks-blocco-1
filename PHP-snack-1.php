<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php
  $matches = [
    "03-01-2021" => [
      "firstMatch" =>[
        "casa" => "Milano",
        "ospite"=>"Roma",
        "puntiCasa"=> 80,
        "puntiOspite"=> 84
      ],
      "secondMatch" =>[
        "casa"=>"Napoli",
        "ospite"=>"Bari",
        "puntiCasa"=>75,
        "puntiOspite"=>96
      ],
      "thirdMatch" =>[
        "casa" => "Cagliari",
        "ospite" => "Torino",
        "puntiCasa" => 54,
        "puntiOspite" => 36
      ]
    ]
  ];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Snack 1</title>
</head>
<body>
  <h1>Partite del 03/01/2021</h1>
  <p>Prima partita</p>
  <p><?php
      echo $matches["03-01-2021"]["firstMatch"]["casa"]." - ".$matches["03-01-2021"]["firstMatch"]["ospite"]." | ".
      $matches["03-01-2021"]["firstMatch"]["puntiCasa"]." - ".$matches["03-01-2021"]["firstMatch"]["puntiOspite"];
   ?></p>
   <p>Seconda Partita</p>
   <p><?php
       echo $matches["03-01-2021"]["secondMatch"]["casa"]." - ".$matches["03-01-2021"]["secondMatch"]["ospite"]." | ".
       $matches["03-01-2021"]["secondMatch"]["puntiCasa"]." - ".$matches["03-01-2021"]["secondMatch"]["puntiOspite"];
    ?></p>
    <p>Terza Partita</p>
    <p><?php
        echo $matches["03-01-2021"]["thirdMatch"]["casa"]." - ".$matches["03-01-2021"]["thirdMatch"]["ospite"]." | ".
        $matches["03-01-2021"]["thirdMatch"]["puntiCasa"]." - ".$matches["03-01-2021"]["thirdMatch"]["puntiOspite"];
     ?></p>
</body>
</html>
