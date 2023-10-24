<style>
    #step_three_documents .nav-pills {
        overflow-x: auto;
        overflow-y: hidden;
        flex-wrap: nowrap;
    }

    #step_three_documents .nav-pills .nav-link {
        white-space: nowrap;
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

    #documents_content .tab-pane {
        padding: 1rem;
        padding-top:0.5rem;
    }

    .document-upload {
        margin-bottom: 1rem;
    }

    .document-upload>.file-info.row>button {
        width: auto;
        margin: 0.5rem;
    }
</style>


<h2>Uploading Necessary Documents</h2>
<!-- <p>Reminder : </p> -->
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

            <h4>LAND OWNERSHIP DOCUMENTS</h4>
            <?php
            // $doc_type = "registry_of_deed";
            // $doc_type_display = "Registry of Deed";
            // $land_doc = select("document", "`project_documents` = '$project_documents' AND `type` = '$doc_type_display'");
            require "document_card.php";
            document_card($project_documents, "registry_of_deed", "Registry of Deed");
            document_card($project_documents, "deed_of_sale", "Deed of Sale");
            document_card($project_documents, "contract_of_lease", "Contract of lease");


            ?>

        </div>


        <div class="tab-pane fade" id="plans_document" role="tabpanel" aria-labelledby="plans_tab" tabindex="0">
           <h4>PROJECT PLANS</h4> 
            <?php
            document_card($project_documents, "location_plan", "Location Plan");
            document_card($project_documents, "lot_plan", "Lot Plan");
            document_card($project_documents, "specifications", "Specifications");
            ?>
        </div>
        <div class="tab-pane fade" id="costs_document" role="tabpanel" aria-labelledby="costs_tab" tabindex="0">
            <h4>PROJECT COSTS DOCUMENTS</h4> 
            <?php
            document_card($project_documents, "latest_tax_declaration", "Latest Tax Declaration");
            document_card($project_documents, "latest_tax_receipt", "Latest Tax Receipt");
            document_card($project_documents, "bill_of_materials", "Bill of Materials");
            document_card($project_documents, "cost_estimate", "Cost Estimate");

            ?>
        </div>
        <div class="tab-pane fade" id="additional_documents" role="tabpanel" aria-labelledby="additional_documents_tab" tabindex="0">
           <h4>ADDITONAL DOCUMENTS</h4> 
            <?php
            document_card($project_documents, "ra_9275", "Enforcement of R.A 9275");
            document_card($project_documents, "denr", "DENR");
            document_card($project_documents, "dpwh_clearance", "DPWH Clearance");
            document_card($project_documents, "structural_seismic_analysis", "Structural Design Analysis & Seismic Analysis");
            document_card($project_documents, "logbook", "Logbook");


            ?>
        </div>

        <div class="tab-pane fade" id="additional_permit_document" role="tabpanel" aria-labelledby="additional_permit_tab" tabindex="0">
            <h4>ADDITIONAL PERMITS</h4>

            <?php
            document_card($project_documents, "barangay_permit", "Barangay Permit");
            document_card($project_documents, "dole", "DOLE");
            document_card($project_documents, "soil_boring_test", "Soil Boring Test");
            ?>
        </div>
    </div>

</div>

<script>
    function refresh(id) {
        // $('#' + id).load('../components/document_card.php').fadeIn("slow");
        // $("#"+id ).load(window.location.href + " #"+id );

        console.log("refresh");
        console.log("id : " + id)
        card_cont = $("#" + id).parent().parent()[0].id;
        console.log("card_cont" + card_cont)
        // $("#" + id).load(" #" + id + " > *");
        $("#" + card_cont).load(" #" + card_cont + " > *");
    }

    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }


    function insert_file(column, value, self) {

        //format variables

        let file_upload_btn = $("#" + self.id); //element id
        let file_name = file_upload_btn[0].files[0].name; //file name

        console.log("FILE NAME :" + file_name);
        value = value + "'" + self.value + "','" + file_name + "'"; //value to be inserted

        //ajax call
        insert_ajax("documents", column, value);

        //hide file upload button
        console.log("upload")

        file_upload_btn.css("display", "none");

        // console.log(id.slice(id.indexOf('_') + 1));
        //show delete and replace
        console.log("show")
        console.log("refresh");
        refresh(self.id)


    }


    function update_file(id, doc_type, self) {

        console.log("update_file : " + id)

        try {
            // console.log(self.value)

            result = full_ajax("UPDATE `documents` SET `file_name`='" + self.files[0].name + "',`file`='" + self.value + "',`date_uploaded`=CURRENT_DATE() WHERE `id` = '" + id + "'")

            if (result == "1") {
                console.log("RESULTTT" + result)
            }

        } catch (error) {
            console.log(error);
        }

        sleep(5000);
        // console.log(refresh)
        refresh(self.id);

    }



    function upload_btn(doc_type) {
        $("#insert_" + doc_type).css("display", "");
        $("#upload_btn_" + doc_type).css("display", "none");
        // console.log("oyy");

    }

    function replace_btn(doc_type) {
        $("#replace_" + doc_type).css("display", "none");
        $("#delete_" + doc_type).css("display", "none");
        $("#update_" + doc_type).css("display", "");

    }




    function delete_btn(doc_type, id, self) {
        //note : add a confirmation modal

        try {
            console.log(doc_type)
            console.log("delete_id : " + id)
            result = full_ajax("DELETE FROM `documents` WHERE `type` = '" + doc_type + "' AND `id` = '" + id + "'");

            if (result == "1") {
                console.log("RESULTTT" + result)
            }

        } catch (error) {
            console.log(error);
        }

        sleep(5000);
        // refresh(doc_type + "_" + id);
        refresh(self.id);

    }
</script>