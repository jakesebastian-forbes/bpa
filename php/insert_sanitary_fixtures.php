<?php

print_r($_POST);

//check if fixture exists



try {
// **establish connection
$conn = mysqli_connect("localhost", "root","","bpa");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO `f_sanitary_fixtures`(`id`,`form`, `quantity`, `cost`, `status`, `fixture`)  VALUES (UUID(),?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $form, $quantity, $cost,$status,$item);

// set parameters and execute
$form = $_POST['form_id'];
$quantity = $_POST['sanitary_fixture_qnty'];
$cost = $_POST['sanitary_fixture_cost'];
$status = $_POST['sanitary_fixture_status'];
$item = $_POST['sanitary_fixture_item'];

if($cost == "" || $cost == null ){
  echo "<script>
  alert('Please fill all necessary fields');
  </script>";
}else{


  $stmt->execute();

  echo "New records created successfully";
  
  $stmt->close();
  $conn->close();
  
}

} catch (\Throwable $th) {
    echo $th;
}


?>
