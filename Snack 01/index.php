<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1 - Partite di Basket</title>
</head>
<body>
    <?php 
        $partite = [
            [
            "casa" => "Napoli",
            "trasferta" => "Milano",
            "puntiCasa" => 98,
            "puntiTrasferta" => 20,
        ],

        [
            "casa" => "Roma",
            "trasferta" => "Lazio",
            "puntiCasa" => 55,
            "puntiTrasferta" => 53,
        ],

        [
            "casa" => "Bari",
            "trasferta" => "Firenze",
            "puntiCasa" => 55,
            "puntiTrasferta" => 60,
        ],
    ];
    ?>

    <h2>Snack 1 - Partite di Basket</h2>
    <p> Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60</p>

    <?php for ($i=0; $i < count($partite); $i++) { ?>
        <h4>
            <?php 
                echo $partite[$i]["casa"] . ' - ' . $partite[$i]["trasferta"] . ' | ' . $partite[$i]["puntiCasa"] . '-' . $partite[$i]["puntiTrasferta"];
            ?>
        </h4>
    <?php } ?>
</body>
</html>