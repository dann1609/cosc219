<?php

$servername = "127.0.0.1";
$username = "root";
$password = "P@ssword1";
$dbname = "cosc219";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


    $sql = "select username, phone from `users`;";
    $result = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <div class="icon-bar">
        <a class="active" href="./index.html"><i class="fa fa-home"></i></a>
        <a href="./formin.html"><i class="fa-solid fa-table-cells"></i></a>
    </div>
    <div class="section">
        <table border="1">
            <tr><th>Number 1</th><th>Number 2</th></tr>
            <?php
            while($row = mysqli_fetch_row($result)){
                echo "<tr>";
                for($i=0; $i<2; $i++){
                    echo "<td> {$row[$i]} </td>";
                }

                echo "</tr>";
            }

            ?>
        </table>
        </div>
    </body>
    <script src="https://kit.fontawesome.com/92bcfa0729.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</html>
