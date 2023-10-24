<style>
    #step_one_common_info .input-wrapper {
        position: relative;
    }

    #step_one_common_info  select, #step_one_common_info  input {
        border: 1px solid gray;
        border-radius: 6px;
        position: relative;
        width: 100%;
        margin: 10px;
        line-height: 6ex;
        
    }
    #step_one_common_info  input {
        padding-left: 20px;
    }

    #step_one_common_info select {
        height: 6ex;
    }

    #step_one_common_info label {
        position: absolute;
        top: -0.2ex;
        z-index: 1;
        left: 2em;
        background-color: white;
        padding: 0 5px;
        font-size: 80%;

    }

    
</style>


<h2>Common Information</h2>
<div id="step_one_common_info">
    <ul class="nav nav-pills mb-0 nav-fill border border-bottom-0 m-2 p-3 py-1" id="common_info" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="applicant_information_tab" data-bs-toggle="pill" data-bs-target="#applicant_information" type="button" role="tab" aria-controls="applicant_information" aria-selected="true">Applicant/Owner Information</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="project_information_tab" data-bs-toggle="pill" data-bs-target="#project_information" type="button" role="tab" aria-controls="project_information" aria-selected="false">Project Information</button>
        </li>

    </ul>
    <div class="tab-content border border-top-0 mt-0 m-2 p-3 pt-1" id="common_info_content">
        <div class="tab-pane fade show active p-4 pt-0" id="applicant_information" role="tabpanel" aria-labelledby="applicant_information_tab" tabindex="0">


            <h4 class="row">Basic Information</h4>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="app_fname">First Name </label>
                    <input type="text" id = "app_fname" name = "app_fname">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="app_mname">Middle Name</label>
                    <input type="text" id = "app_mname" name = "app_mname">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="app_lname">Last Name </label>
                    <input type="text" id = "app_lname" name = "app_lname">
                </div>

                <div class="input-wrapper col-lg-6 col-11">
                    <label for="app_tin">Tax Identification Number</label>
                    <input type="text" id = "app_tin" name = "app_tin">
                </div>
            </div>


          
            <h4 class="row">Contact Information</h4>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="contact_number">Contact Number</label>
                    <input type="tel" id="contact_number" name="contact_number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" maxlength="11" onkeyup="valContactNumber(this.id)">
                </div>
            </div>

            <h4 class="row">Address</h4>
            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="house_number">House Number</label>
                    <input type="text" id="house_number" name="house_number">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="unit_number">Unit Number</label>
                    <input type="text" id="unit_number" name="unit_number">
                </div>
            </div>
            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="floor_number">Floor Number</label>
                    <input type="text" id="floor_number" name="floor_number">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="street_name">Street Name</label>
                    <input type="text" id="street_name" name="street_name">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="lot_number">Lot Number</label>
                    <input type="text" id="lot_number" name="lot_number">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="block_number">Block Number</label>
                    <input type="text" id="block_number" name="block_number">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="purok">Purok</label>
                    <input type="text" id="purok" name="purok">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="barangay">Barangay</label>
                    <input type="text" id="barangay" name="barangay">
                </div>
       
            </div>

       

            <div id="applicant_information_summary">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <p><b>Applicant Complete Name</b></p>
                        <p id="applicant_compelte_name" class="text-muted">First Middle Last Suffix</p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <p><b>Applicant Tax Indentification Number</b></p>
                        <p id="applicant_compelte_name" class="text-muted">87000-4321</p>
                        <p><b>Applicant Contact Information</b></p>
                        <p id="applicant_compelte_name" class="text-muted">(09)12-3456-789</p>

                    </div>
                </div>
            </div>


            


        </div>
        <div class="tab-pane fade p-4 pt-0" id="project_information" role="tabpanel" aria-labelledby="project_information_tab" tabindex="0">


            <h4 class="row">Project Information</h4>

            <div class="row">
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_house_no">House Number</label>
                    <input type="text" id="proj_house_no" name="proj_house_no">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_lot_no">Lot Number</label>
                    <input type="text" id="proj_lot_no" name="proj_lot_no">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_block_no">Block Number</label>
                    <input type="text" id="proj_block_no" name="proj_block_no">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_unit_no">Unit Number</label>
                    <input type="text" id="proj_unit_no" name="proj_unit_no">
                </div>
            </div>
            <div class="row">
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_street_name">Street</label>
                    <input type="text" id="proj_street_name" name="proj_street_name">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_purok">Purok</label>
                    <input type="text" id="proj_purok" name="proj_purok">
                </div>
            
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_barangay">Barangay</label>
                    <!-- change to dropdown -->
                    <input type="text" id="proj_barangay" name="proj_barangay">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_no_units">Number of Units</label>
                    <input type="text" id="proj_no_units" name="proj_no_units">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_no_storey">Number of Storey</label>
                    <input type="text" id="proj_no_storey" name="proj_no_storey">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_no_basement">Number of Basement</label>
                    <input type="text" id="proj_no_basement" name="proj_no_basement">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_cost">Project Cost</label>
                    <input type="text" id="project_cost" name="proj_cost">
                </div>
            </div>
            <div class="row">
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_lot_area">Lot area</label>
                    <input type="text" id="proj_lot_area" name="proj_lot_area">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="ttl_floor_area">Total Floor Area/Building Area</label>
                    <input type="text" id="ttl_floor_area" name="ttl_floor_area">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="proj_tct_no">TCT Number</label>
                    <input type="text" id="proj_tct_no" name="proj_tct_no">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="td_no">Tax Declaration Number</label>
                    <input type="text" id="td_no" name="td_no">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper">
                    <label for="proj_title">Project Title</label>
                    <input type="text" id="proj_title" name="proj_title">
                </div>
            </div>
        

            <h4>Full-time Inspector/Supervisor</h4>
            <div class="row">
                <div class="input-wrapper col-lg-4 col-11">
                    <label for="proj_inspector_name">Name</label>
                    <input type="text" id="proj_inspector_name" name="proj_inspector_name">
                </div>
                <div class="input-wrapper col-lg-4 col-11">
                    <label for="proj_inspector_prof">Profession</label>
                    <input type="text" id="proj_inspector_prof" name="proj_inspector_prof">
                </div>
                <div class="input-wrapper col-lg-4 col-11">
                    <label for="proj_prc_reg_no">PRC Registered Number</label>
                    <input type="text" id="proj_prc_reg_no" name="proj_prc_reg_no">
                </div>

            </div>
        </div>
    </div>
</div>

<script>

<?php 
$user_id = $_SESSION['user_id'];
$step_one_applicant = select('vw_applicant_basics',"applicant_id = '$user_id'");
if (mysqli_num_rows($step_one_applicant) > 0) {
    while ($row = mysqli_fetch_assoc($step_one_applicant)) {

        echo "$('#app_fname')[0].value = '" . $row['firstname'] . "';";
        echo "$('#app_mname')[0].value = '" . $row['middlename'] . "';";
        echo "$('#app_lname')[0].value = '" . $row['lastname'] . "';";
        echo "$('#app_tin')[0].value = '" . $row['tin'] . "';";
        echo "$('#email')[0].value ='".$row['email'] . "';";
        echo "$('#contact_number')[0].value ='".$row['contact_no'] . "';";
        echo "$('#house_number')[0].value ='".$row['house_no'] . "';";
        echo "$('#unit_number')[0].value ='".$row['unit_no'] . "';";
        echo "$('#floor_number')[0].value ='".$row['floor_no'] . "';";
        echo "$('#street_name')[0].value ='".$row['street_name'] . "';";
        echo "$('#lot_number')[0].value ='".$row['lot_no'] . "';";
        echo "$('#block_number')[0].value ='".$row['block_no'] . "';";
        echo "$('#purok')[0].value ='".$row['purok'] . "';";
        echo "$('#barangay')[0].value ='".$row['barangay'] . "';";

        
    }
}


$step_one_project = select('vw_project_basics',"project_id = '$project_id'");
if (mysqli_num_rows($step_one_project) > 0) {
    while ($row = mysqli_fetch_assoc($step_one_project)) {


        echo "$('#proj_house_no')[0].value = '" . $row['house_no'] . "';";
        echo "$('#proj_lot_no')[0].value = '" . $row['lot_no'] . "';";
        echo "$('#proj_block_no')[0].value = '" . $row['block_no'] . "';";
        echo "$('#proj_unit_no')[0].value = '" . $row['unit_no'] . "';";
        echo "$('#proj_street_name')[0].value = '" . $row['street_name'] . "';";
        echo "$('#proj_purok')[0].value = '" . $row['purok'] . "';";
        echo "$('#proj_barangay')[0].value = '" . $row['barangay'] . "';";
        echo "$('#proj_no_units')[0].value = '" . $row['no_of_units'] . "';";
        echo "$('#proj_no_storey')[0].value = '" . $row['no_of_storey'] . "';";
        echo "$('#proj_no_basement')[0].value = '" . $row['no_of_basement'] . "';";
        echo "$('#project_cost')[0].value = '" . $row['project_cost'] . "';";
        echo "$('#proj_lot_area')[0].value = '" . $row['lot_area'] . "';";
        echo "$('#ttl_floor_area')[0].value = '" . $row['total_floor_area'] . "';";
        echo "$('#proj_tct_no')[0].value = '" . $row['tct_no'] . "';";
        echo "$('#td_no')[0].value = '" . $row['tax_dec_no'] . "';";
        echo "$('#proj_title')[0].value = '" . $row['title'] . "';";
        echo "$('#proj_inspector_name')[0].value = '" . $row['name'] . "';";
        echo "$('#proj_inspector_prof')[0].value = '" . $row['profession'] . "';";
        echo "$('#proj_prc_reg_no')[0].value = '" . $row['prc_no'] . "';";
    





    }
}




?>



<?php

?>


</script>