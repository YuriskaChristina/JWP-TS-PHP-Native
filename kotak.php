<html>
    <head>
        <title>Kotak</title>
        <style type="text/css">
            .style1{background-color: black; color: white;}
            .style2{background-color: white; color: black;}
        </style>
    </head>
    <body>
        <?php
            $awal = microtime(true); //untuk mengetahui lama eksekusi script
            $baris=10;
            $kolom=15;

            //inisiasi awal
            $num=1; 
            echo "<table border ='1'>";
            for ($i=1; $i<=$baris; $i++){
                echo "<tr>";
                for ($j=1; $j<=$kolom; $j++){
                    //kotak dengan angka genap diberi warna bg hitam
                    if ($num % 2 == 0){
                        $style = "style1";
                    }
                    //kotak dengan angka ganjil diberi warna bg putih
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
            $akhir = microtime(true);
            $lama = $akhir - $awal;
            echo "Lama eksekusi script adalah: ".$lama." detik";
        ?>
    </body>
</html>