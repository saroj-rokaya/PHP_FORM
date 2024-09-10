<?php include("db_connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/components//navbar/navbar.css">
</head>

<body>
    <?php include './components/navbar/navbar.php' ?>
    <div class="container">
        <form action="" method="POST">
            <div class="title">
                Registration form
            </div>
            <div class="form">
                <div class="input_field">
                    <label>firstname</label>
                    <input type="text" class="input" name="firstname" required>
                </div>
                <div class="input_field">
                    <label>lastname</label>
                    <input type="text" class="input" name="lastname" required>
                </div>
                <div class="input_field">
                    <label>password</label>
                    <input type="password" class="input" name="password" required>
                </div>
                <div class="input_field">
                    <label>confirm password</label>
                    <input type="password" class="input" name="confirmpassword" required>
                </div>
                <div class="input_field">
                    <label>gender</label>
                    <div class="costum_select">
                        <select name="gender" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Email</label>
                    <input type="text" class="input" name="email" required>
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="tel" class="input" name="phone" required>
                </div>
                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" name="address"></textarea>
                </div>
                <div class="input_field">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>agree the terms and conditions</p>

                </div>
                <div class="input_field">
                    <input type="submit" value="register" class="btn" name="register">
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php


if ($_POST['register']) {
    $firstname       = $_POST['firstname'];
    $lastname        = $_POST['lastname'];
    $password        = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender          = $_POST['gender'];
    $email           = $_POST['email'];
    $phone           = $_POST['phone'];
    $address         = $_POST['address'];


    if ($firstname != "" && $lastname != "" && $password != "" && $confirmpassword != "" && $gender != "" && $email != "" && $phone != "" && $address != "") {
        $query = "INSERT INTO FORM value('$firstname','$lastname','$password','$confirmpassword','$gender','$email','$phone','$address')";
        $data = mysqli_query($conn, $query);
        if ($query) {
            echo "Registration Successful";
        } else {
            echo "Error! " . mysqli_error($conn);
        }
    } else {
        echo "Please fill the input field";
    }
}





?>