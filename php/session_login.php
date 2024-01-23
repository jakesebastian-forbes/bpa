<?php

require 'db_func.php';

//get data from form
$username = $_POST['username'];
$password = $_POST['password'];

//call select function from db_func
$condition = "username = '$username'";

//check admin
$result = select("admin", "$condition");

//check if there are result
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["username"] . " " . $row["password"] . "<br>";
        // $db_username = $row['username'];
        $db_pass = $row['password'];

        $department = strtolower($row['department']);
        // verify password

        if (password_verify($password, $db_pass) == 1) { //success

            //create session
            session_start();
            $_SESSION['privilege'] = 'admin';
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['name'] = ucwords($row['firstname']." ".$row['lastname']);
            $_SESSION['department'] = $row['department'];
            



            header('Location: ../pages/admin_' . $department . '_home.php');
        } else { //wrong username/password
            header('Location: ../index.php?error=incorrect,username=' . $username);
        }
    }
} else { 
    //no result
    //check applicant
    $result = select("applicant", "$condition");
    //check if there are result
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"] . " - Name: " . $row["username"] . " " . $row["password"] . "<br>";
            // $db_username = $row['username'];
            $db_pass = $row['password'];

            // verify password

            if (password_verify($password, $db_pass) == 1) { //success

                //create session
                session_start();
                $_SESSION['privilege'] = 'applicant';
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header('Location: ../pages/applicant_home.php');
            } else { //wrong username/password
                header('Location: ../index.php?error=incorrect,username=' . $username);
            }
        }
    } else {
        header('Location: ../index.php?error=noaccount');
    }


}
