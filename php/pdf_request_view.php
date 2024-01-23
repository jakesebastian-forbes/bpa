
<?php

$document_id = $_POST['id'];
$table = $_POST['table'];
// print_r($_POST);
require "../php/db_func.php";

$condition = "`id` = '$document_id';";
$get_file_data = select($table, $condition);

if (mysqli_num_rows($get_file_data) > 0) {

    while ($row = mysqli_fetch_assoc($get_file_data)) {

        //  echo '<div style = "width:200px;height:200px">
        //  <img src="data:application/pdf;base64,'.base64_encode($row['file']).'" class="img-thumbnail" alt="This is a thumbnail image" width="150" height="100">
        //  </div>';

        if ($table == 'project_signing_docs') {
            // echo 'proof';

            // echo $row['signing_proof'];

            echo '
    <object id = "pdf_view" data="data:application/pdf;base64,' . base64_encode($row['signing_proof']) . '" 
    type="application/pdf" style="height:50vw;width:100%"></object>
';

            // echo base64_encode($row['signing_proof']);

        } else if ($table == 'documents') {
            // echo 'doc';
            // echo $row['file'];

            echo '
    <object id = "pdf_view" data="data:application/pdf;base64,' . base64_encode($row['file']) . '" 
    type="application/pdf" style="height:50vw;width:100%"></object>
';
        }
    }
}
