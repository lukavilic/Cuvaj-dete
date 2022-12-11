<?php
    include 'displaypostscript.php';
    session_start();
    $userID = $_SESSION['userID'];
    echo $userID;
?>

<html>
    <head>

    </head>


    <body>
        <form action="registerscript.php" method="post">
            <p>Korisnicko ime</p>
            <input type="text" name="username"><br><br>

            <p>E-mail</p>
            <input type="text" name="email"><br><br>

            <p>Sifra</p>
            <input type="password" name="password"><br><br>
            <button type="submit">Registruj se</button>
        </form>


        <form action="loginscript.php" method="post">
            <p>E-mail</p>
            <input type="text" name="email"><br><br>

            <p>Sifra</p>
            <input type="password" name="password"><br><br>
            <button type="submit">Uloguj se</button>
        </form>

        <div>
            <?php displayPosts();?>
        </div>
    </body>

</html>