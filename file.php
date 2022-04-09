<?php
    $myfile = fopen("file.txt", "r");
    while (!feof($myfile)){
        $mydata = fgets($myfile);
        echo $mydata;
    }
?>