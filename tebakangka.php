<?php
    session_start();
    //jika session empty maka akan dipilih bilangan random 1-100
    if (empty($_SESSION['bilangan'])){
    $_SESSION['bilangan'] = rand(1,100);
    }
?>
<html>
    <head>
        <title>Games Tebak Angka</title>
    </head>
    <body>
        <h2>Tebak Angka</h2>
    <?php
        if (isset($_POST['submit'])){
            if ($_POST['tebakan'] < $_SESSION['bilangan']){
                echo "Tebakan anda terlalu rendah.";
            }
            else if ($_POST['tebakan'] > $_SESSION['bilangan']){
                echo "Tebakan anda terlalu tinggi.";
            }
            else {
                echo "Selamat, tebakan anda benar!";
            session_destroy();
            echo"<br>";
            echo "<a type='button' href='tebakangka.php'>Main Lagi?</a>";
            exit();
            }
        }
    ?>
        <form method="POST" action="tebakangka.php">
            Masukkan angka tebakan 1-100: <input type="text" name="tebakan">
            <input type ="submit" value="Submit" name="submit">
        </form>
    </body>
</html>