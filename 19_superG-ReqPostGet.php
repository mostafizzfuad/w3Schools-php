<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobal - REQUEST , POST & GET</title> 
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">  
    <!-- $SERVER['PHP_SELF'] : same page এর url কে ধরার জন্য ইউজ করা হয়েছে । অর্থাৎ, action একই পেজের মধ্যে ঘটবে -->
        <label> Name <input type="text" name="fname"></label>
        <input type="submit" value="Submit">
    </form>

    <?php
    // $_POST is also widely used to pass variables.
    // $_GET can also collect data sent in the URL.

        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            $name = $_REQUEST['fname']; // collect value of input field
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>
</body>
</html>