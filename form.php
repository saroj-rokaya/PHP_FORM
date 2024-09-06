<?php include("db_connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <div class="title">
                Registration form
            </div>
            <div class="form">
                <div class="input_field">
                    <label>firstname</label>
                    <input type="text" class="input" name="firstname">
                </div>
                <div class="input_field">
                    <label>lastname</label>
                    <input type="text" class="input" name="lastname">
                </div>
                <div class="input_field">
                    <label>password</label>
                    <input type="password" class="input" name="password">
                </div>
                <div class="input_field">
                    <label>confirm password</label>
                    <input type="password" class="input" name="confirmpassword">
                </div>
                <div class="input_field">
                    <label>gender</label>
                    <div class="costum_select">
                        <select name="gender">
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Email</label>
                    <input type="text" class="input" name="email">
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="tel" class="input" name="phone">
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

    $query = "INSERT INTO FORM value('$firstname','$lastname','$password','$confirmpassword','$gender','$email','$phone','$address')";
    $data = mysqli_query($conn, $query);    
    if ($query) {
        echo "Registration Successful";
    } else {
        echo "Error! " . mysqli_error($conn);
    }
}

?>