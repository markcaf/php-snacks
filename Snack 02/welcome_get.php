<html>
<body>

    Welcome <?php echo $_GET["name"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?><br>
    Your age is: <?php echo $_GET["age"]; ?><br><br>

    <?php 
        $name = $_GET['name'];
        $mail = $_GET['email'];
        $age = $_GET['age'];

        if ( (strlen($name) > 3)
                && ( strpos($mail, '@') > 0 && strpos($mail, '.') > 3)
                && ( is_numeric($age)) ){
                    echo "<h2>" . "Login successful" . "</h2>";
                } else {
                    echo "<h2>" . "Access denied" . "</h2>";
                }
    ?>

</body>
</html>