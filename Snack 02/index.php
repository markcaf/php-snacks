<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <h2>Snack 2</h2>
    <p> 
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
    </p>

    <form action="welcome_get.php" method="get">
        Name: <input type="text" name="name"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        Age: <input type="text" name="age"><br><br>
        <input type="submit">
    </form>

</body>
</html>