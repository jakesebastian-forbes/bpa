<?php

require 'gen_uuid.php';

function db_conn()
{
  return $conn = mysqli_connect("localhost", "root", "", "bpa");
}

//OPERATIONS ARE PROCEDURAL

function select($table_name, $condition)
{

  $conn = db_conn();

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    // die would end the func
  }

  if ($condition == "") {
    $sql = "SELECT * FROM $table_name";
  } else {
    $sql = "SELECT * FROM $table_name WHERE $condition";
  }

  $result = mysqli_query($conn, $sql);
  mysqli_close($conn);
  return $result;
}

function full_query($query)
{

  $conn = db_conn();

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    // die would end the func
  }

  $result = mysqli_query($conn, $query);
  mysqli_close($conn);
  return $result;
}


function insert($table_name, $column, $value)
{

  $conn = db_conn();
  // check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // set sql statement
  $sql = "INSERT INTO $table_name ($column)
  VALUES ($value)";

  // excute
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.";
    // }
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}





function update($table_name, $to_update, $condition)
{

  try {


        $conn = db_conn();
        // Check connection

        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "UPDATE $table_name SET $to_update WHERE $condition";
        echo $sql;

        if (mysqli_query($conn, $sql)) {
          echo "Record updated successfully";
        } else {
          echo "Error updating record: " . mysqli_error($conn);
          // echo $sql;
        }

        mysqli_close($conn);
  } catch (\Throwable $th) {
    throw $th;
  }
}





function delete_($table_name, $condition)
{

  $conn = db_conn();

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // sql to delete a record
  $sql = "DELETE FROM $table_name  WHERE $condition";
  echo $sql;
  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  $conn->close();
}





if (isset($_POST['action'])) {
  if ($_POST['action'] == "select") {
    select($_POST['table'], $_POST['condition']);
  }
  if ($_POST['action'] == "insert") {
    insert($_POST['table'], $_POST['column'], $_POST['value']);
  }
  if ($_POST['action'] == "update") {
    update($_POST['table'], $_POST['to_update'], $_POST['condition']);
  }
  if ($_POST['action'] == "delete") {
    delete_($_POST['table'], $_POST['condition']);
  }
  if ($_POST['action'] == "full") {
    full_query($_POST['query']);
  }
}
