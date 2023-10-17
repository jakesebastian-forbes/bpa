<h2>Filling up</h2>
<div id="step_two_forms">
    <ul class="nav nav-pills mb-0 nav-fill border border-bottom-0 m-2 p-3 " id="forms" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="locational_clearance_tab" data-bs-toggle="pill" data-bs-target="#locational_clearance" type="button" role="tab" aria-controls="locational_clearance" aria-selected="true">Locational Clearance</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="building_permit_tab" data-bs-toggle="pill" data-bs-target="#building_permit" type="button" role="tab" aria-controls="building_permit" aria-selected="false">Building Premit</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="sanitary_permit_tab" data-bs-toggle="pill" data-bs-target="#sanitary_permit" type="button" role="tab" aria-controls="sanitary_permit" aria-selected="true">Sanitary Permit</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="electrical_permit_tab" data-bs-toggle="pill" data-bs-target="#electrical_permit" type="button" role="tab" aria-controls="electrical_permit" aria-selected="false">Electrical Permit</button>
        </li>

    </ul>
    <div class="tab-content border border-top-0 mt-0 m-2 p-3" id="forms_content">
        <div class="tab-pane fade show active" id="locational_clearance" role="tabpanel" aria-labelledby="locational_clearance_tab" tabindex="0">
            <!-- LOCATIONAL CLEARANCE -->
            <?php require "form_locational.php";?>
        </div>
        <div class="tab-pane fade" id="building_permit" role="tabpanel" aria-labelledby="building_permit_tab" tabindex="0">
            <!-- BUILDING PERMIT -->
            <?php require "form_unified.php";?>
        </div>

        <div class="tab-pane fade" id="sanitary_permit" role="tabpanel" aria-labelledby="sanitary_permit_tab" tabindex="0">
            <!-- SANITARY PERMIT -->
            <?php require "form_sanitary.php";?>

        </div>
        <div class="tab-pane fade" id="electrical_permit" role="tabpanel" aria-labelledby="electrical_permit_tab" tabindex="0">
            <!-- ELECTRICAL PERMIT -->
            <?php require "form_electrical.php";?>

        </div>
    </div>
</div>