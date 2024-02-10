<?php

// require 'php/db_func.php';

// $project_documents = '2852031f-3388-4362-928c-67f7a6cfc018';
$condition = "`doc_group` = '$project_documents';";
// retrieve documents
$doc_list = select('documents', $condition);

?>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
  /* table,
    th,
    td {
        border: 1px solid black;
    } */
</style>

<div class="row mb-3">
  <div class="col-lg-6 col-12">

  </div>
  <div class="col-lg-6 col-12 d-flex justify-content-end">
    <div class="input-group">
      <input type="text" class="form-control border-dark w-75" id="searchInput" placeholder="Search...">
      <button class="btn btn-secondary" type="button"><span><i class="bi bi-search"></i></span></button>
    </div>

  </div>

</div>




<?php

if (mysqli_num_rows($doc_list) > 0) {
  // echo 'asdasdas';
  echo '
    <div class ="table-responsive">
        <table class = "table" id ="table_documents">
        <tr>
            <th>Type</th>
            <th>File name</th>
            <th>Date Uploaded</th>
            <th>Action</th>

        </tr>';

  while ($row = mysqli_fetch_assoc($doc_list)) {

    $date = formatDate($row['date_uploaded']);

    echo '<tr>';
    echo '<td>' . $row['type'] . '</td>';
    echo '<td class ="text-truncate" style ="max-width: 50vw">' . $row['file_name'] . '</td>';
    echo '<td>' . $date . '</td>';

    echo '<td>


<button type="button" class="btn btn-secondary white-text view-cont" 
 data-bs-toggle="modal" data-bs-target="#modal_view"
data-doc-id = "' . $row['id'] . '" name = "data"
onclick = "request_pdf(`' . $row['id'] . '`,`documents`)"
>
    View
</button>




<button type="button" class="btn btn-primary white-text document-comment" 
 data-bs-toggle="modal" data-bs-target="#modal_comment_document"
data-doc-id = "' . $row['id'] . '" name = "comment"
 hidden>
    Comment
</button>


</td>';




    echo '</tr>';
  }

  echo '</table>
    </div>';
} else {
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
        <div id="view"></div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  function request_pdf(id, table) {
    // console.log("calling ajax")
    // console.log(id);
    $.ajax({
      url: "../php/pdf_request_view.php",
      type: "POST",
      cache: false,
      async: true,
      data: {
        id: id,
        table: table
      },
      success: function(dataResult) {

        console.log("Success! " + dataResult);
        if (table == 'documents') {
          $("#modal_view .modal-body #view").html(dataResult);

        } else if (table == 'project_signing_docs') {
          $("#modal_view_proof .modal-body #view").html(dataResult);

        }


      },
      error: function(dataResult) {
        console.log("Error! " + dataResult);

      }
    });

  }


  const doc_comment_btn = document.querySelectorAll('#table_documents .document-comment');

  doc_comment_btn.forEach(inp => {
    inp.addEventListener('click', function handleClick(event) {
      // console.log($(this).data('doc-id'))

      $("#modal_comment_document .modal-body #document_comments").html('');


      let doc_id = $(this).data('doc-id')

      console.log(doc_id);
      // console.log($("#"+this.id).data('doc-id'))

      $.ajax({
        url: "../php/document_get_comment.php",
        type: "POST",
        cache: false,
        async: true,
        data: {
          doc_id: doc_id,
          // table : table
        },
        success: function(dataResult) {

          console.log("Result length : ", dataResult.length)
          console.log(dataResult)

          let document_comment = $("#modal_comment_document .modal-body #document_comments");


          $("#comment_box_inp").data("doc-id",doc_id)

          if (dataResult.length > 0) {

            for (let x = 0; x < dataResult.length; x++) {

              console.log("id :", x, dataResult[x].id)
              console.log("comment :", dataResult[x].comment)
              console.log("full_name :", dataResult[x].full_name)
              console.log("doc-id :", dataResult[x].doc_id)
              console.log("timestamp :", dataResult[x].timestamp)

              // let doc_comment = "doc_comment_"+dataResult[x].id;

              document_comment.append('<div class="comment row">' +
                '<div class="admin col-5">' +
                '<b>' + dataResult[x].full_name + '</b>' +
                '</div>' +
                '<div class="comment col" style="text-wrap: nowrap;overflow: hidden;text-overflow: ellipsis;margin-right: 20px;">' +
                '<p>' + dataResult[x].comment + '</p>' +
                '</div></div>');


            }



          } else {
            console.log("no comments")
            console.log(dataResult)
            document_comment.append("<p>No comments.</p>");


          }

        

  

          const comments = document.querySelectorAll('#document_comments .comment.col');

          comments.forEach(inp => {
            inp.addEventListener('click', function handleClick(event) {
              // $("#" + this).css("text-wrap", "balance")

              $(this).css("text-wrap", "balance");


            })
          })

        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log("AJAX Error:");
          console.log("Status: " + textStatus);
          console.log("Error: " + errorThrown);
          console.log("Response: " + jqXHR.responseText);
        }

      });


    })

  })


  
 
</script>