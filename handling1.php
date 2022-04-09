<html>
    <head>
        <title>Tabel Lokasi</title>
    </head>
    <body>
    <table border="1">
    <?php
        //table head
        echo "<tr>
        <th align=center>Location</th>
        <th align=center>Latitude</th>
        <th align=center>Longitude</th>
        </tr>";
        //open file locations1.txt
        $myfile = fopen("locations1.txt", "r");
        //inisialisasi index
        $i=0;
        //loop untuk menampilkan semua data dalam tabel
        while (!feof($myfile)){
        $mydata = fgets($myfile);
        $res = explode(",",$mydata);
        $str = str_replace ('"'," ",$res);
        if($i==0){
            $i++; 
            continue;
        }
        echo "<tr>
        <td>".$str[0]."</td>
        <td>".$str[1]."</td>
        <td>".$str[2]."</td>
        </tr>";
        $i++;
        }
        //close file
        fclose($myfile); 
    ?>
    </table>
    </body>
</html>
