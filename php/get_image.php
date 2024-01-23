<?php

$link = mysqli_connect("localhost", "root", "", "bpa");
$sql = "SELECT profile_img FROM vw_admin_basics WHERE id=?";
$result = mysqli_execute_query($link, $sql, [$_GET['id']]);
$image = mysqli_fetch_column($result);

header("Content-type: image/jpeg");
echo $image;