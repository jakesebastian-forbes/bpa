


<!-- Modal delete_confirmation -->
<div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="confirm_deleteLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="confirm_deleteLabel">Delete Document</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <b><span id="delete_doc_type_view" style="
   width:100%;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    background:#fff;
  
    "></span></b>?</p>

                <!-- <div id = "view"></div> -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_doc_delete_cancel">Cancel</button>

                <!-- <form action="../php/.php" method="post"> -->
                <input id="delete_doc_id" name="doc_id" hidden>
                <input id="delete_doc_card" name="doc_id" hidden>
                <button type="submit" class="btn btn-danger" style="color: white;" id="doc_delete_confirm" onclick="modal_delete(this)">Confirm</button>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>

<style>
    
    .document-upload .col {
        padding: 0px;
    }

    .document-upload .col.file-info {
        padding: 1rem
    }

    .document-upload .preview-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;

    }

    .document-upload {
        margin-bottom: 1rem;
    }

    .document-upload>.file-info.row>button {
        width: auto;
        margin: 0.5rem;
    }
</style>

<script>
    
    //ajax

    function insert_document_proof(form_id) {
        console.log("insert_document_proof ajax")
        $.ajax({
            url: "../php/document_proof_insert.php",
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            async: true,

            data: new FormData($('#' + form_id)[0]),

            success: function(dataResult) {
                console.log("Success! " + dataResult);
                console.log(form_id)
                refresh_parent(form_id);


            },
            error: function(dataResult) {
                console.log("Error! " + dataResult);

            }
        });

    }



    function update_document(form_id) {
        console.log("calling ajax")
        $.ajax({
            url: "../php/document_proof_update.php",
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            async: true,

            data: new FormData($('#' + form_id)[0]),

            success: function(dataResult) {
                console.log("Success! " + dataResult);
                refresh_parent(form_id);


            },
            error: function(dataResult) {
                console.log("Error! " + dataResult);

            }
        });

    }

    

    //button sequence

    function btn_replace(doc_type) {
        console.log("inp_id : " + doc_type)
        //show update/input
        $("#update_inp_" + doc_type).css("display", "block");
        //show cancel
        $("#cancel_btn_" + doc_type).css("display", "");
        //show update
        $("#update_btn_" + doc_type).css("display", "");



        // hide replace
        $("#replace_btn_" + doc_type).css("display", "none");

        // hide delete 
        $("#delete_btn_" + doc_type).css("display", "none");


    }

    function modal_delete(self) {

        var doc_id = $("#" + self.id).data("doc-id")
        var card_cont = $("#" + self.id).data("doc-card")


        delete_ajax("project_signing_docs", "`id` = '" + doc_id + "'");
        $("#btn_doc_delete_cancel").click();
        $("#" + card_cont).load(" #" + card_cont + " > *");



    }



    //open modal
    $(document).on("click", ".modal-delete", function() {
        var file_name = $(this).data('doc-file-name');
        var file_id = $(this).data('doc-id');
        var doc_card = $(this).data('doc-card');

        $(".modal-body #delete_doc_type_view").html(file_name);
        //  $("#delete_doc_id").val(file_id);
        //  $("#delete_doc_card").val(doc_card);

        $("#doc_delete_confirm").data("doc-id", file_id)
        $("#doc_delete_confirm").data("doc-card", doc_card)





        console.log($("#doc_delete_confirm").data("doc-id"))
        console.log($("#doc_delete_confirm").data("doc-card"))


    });
</script>

<?php

// check if there is an uploaded file
// if true
// show thumbnail
// hide upload
// show delete, replace
// if false
// no thumbnail or show sample/placeholder
// show upload
// hide delete,replace


function proof_document_card($doc_group, $doc_type, $doc_type_display)
{

    // $doc_type = "registry_of_deed";
    // $doc_type_display = "Deed of Sale";
    // $doc_group = $doc_group;
    // $doc_type = $doc_type;
    // $doc_type_display = $doc_type_display;

    $sign_proof = select("project_signing_docs", "`project_signing_id` = '$doc_group' AND `type` = '$doc_type_display'");

    if (mysqli_num_rows($sign_proof) > 0) {
        while ($row_sign_proof = mysqli_fetch_assoc($sign_proof)) {
            // echo "meron";
            // print_r($row_sign_proof);

            $doc_cont = "$doc_type" . "_" . $row_sign_proof['id'];
            //doc_type has a file already uploaded
?>
            <div class="document-upload row border" id="<?php echo "card_" . $doc_type ?>">
                <div class="col with-result">
                    <div class="preview-box"><img src="../img/bg/construction_bg.webp" alt="a balloon"></div>
                </div>
                <div class="col file-info text-overflow-ellipsis">
                    <b class=""><?php echo $row_sign_proof['file_name'] ?></b>
                    <p>Type : <span><?php echo $row_sign_proof['type'] ?></span></p>
                    <p>Date Uploaded :<span><?php echo $row_sign_proof['timestamp'] ?></span></p>

                    <form action="../php/document_proof_update.php" method="post" enctype="multipart/form-data" id="<?php echo "form_update_" . $doc_type ?>">
                    <input type="text" name = "file_id" value = "<?php echo $row_sign_proof['id']?>" hidden>
                    <input type="file" name="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" capture = "environment"
                    id="<?php echo "update_inp_" . $doc_type ?>" style="display:none; padding-bottom:20px;">

                    </form>

                    <button id="<?php echo "update_btn_" . $doc_type ?>" type="button" 
                    onclick="update_document('<?php echo 'form_update_' . $doc_type ?>')"
                    style = "display:none">Update</button>



                    </form>


                    <button id="<?php echo "cancel_btn_" . $doc_type ?>" onclick="refresh_parent(this.id)" style="display:none">Cancel</button>

                    <button id="<?php echo "replace_btn_" . $doc_type ?>" onclick="btn_replace('<?php echo $doc_type ?>')">Replace</button>

                    <!-- <button id="<?php //echo "delete_btn_" . $doc_type ?>" onclick="">Delete</button> -->

                    
<button type="button" 
id="open_modal_delete" data-bs-toggle="modal" data-bs-target="#modal_delete"
data-doc-file-name = "<?php echo $row_sign_proof['file_name'] ?>"
data-doc-id = "<?php echo $row_sign_proof['id']?>"
data-doc-card = "<?php echo "card_" . $doc_type ?>"
name = "open_modal_delete" class = "modal-delete"
>

<!-- onclick = "send_ajax(`'.$row['id'].'`)" -->
    DELETE
</button>




                </div>
            </div>

        <?php
        }
    } else { // doc_type is empty

        // echo"empty";


        ?>



        
        <div class="document-upload row border" id="<?php echo "card_" . $doc_type ?>">
        <!-- <div class="card"> -->
        <div class="col empty">
                <div class="preview-box"><img src="../img/bg/construction_bg.webp" alt="a balloon"></div>
            </div>
            <div class="col file-info text-overflow-ellipsis">
                <b>No file uploaded</b>
                <p>Type : <?php echo $doc_type_display ?></p>
                <p>Date Uploaded : N/A</p>

                <form action="../php/document_proof_insert.php" method="post" enctype="multipart/form-data" id="<?php echo "form_insert_" . $doc_type ?>">
                    <input type="text" value="<?php echo $doc_group ?>" name="doc_group" hidden>
                    <input type="text" value="<?php echo $doc_type_display ?>" name="doc_type" hidden>
                    <input type="file" name="file" accept="image/jpeg,image/png,application/pdf,image/x-eps" capture = "environment"
                     id="<?php echo "insert_" . $doc_type ?>" 
                    onchange='$("#<?php echo "cancel_" . $doc_type ?>").css("display","")'
                    style = "padding-bottom:20px">
              
                
                </form>

                <button id="<?php echo "upload_btn_" . $doc_type ?>" type="button" onclick="insert_document_proof('<?php echo 'form_insert_' . $doc_type ?>')">Upload</button>


                <button id="<?php echo "cancel_" . $doc_type ?>" 
                    type = "button"
                    onclick="refresh_parent(this.id)" style="display:none">Cancel
                </button>

            </div>
        <!-- </div> -->
            
        </div>


<?php

    }
}
?>