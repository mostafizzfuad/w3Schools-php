<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation & Required</title>
</head>

<body>

    <?php
    $name = $email = $phone = "";
    $errorName = $errorEmail = $errorPhone = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $errorName = "Name is required";
        } else {
            $name = $_POST["name"];
        }

        if (empty($_POST["email"])) {
            $errorEmail = "Email is required";
        } else {
            $email = $_POST["email"];
        }

        if (empty($_POST["phone"])) {
            $errorPhone = "Phone Number is required";
        } else {
            $phone = $_POST["phone"];
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Name: <input type="text" name="name" placeholder="Write Your Name"></label>
        <span class="error" style="color: red;">* <?php echo $errorName; ?> </span> <br><br>
        <label>Email: <input type="email" name="email" placeholder="Write Your Email"></label>
        <span class="error" style="color: red;">* <?php echo $errorEmail; ?> </span> <br><br>
        <label>Phone: <input type="tel" name="phone" placeholder="Write Your Phone number"></label>
        <span class="error" style="color: red;">* <?php echo $errorPhone; ?> </span> <br><br>
        <input type="submit">
    </form>

    <?php echo $name; ?> <br>
    <?php echo $email; ?> <br>
    <?php echo $phone; ?> <br>


</body>

</html>