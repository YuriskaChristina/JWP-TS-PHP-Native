<html>
    <head>
        <title>Kotak Post</title>
        <style type="text/css">
                .style1{background-color: black; color: white;}
                .style2{background-color: white; color: black;}
        </style>
    </head>
    <body>
    <?php
        //post nilai baris dan kolom dari formkotak.php
        $baris=$_POST['baris'];
        $kolom=$_POST['kolom'];
        //inisiasi awal
        $num=1;
            echo "<table border ='1'>";
            for ($i=1; $i<=$baris; $i++){
                echo "<tr>";
                //kotak dengan angka genap diberi warna bg hitam
                for ($j=1; $j<=$kolom; $j++){
                    if ($num % 2 == 0){
                        $style = "style1";
                    } //kotak dengan angka genap diberi warna bg putih
                    else
                        $style = "style2";
                echo "<td class='".$style."'>";
                echo $num;
                echo "</td>";
                $num++;
            }
                echo '</tr>';
            }
            echo "</table>";
            ?>
    </body>
</html>
