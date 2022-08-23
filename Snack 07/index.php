<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>

    <h2>Snack 7</h2>
    <p>Creare un array contenente qualche alunno di un'ipotetica classe. 
       Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
       Stampare Nome, Cognome e la media dei voti di ogni alunno.
    </p>

    <?php 
        $students = [
            [
                'name' => 'Doriano',
                'surname' => 'Grigio',
                'votes' => [8, 9, 5, 7],
            ],

            [
                'name' => 'Mario',
                'surname' => 'Dorellanti',
                'votes' => [5, 5, 6, 5],
            ],

            [
                'name' => 'Carmelo',
                'surname' => 'Rupellassi',
                'votes' => [6, 9, 9, 9],
            ],

            [
                'name' => 'Geranio',
                'surname' => 'Fioretti',
                'votes' => [2, 4, 9, 10],
            ],

            [
                'name' => 'Elena',
                'surname' => 'Darmalli',
                'votes' => [2, 4, 3, 5],
            ],
        ];
    ?>

    <?php for ($i=0; $i < count($students); $i++) { ?>
        <h4>
            <?php 
                $averageVote = intval(array_sum($students[$i]['votes']) / count($students[$i]['votes'])) ;

                echo $students[$i]["name"] . ' ' . $students[$i]["surname"] . ' | Media voti: ' . $averageVote;
            ?>
        </h4>
    <?php } ?>


</body>
</html>