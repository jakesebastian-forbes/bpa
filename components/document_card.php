
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
    .document-card .col {
        padding: 0px;
    }

    .document-card .col.file-info {
        padding: 1rem
    }

    .document-card .preview-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;

    }

    .document-card {
        margin-bottom: 1rem;
        height: fit-content;
        
    }

    .document-card>.file-info.row>button {
        width: auto;
        margin: 0.5rem;
    }

    .preview-box{
        height: inherit;
    }

    .document-card.required::after{
        content:"REQUIRED" !important;
    }
</style>

<script type="text/javascript" src="https://unpkg.com/pdfjs-dist@2.9.359/build/pdf.js"></script>

<script>
    //ajax

    function insert_document(form_id) {
        console.log("calling ajax")
        $.ajax({
            url: "../php/document_insert.php",
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            async: true,

            data: new FormData($('#' + form_id)[0]),

            success: function(dataResult) {
                console.log("Success! " + dataResult);
                refresh_parent(form_id);
                // refresh_parent

                notifySuccess("Success","Document has been uploaded successfully.");
        
                update_progress_bar("progress_bar_step_3", "#step_three_documents .document-card.required",
  "#step_three_documents .document-card.required > div.empty")

            },
            error: function(dataResult) {
                console.log("Error! " + dataResult);

            }
        });


    }



    function update_document(form_id) {
        console.log("calling ajax")
        $.ajax({
            url: "../php/document_update.php",
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
                notifySuccess("Success","Document has been updated successfully.");

                update_progress_bar("progress_bar_step_3", "#step_three_documents .document-card.required",
  "#step_three_documents .document-card.required > div.empty")


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


        delete_ajax("documents", "`id` = '" + doc_id + "'");
        $("#btn_doc_delete_cancel").click();
        $("#" + card_cont).load(" #" + card_cont + " > *");

        notifySuccess("Success","Document has been deleted successfully.");

        update_progress_bar("progress_bar_step_3", "#step_three_documents .document-card.required",
  "#step_three_documents .document-card.required > div.empty")


    }


    function generate_thumbnail(blob_data, canvas_id) {
            let pdfBlobData = blob_data;

            // console.log(pdfBlobData);

            // Initialize PDF.js
            pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://unpkg.com/pdfjs-dist@2.9.359/build/pdf.worker.min.js';

            // Load PDF from blob data
            pdfjsLib.getDocument({
                data: atob(pdfBlobData)
            }).promise.then(pdfDoc => {
                // Fetch the first page
                return pdfDoc.getPage(1); // 1 indicates the first page
            }).then(page => {
                // Set up the canvas
                let canvas = document.getElementById(canvas_id);
                let context = canvas.getContext('2d');
                let viewport = page.getViewport({
                    scale: 0.80
                });
                // canvas.width = viewport.width;
                canvas.width = 400;
                // canvas.height = viewport.height/2;
                canvas.height = 180;
 // Calculate vertical center position
 let centerY = (canvas.height - viewport.height) / 2;


                // Render PDF page to canvas
                let renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };

                
        // Translate the context to center vertically
        context.translate(0, centerY);

                return page.render(renderContext).promise;
            }).then(() => {
                // Convert the canvas to base64 data URL for further use
                let canvas = document.getElementById(canvas_id);
                let imageDataUrl = canvas.toDataURL('image/png');
                // console.log('Thumbnail data URL:', imageDataUrl);
            }).catch(error => {
                console.error('Error:', error);
            });

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


           
    document.addEventListener("DOMContentLoaded", () => {
        
        // Iterate over your document cards and generate thumbnails for existing PDFs
document.querySelectorAll('.document-card').forEach(card => {
    const cardId = card.id;
    const docType = cardId.split('_')[1];
    // console.log(docType)
    const canvas = card.querySelector('.preview-box canvas');

    if (canvas) {
        // Check if the card represents an existing document
        const fileInput = card.querySelector(`#${docType}_update_inp`);
        if (fileInput) {
            const file = fileInput.files[0];
            if (file) {
                const fileReader = new FileReader();
                fileReader.onload = function (event) {
                    const pdfData = new Uint8Array(event.target.result);
                    generateThumbnail(canvas, pdfData);
                };
                fileReader.readAsArrayBuffer(file);
            }
        }
    }
});

        })



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


function document_card($doc_group, $doc_type, $doc_type_display,$required=null){

    // $doc_type = "registry_of_deed";
    // $doc_type_display = "Deed of Sale";
    $doc_group = $doc_group;
    $doc_type = $doc_type;
    $doc_type_display = $doc_type_display;
    $required = $required;

    // echo "<script>console.log('".$required."')</script>";

    $land_doc = select("documents", "`doc_group` = '$doc_group' AND `type` = '$doc_type_display'");

    if (mysqli_num_rows($land_doc) > 0) {
        while ($row_land_doc = mysqli_fetch_assoc($land_doc)) {

            $doc_cont = "$doc_type" . "_" . $row_land_doc['id'];
            //doc_type has a file already uploaded

?>
            <div class="document-card row border p-3 <?php echo $required ? 'required' : ''; ?>" id="<?php echo "card_" . $doc_type ?>" name = "document_card">
                <div class="col-5 p-0 with-result preview-box">

                <canvas id = "<?php echo "preview_" . $doc_type ?>" style = "object-fit: cover;object-position: center;"></canvas>

                </div>
                <div class="col file-info text-overflow-ellipsis">
                    <b class=""><?php echo $row_land_doc['file_name'] ?></b>
                    <p required>Type : <span><?php echo $row_land_doc['type'] ?></span></p>
                    <p>Date Uploaded :<span><?php echo $row_land_doc['date_uploaded'] ?></span></p>

                    <form action="../php/document_update.php" method="post" enctype="multipart/form-data" id="<?php echo "form_update_" . $doc_type ?>">
                        <input type="text" name="file_id" value="<?php echo $row_land_doc['id'] ?>" hidden>
                        <input type="file" name="file" accept=".pdf" id="<?php echo "update_inp_" . $doc_type ?>" style="display:none; padding-bottom:20px;">

                    </form>

                    <button class="btn btn-warning" id="<?php echo "update_btn_" . $doc_type ?>" type="button" onclick="update_document('<?php echo 'form_update_' . $doc_type ?>')" style="display:none;">Update</button>



                    </form>


                    <button id="<?php echo "cancel_btn_" . $doc_type ?>" onclick="refresh_parent(this.id)" style="display:none; " class="btn btn-secondary">Cancel</button>

                    <button id="<?php echo "replace_btn_" . $doc_type ?>" onclick="btn_replace('<?php echo $doc_type ?>')" class="btn btn-success">Replace</button>

                    <!-- <button id="<?php //echo "delete_btn_" . $doc_type 
                                        ?>" onclick="">Delete</button> -->


                    <button type="button" class="btn btn-danger modal-delete"  data-bs-toggle="modal" data-bs-target="#modal_delete" 
                    data-doc-file-name="<?php echo $row_land_doc['file_name'] ?>" 
                    data-doc-id="<?php echo $row_land_doc['id'] ?>" data-doc-card="<?php echo "card_" . $doc_type ?>" 
                    name="open_modal_delete" >

                        <!-- onclick = "send_ajax(`'.$row['id'].'`)" -->
                        Delete
                    </button>




                </div>


                <script>

$(document).ready(function() {
 

})

// console.log("thumbnail : <?php //echo "preview_" . $doc_type ?>")

generate_thumbnail("<?php echo base64_encode($row_land_doc['file']) ?>",'<?php echo "preview_" . $doc_type ?>');
        </script>

            </div>


        <?php
        }
    } else { // doc_type is empty
        ?>



        <div class="document-card row border <?php echo $required?>" id="<?php echo "card_" . $doc_type ?>" name = "document_card">
            <div class="col-5 p-0 empty preview-box text-center">
            <img src="../img/icon/pdf_upload.png" alt="a balloon" style = "height:200px;width:auto">
                <!-- <div class="preview-box"></div> -->
            </div>
            <div class="col file-info text-overflow-ellipsis">
                <b>No file uploaded</b>
                <p>Type : <?php echo $doc_type_display ?></p>
                <p>Date Uploaded : N/A</p>

                <form action="../php/document_insert.php" method="post" enctype="multipart/form-data" id="<?php echo "form_insert_" . $doc_type ?>">
                    <input type="text" value="<?php echo $doc_group ?>" name="doc_group" hidden>
                    <input type="text" value="<?php echo $doc_type_display ?>" name="doc_type" hidden>
                    <input type="file" name="file" accept=".pdf" id="<?php echo "insert_" . $doc_type ?>" onchange='$("#<?php echo "cancel_" . $doc_type ?>").css("display","")' style="padding-bottom:20px">


                </form>

                <button id="<?php echo "upload_btn_" . $doc_type ?>" type="button" onclick="insert_document('<?php echo 'form_insert_' . $doc_type ?>')" style="" class="btn my-btn-blue">Upload</button>


                <button id="<?php echo "cancel_" . $doc_type ?>" type="button" onclick="refresh_parent(this.id)" style="display:none" class="btn btn-secondary">Cancel
                </button>


            </div>
        </div>


<?php

    }
}
?>