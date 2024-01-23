<?php

// require 'php/db_func.php';

// $project_documents = '2852031f-3388-4362-928c-67f7a6cfc018';
$condition = "`doc_group` = '$project_documents';";
// retrieve documents
$doc_list = select('documents', $condition);

?>

<style>
    /* table,
    th,
    td {
        border: 1px solid black;
    } */
</style>

<?php

if (mysqli_num_rows($doc_list) > 0) {
    // echo 'asdasdas';
    echo '
    <div class ="table-responsive">
        <table class = "table">
        <tr>
            <th>Type</th>
            <th>File name</th>
            <th>Date Uploaded</th>
            <th>Action</th>

        </tr>';

    while ($row = mysqli_fetch_assoc($doc_list)) {

        echo '<tr>';
        echo '<td>' . $row['type'] . '</td>';
        echo '<td class ="text-truncate" style ="max-width: 50vw">' . $row['file_name'] . '</td>';
        echo '<td>' . $row['date_uploaded'] . '</td>';

echo '<td>


<button type="button" class="btn btn-secondary white-text view-cont" 
id="view_document" data-bs-toggle="modal" data-bs-target="#modal_view"
data-doc-id = "' . $row['id'] . '" name = "data"
onclick = "request_pdf(`'.$row['id'].'`,`documents`)"
>
    VIEW
</button>


</td>';


        echo '</tr>';

    }

    echo '</table>
    </div>';

}else{
    echo "No document uploaded";

}


?>



<!-- Modal submit_confirmation -->
<div class="modal fade" id="modal_view" tabindex="-1" aria-labelledby="submit_confirmationLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="submit_confirmationLabel">Document Preview</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <p id = "bookId" hidden></p> -->
                <div id = "view"></div>
  
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>

function request_pdf(id,table) {
    // console.log("calling ajax")
    // console.log(id);
    $.ajax({
      url: "../php/pdf_request_view.php",
      type: "POST",
      cache: false,
      async: true,
      data: {
        id : id,
        table : table
      },        
      success: function(dataResult) {
        
        console.log("Success! " + dataResult);
     if(table == 'documents'){
        $("#modal_view .modal-body #view").html(dataResult);

     }else if(table == 'project_signing_docs'){
        $("#modal_view_proof .modal-body #view").html(dataResult);
        
     }


      },
      error: function(dataResult) {
        console.log("Error! " + dataResult);

      }
    });

  }

    

</script>



