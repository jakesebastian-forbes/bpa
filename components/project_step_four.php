<h2>Review your application/Submit</h2>


<!-- check for missing/unfilled columns, display here -->

<!-- Button trigger modal submit_confirmation-->
<button type="button" class="btn my-btn-blue white-text" id="submit_for_review_btn" data-bs-toggle="modal" data-bs-target="#submit_confirmation">
    SUBMIT FOR REVIEW
</button>


<div id="step_four_forms">
    <ul class="nav nav-pills mb-0 nav-fill border border-bottom-0 m-2 p-3 py-1" id="forms" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="locational_clearance_tab" data-bs-toggle="pill" data-bs-target="#locational_clearance" type="button" role="tab" aria-controls="locational_clearance" aria-selected="true">Locational Clearance</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link " id="building_permit_tab" data-bs-toggle="pill" data-bs-target="#building_permit" type="button" role="tab" aria-controls="building_permit" aria-selected="false">Building Permit</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="sanitary_permit_tab" data-bs-toggle="pill" data-bs-target="#sanitary_permit" type="button" role="tab" aria-controls="sanitary_permit" aria-selected="true">Sanitary Permit</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="electrical_permit_tab" data-bs-toggle="pill" data-bs-target="#electrical_permit" type="button" role="tab" aria-controls="electrical_permit" aria-selected="false">Electrical Permit</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="documents_tab" data-bs-toggle="pill" data-bs-target="#documents_table" type="button" role="tab" aria-controls="documents_table" aria-selected="false">Documents</button>
        </li>


    </ul>
    <div class="tab-content border border-top-0 mt-0 m-2 p-3" id="forms_content">
        <div class="tab-pane fade show active" id="locational_clearance" role="tabpanel" aria-labelledby="locational_clearance_tab" tabindex="0">


            <!-- LOCATIONAL CLEARANCE -->
            <?php require "form_locational.php"; ?>
        </div>

        <div class="tab-pane fade " id="building_permit" role="tabpanel" aria-labelledby="building_permit_tab" tabindex="0">

            <!-- BUILDING PERMIT -->
            <?php require "form_unified.php"; ?>

        </div>




        <div class="tab-pane fade" id="sanitary_permit" role="tabpanel" aria-labelledby="sanitary_permit_tab" tabindex="0">
            <!-- SANITARY PERMIT -->
            <?php require "form_sanitary.php"; ?>

        </div>
        <div class="tab-pane fade" id="electrical_permit" role="tabpanel" aria-labelledby="electrical_permit_tab" tabindex="0">
            <!-- ELECTRICAL PERMIT -->
            <?php require "form_electrical.php"; ?>

        </div>
        <div class="tab-pane fade" id="documents_table" role="tabpanel" aria-labelledby="documents_table" tabindex="0">
            <!-- ELECTRICAL PERMIT -->
            <?php require "document_check.php"; ?>

        </div>
        


    </div>
</div>




<!-- Modal submit_confirmation -->
<div class="modal fade" id="submit_confirmation" tabindex="-1" aria-labelledby="submit_confirmationLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="submit_confirmationLabel">Confirm submission</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to submit your project for review? <br>
                <b>This will lock your project temporarily - you will not be able to make changes</b>
                while we send your forms and documents to designated departments.
                Please make sure everything is filled and checked before proceeding.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, I'll do it later</button>

                <form action="../php/project_submit_review.php" method="post">
                    <input name="project_id" value="<?php echo $project_id ?>" hidden>
                    <button type="submit" class="btn btn-primary">Submit for review</button>
                </form>
            </div>
        </div>
    </div>
</div>