<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link rel="stylesheet" href="display.css">
    <link rel="stylesheet" href="/components/navbar/navbar.css">
    <link rel="stylesheet" href="/components/footer/footer.css">

</head>

<body>
    <?php include './components/navbar/navbar.php'?>
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
<center>
    <table border="1">
        <tr>
            <th class="tablehead">firstname</th>
            <th class="tablehead">lastname</th>
            <th class="tablehead">gender</th>
            <th class="tablehead">email</th>
            <th class="tablehead">phone</th>
            <th class="tablehead">address</th>
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
<?php include './components/footer/footer.php'?>

<!-- echo $result['firstname'] . " " . $result['lastname'] . " " . $result['gneder'] . " " . $result['email'] . " " . $result['phone'] . " " . $result['address'] . "</br>"; -->