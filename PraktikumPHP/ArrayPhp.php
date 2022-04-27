<!DOCTYPE html>
<html>
    <head>
        <title>Pemrograman Array dengan PHP</title>
    </head>
    <body>
        <?php
        $nama[] = " Daud " ;
        $nama[] = " Arya ";
        $nama[] = " Rafa ";
        echo $nama[1] . $nama[2] . $nama[0] ;
        echo "<br></br>";
        //menghitung jumlah elemen array
$jum_array = count($nama);
echo "jumlah elemen array = ". $jum_array;
        ?>
    </body>
</html>