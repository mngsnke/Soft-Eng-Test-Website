<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $about = $_POST['about'];

    if (empty($fname) && empty($lname) && empty($age) && empty($email) &&
        empty($pnumber)) {
      header('Location: ../index.php');
    }
    echo "First Name: " . $fname . "<br>";
    echo "Last Name: " .$lname . "<br>";
    echo "Age: " .$age . "<br>";
    echo "Email: " .$email . "<br>";
    echo "Phone number: " .$pnumber . "<br>";

?>
