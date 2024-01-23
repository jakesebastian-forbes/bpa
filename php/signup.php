<?php
print_r($_POST); 



require "db_func.php";

try {

    $address_id = gen_uuid();
    $barangay = $_POST['barangay'];
    insert("address","`id`,`barangay`,type","'$address_id','$barangay','Applicant'");

    $columns = "`id`,`username`,`firstname`,`lastname`,`email`,`password`,`address`,`contact_no`";
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact_no = $_POST['phone'];


    $values = "UUID(),'$username','$fname','$lname','$email','$password','$address_id','$contact_no'";

    insert("applicant",$columns,$values);
    sleep(4);
    // header('Location: ../index.php?success');

} catch(Exception $e) {
    sleep(4);
    echo $e;

    // header('Location: /applicant_signup.php?error='.$e->getMessage());

}
