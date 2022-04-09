<html>
<head>
    <title>Table of Location</title>
</head>
<body>
    <h2>Add Location</h2>
    <?php
        include 'formlokasi.php';
    ?>
    <hr>
    <h2>Location List</h2>

    <?php
        //menambahkan data dari form yang diisi ke file location3.txt
        if (isset($_POST['AddData'])){
        $file=fopen("locations3.txt","a") or die ("Unable to open file");
        rewind($file);
        $location= $_POST['location'];
        $latitude= $_POST['latitude'];
        $longitude= $_POST['longitude'];
        $format = "\n".$location.",\"".$latitude.",".$longitude."\"";
        fwrite($file,$format);
        fclose($file);
        }
    ?>
    <table border='1'>
        <?php 
            //membuat fungsi untuk menghitung jarak
            function distance($x1, $x2, $y1, $y2){
                return sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
            }
        ?>

        <?php
            //table head
            echo "<tr>
            <th align=center>Location</th>
            <th align=center>Latitude</th>
            <th align=center>Longitude</th>
            <th align=center>Distance</th>
            </tr>";

            $datalokasi=array();
            $i = 0;
            $my_file=fopen("locations3.txt","r") or die ("Unable to open file");
            while(!feof($my_file)){
            $my_data=fgets($my_file);
            if($i==0){
                $i++;
                continue;
            }
            $res = explode(",", $my_data);
            $str = str_replace('"',"",$res);
            $distance = distance(-7.56526,(float)$str[1],110.81423,(float)$str[2]);

            //bentuk data array asosiatif
            $arrData=(
                array("loc"=>$str[0], "lat"=>$str[1], "long"=>$str[2], "jarak"=>$distance)
            );

            //menambahkan ke array datalokasi
            array_push($datalokasi,$arrData);
            }

            //mengambil data pada kolom jarak
            $jarak=array_column($datalokasi, 'jarak');

            //sort datalokasi berdasarkan besar jarak 
            array_multisort($jarak, SORT_ASC, $datalokasi);
            fclose($my_file);
        ?>

        <?php 
            //menampilkan data
            foreach ($datalokasi as $row){
                echo "<tr>
                <td>".$row['loc']."</td>
                <td>".$row['lat']."</td>
                <td>".$row['long']."</td>
                <td>".$row['jarak']."</td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>