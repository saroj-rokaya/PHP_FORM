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
        <div class="title">
            Registration form
        </div>
        <div class="form">
            <div class="input_field">
                <label>firstname</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label>lastname</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label>password</label>
                <input type="password" class="input">
            </div>
            <div class="input_field">
                <label>confirm password</label>
                <input type="password" class="input">
            </div>
            <div class="input_field">
                <label>gender</label>
                <div class="costum_select">
                    <select>
                        <option>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="input_field">
                <label>Phone No.</label>
                <input type="tel" class="input">
            </div>
            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea"></textarea>
            </div>
            <div class="input_field">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>agree the terms and conditions</p>

            </div>
            <div class="input_field">
                <input type="submit" value="register" class="btn">
            </div>

        </div>
    </div>






</body>

</html>