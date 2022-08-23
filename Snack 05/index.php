<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>

    <h2>Snack 5</h2>
    <pre>Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    </pre>
    
    <?php 
        $text = "Consideravo la mia amica Morella con un sentimento in cui si
        mescolava il più profondo e al tempo stesso singolarissimo
        affetto. L'avevo conosciuta per caso molti anni prima, ma la
        mia anima, al nostro primo incontro, aveva appreso ad ardere
        di fuochi sino ad allora sconosciuti; non erano però i fuochi di
        Eros, e amaro e tormentoso al mio spirito era il graduale
        convincimento di non essere in grado di definire in modo
        alcuno il loro insolito significato, o di regolarne la misteriosa
        intensità. Tuttavia ci vedevamo spesso, e il destino ci legò
        insieme all'altare; ma mai io le parlai di passione, o pensai
        all'amore. Morella però scansava la società, e attaccata soltanto
        a me mi rendeva felice.";

        $paragraphs = explode(".", $text);
    ?>

    <?php for ($i=0; $i < count($paragraphs); $i++) { ?>
        <p>
            <?php 
                echo $paragraphs[$i];
            ?>
        </p>
    <?php } ?>
    


</body>
</html>