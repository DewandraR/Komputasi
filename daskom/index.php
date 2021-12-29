<!DOCTYPE html>
<html>
    <head>
        <title>PHP pertamakuu</title>
    </head>
    <body>
        <?php
            // phpinfo();

            //print
            print "<h2>Belajar PHP</h2>";
            print "Hello word<br>";
            print "Sedang mempelajari PHP!";
            echo "<br><br>";

            //variabel
            $txt = "Hello world";
            $x = 5;
            $y = 10.5;

            echo $txt;
            echo "<br>";
            echo $x;
            echo "<br>";
            echo $y;
            echo "<br><br>";

            //operator pada string
            $txt1 = "Hello World!";
            $txt2 = "What a nice day!";
            echo $txt1." ".$txt2;
            echo "<br> Panjang $txt1: ";
            echo strlen($txt1)." sama dengan ".strlen("Hello world!");
            echo "<br> Kata world, ada di posisi ke-";
            echo strpos("Hello World!", "World");
            echo "<br><br>";

            //operator aritmatika
            $x = 10;
            $y = 6;
            $tambah = $x+$y;
            echo $x." + ".$y." = ".$tambah;
            echo "<br><br>";

            //operator assignment
            $x = 10;
            echo "nilai x = $x";
            $x += 100;
            echo "<br>nilai x = $x";
            echo "<br><br>";

            //operator komparasi
            $x = 100;
            $y = "100";
            echo "<br> x == y: ";
            var_dump($x==$y);
            //bernilai true karena nilai nya sama
            echo "<br> x == y: ";
            var_dump($x===$y);
            //bernilai false karena nilai sama tetapi beda tipe
            echo "<br><br>";
            // echo cetak biasa
            //var_dump cetak, mengetahui informasi pada suatu nilai variabel

            //operator logika
            $x = 100;
            $y = 50;
            if($x == 100 and $y == 50){
                echo "benar x=$x dan y=$y";
            }
            echo "<br><br>";

            //IF
            $d = date("D");
            if($d=="Mon") echo "Hari Senin!";
            elseif ($d=="Sun") echo "Hari Minggu!";
            else{
                echo "Bukan hari Minggu/Senin";
                echo "<br>Bye!";
            }
            echo "<br><br>";

            //Looping
            //while Do
            $i = 1;
            while($i<=5){
                echo "bilangan: $i <br>";
                $i++;
            }
            echo"<br><br>";

            //Do While
            $i = 1;
            do{
                $i++;
                echo "bilangan: $i <br>";
            }while($i<=5);
            echo "<br><br>";

            //For each
            $x = array("Mangga", "Jeruk", "Appel");
            foreach($x as $value){
                echo $value."<br>";
            }
        ?>
    </body>
</html>