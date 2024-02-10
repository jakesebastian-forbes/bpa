<style>
    #step_three_documents .nav-pills {
        overflow-x: auto;
        overflow-y: hidden;
        flex-wrap: nowrap;
    }

    #step_three_documents .nav-pills .nav-link {
        white-space: nowrap;
        color: #245a94;
    }
    #step_three_documents .nav-pills .nav-link.active {
        background-color: #245a94;
        color: white;
    }
    #step_three_documents .nav-pills .nav-link:hover {
        background-color: #245a94;
        color: white;
    }

    #documents_content .tab-pane {
        padding: 1rem;
        padding-top: 0.5rem;
    }
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



<h2 class="fw-bold">UPLOADING DOCUMENTS </h2>
<!-- <span>
    <button type="button" class="btn btn-secondary">
    Checklists
</button></span> -->




<!-- <div class="progress my-2" id="progress_bar_cont">
    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" id="progress_bar_step_3">
        <span id="percentageText"></span>
    </div>
</div> -->

<div class="progress my-2" id="progress_bar_cont">
    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" 
    aria-valuemax="100" id="progress_bar_step_3" data-tab = "step_three_tab">
      <span id="percentageText"></span>
    </div>
  </div>
<div id="step_three_reminder" style = "background-color:beige; padding:1rem">
    <button type="button" style = "float:right; background-color:transparent; border:none"
    title="Dismiss message">X</button>

    <p>
        <b>Reminder :</b> 
    As part of our ongoing commitment to the security of sensitive information, 
    we'd like to remind you of the preferred format for submitting important documents.    
    For secure submissions, please use PDF format. It ensures top-notch security, searchable text, and consistent formatting. <br>
    Your cooperation in adhering to this guideline is crucial for maintaining the highest standards of data security. 
    If you have any questions or encounter difficulties in creating PDF files, our support team is here to assist you.
    Thank you for your understanding and commitment to data security.

    </p>



</div>

<?php
// echo $doc_group;
?>

<div id="step_three_documents">

    <ul class="nav nav-pills mb-0 nav-fill border border-bottom-0 m-2 p-1 " id="documents" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="land_tab" data-bs-toggle="pill" data-bs-target="#land_document" type="button" role="tab" aria-controls="land_document" aria-selected="true">Land Document</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="plans_tab" data-bs-toggle="pill" data-bs-target="#plans_document" type="button" role="tab" aria-controls="plans_document" aria-selected="true">Plans Documents</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="costs_tab" data-bs-toggle="pill" data-bs-target="#costs_document" type="button" role="tab" aria-controls="costs_document" aria-selected="false">Costs Documents</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="additional_documents_tab" data-bs-toggle="pill" data-bs-target="#additional_documents" type="button" role="tab" aria-controls="additional_documents" aria-selected="false">Additional Documents</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="additional_permit_tab" data-bs-toggle="pill" data-bs-target="#additional_permit_document" type="button" role="tab" aria-controls="additional_permit_document" aria-selected="false">Additional Permits</button>
        </li>

    </ul>
    <div class="tab-content border border-top-0 mt-0 m-2 p-3 pt-1" id="documents_content">
        <div class="tab-pane fade show active" id="land_document" role="tabpanel" aria-labelledby="land_document_tab" tabindex="0">

            <h4 class="my-2">LAND OWNERSHIP DOCUMENTS</h4>
            <?php
            // $doc_type = "registry_of_deed";
            // $doc_type_display = "Registry of Deed";
            // $land_doc = select("document", "`project_documents` = '$project_documents' AND `type` = '$doc_type_display'");
            require "document_card.php";
            document_card($project_documents, "registry_of_deed", "Registry of Deed","required");
            document_card($project_documents, "deed_of_sale", "Deed of Sale","required");
            document_card($project_documents, "contract_of_lease", "Contract of lease","required");


            ?>

        </div>


        <div class="tab-pane fade" id="plans_document" role="tabpanel" aria-labelledby="plans_tab" tabindex="0">
            <h4 class="my-2">PROJECT PLANS</h4>
            <?php
            document_card($project_documents, "location_plan", "Location Plan","required");
            document_card($project_documents, "lot_plan", "Lot Plan", "required");
            document_card($project_documents, "specifications", "Specifications","required");
            ?>
        </div>
        <div class="tab-pane fade" id="costs_document" role="tabpanel" aria-labelledby="costs_tab" tabindex="0">
            <h4 class="my-2">PROJECT COSTS DOCUMENTS</h4>
            <?php
            document_card($project_documents, "latest_tax_declaration", "Latest Tax Declaration","required");
            document_card($project_documents, "latest_tax_receipt", "Latest Tax Receipt","required");
            document_card($project_documents, "bill_of_materials", "Bill of Materials","required");
            document_card($project_documents, "cost_estimate", "Cost Estimate","required");

            ?>
        </div>
        <div class="tab-pane fade" id="additional_documents" role="tabpanel" aria-labelledby="additional_documents_tab" tabindex="0">
            <h4 class="my-2">ADDITONAL DOCUMENTS</h4>
            <?php
            document_card($project_documents, "ra_9275", "Enforcement of R.A 9275");
            document_card($project_documents, "denr", "DENR");
            document_card($project_documents, "dpwh_clearance", "DPWH Clearance");
            document_card($project_documents, "structural_seismic_analysis", "Structural Design Analysis & Seismic Analysis");
            document_card($project_documents, "logbook", "Logbook");


            ?>
        </div>

        <div class="tab-pane fade" id="additional_permit_document" role="tabpanel" aria-labelledby="additional_permit_tab" tabindex="0">
            <h4 class="my-2">ADDITIONAL PERMITS</h4>

            <?php
            document_card($project_documents, "barangay_permit", "Barangay Permit","required");
            document_card($project_documents, "dole", "DOLE");
            document_card($project_documents, "soil_boring_test", "Soil Boring Test");
            ?>
        </div>
    </div>

</div>




<script>
    


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



    }



    $('#step_three_reminder button').on('click', function() {

        $('#step_three_reminder').hide();
        Cookies.set('step_three_reminder', 'hidden', { expires: 30 })

    })




    $(document).ready(function() {

        if(Cookies.get('step_three_reminder') == "hidden"){

        $('#step_three_reminder').hide();
        }


        



    })


    
  $(window).on("load", function(){


update_progress_bar("progress_bar_step_3", "#step_three_documents .document-card.required",
  "#step_three_documents .document-card.required > div.empty")
// Update the width of the progress bar


let all_inp_step_three = document.querySelectorAll("#step_three_documents .document-card.required");

all_inp_step_three.forEach(inp => {
  inp.addEventListener('change', function handleClick(event) {

    
update_progress_bar("progress_bar_step_3", "#step_three_documents .document-card.required",
  "#step_three_documents .document-card.required > div.empty")

  })
})



})
</script>