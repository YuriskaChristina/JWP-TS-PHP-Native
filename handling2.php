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
        //menambahkan data dari form yang diisi ke file location2.txt
        if (isset($_POST['AddData'])){
        $file=fopen("locations2.txt","a") or die ("Unable to open file");
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
            //iniasiasi awal
            $i = 0;
            $my_file=fopen("locations2.txt","r") or die ("Unable to open file");
            //loop untuk menampilkan semua data dalam tabel
            while(!feof($my_file)){
            $my_data=fgets($my_file);
            if($i==0){
                $i++; 
                continue;
            }
            $res = explode(",", $my_data);
            $str = str_replace('"',"",$res);
            $distance = distance(-7.56526,(float)$str[1],110.81423,(float)$str[2]);
            echo "<tr>
            <td>".$str[0]."</td>
            <td>".$str[1]."</td>
            <td>".$str[2]."</td>
            <td>".$distance."</td>
            </tr>";
            $i++;
            }
            fclose($my_file);
        ?>
    </table>
</body>
</html>