<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: antiquewhite;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            text-align: center;
            background-color: white;
        }
    </style>
</head>

<body>

</body>

</html>
















<?php
include("db_connect.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<h2 style="text-align: center"> <mark> Displaying Records </mark></h2>
<center>
    <table border="1" width="60%">
        <tr>
            <th width="10%">firstname</th>
            <th width="10%">lastname</th>
            <th width="10%">gender</th>
            <th width="10%">email</th>
            <th width="10%">phone</th>
            <th width="10%">address</th>
        </tr>
        <?php
        if ($total != 0) {
            while ($result = mysqli_fetch_assoc($data)) {
                echo " 
                <tr>
                    <td>" . $result['firstname'] . "</td>
                    <td>" . $result['lastname'] . "</td>
                    <td>" . $result['gender'] . "</td>
                    <td>" . $result['email'] . "</td>
                    <td>" . $result['phone'] . "</td>
                    <td>" . $result['address'] . "</td>
                    
                </tr> ";
            }
        } else {
            echo "no record not found";
        }
        ?>
    </table>
</center>

<!-- echo $result['firstname'] . " " . $result['lastname'] . " " . $result['gneder'] . " " . $result['email'] . " " . $result['phone'] . " " . $result['address'] . "</br>"; -->