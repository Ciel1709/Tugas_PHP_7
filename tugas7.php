<?php
$angka = [1,2,3,4,5,6,7,8,9,10];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabel Bilangan</h1>
    <table border="1">
    <tr>
            <td>Bilangan</td>
            <td>Jenis</td>
    </tr>
    <tr>
            <td><?php echo "$angka[0]" ?></td>
            <td>
            <?php
            //Tulis jawaban disini
            if ($angka[0]%2) {
                echo "Bilangan Genap";
            }else{
                echo "Bilangan Ganjil";
            }
            ?>
            </td>
    </tr>
    <tr>
            <td><?php echo "$angka[1]" ?></td>
            <td>
            <?php
            //Tulis jawaban disini
            if ($angka[1]%2) {
                echo "Bilangan Genap";
            }else{
                echo "Bilangan Ganjil";
            }
            ?>
            </td>
    </tr>
    <tr>
            <td><?php echo "$angka[2]" ?></td>
            <td>
            <?php
            //Tulis jawaban disini
            if ($angka[2]%2) {
                echo "Bilangan Genap";
            }else{
                echo "Bilangan Ganjil";
            }
            ?>
            </td>
    </tr>
    <tr>
    <td><?php echo "$angka[3]" ?></td>
    <td>
            <?php
            //Tulis jawaban disini
            if ($angka[3]%2) {
                echo "Bilangan Genap";
            }else{
                echo "Bilangan Ganjil";
            }
            ?>
    </td>
    </tr>
    <tr>
    <td><?php echo "$angka[4]" ?></td>
    <td>
            <?php
            //Tulis jawaban disini
            if ($angka[4]%2) {
                echo "Bilangan Genap";
            }else{
                echo "Bilangan Ganjil";
            }
            ?>
    </td>
    </tr>
    <tr>
    <td><?php echo "$angka[5]" ?></td>
    <td>
            <?php
            //Tulis jawaban disini
            if ($angka[5]%2) {
                echo "Bilangan Genap";
            }else{
                echo "Bilangan Ganjil";
            }
            ?>
    </td>
    </tr>
    <tr>
    <td><?php echo "$angka[6]" ?></td>
    <td>
            <?php
            //Tulis jawaban disini
            if ($angka[6]%2) {
                echo "Bilangan Genap";
            }else{
                echo "Bilangan Ganjil";
            }
            ?>
    </td>
    </tr>
    <tr>
    <td><?php echo "$angka[7]" ?></td>
    <td>
            <?php
            //Tulis jawaban disini
            if ($angka[7]%2) {
                echo "Bilangan Genap";
            }else{
                echo "Bilangan Ganjil";
            }
            ?>
    </td>
    </tr>
    <tr>
    <td><?php echo "$angka[8]" ?></td>
    <td>
            <?php
            //Tulis jawaban disini
            if ($angka[8]%2) {
                echo "Bilangan Genap";
            }else{
                echo "Bilangan Ganjil";
            }
            ?>
    </td>
    </tr>
    <tr>
    <td><?php echo "$angka[9]" ?></td>
    <td>
            <?php
            //Tulis jawaban disini
            if ($angka[9]%2) {
                echo "Bilangan Genap";
            }else{
                echo "Bilangan Ganjil";
            }
            ?>
    </td>
    </tr>
    </table>    
</body>
</html>
