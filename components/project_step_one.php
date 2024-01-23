<style>
    #step_one_common_info .input-wrapper {
        position: relative;
    }

    #step_one_common_info .nav-fill .nav-link {
        white-space: nowrap;
        color: #245a94;
    }

    #step_one_common_info .nav-fill .nav-link.active {
        background-color: #245a94;
        color: white;
    }

    #step_one_common_info .nav-fill {
        overflow-x: auto;
        overflow-y: hidden;
        flex-wrap: nowrap;
    }

    #step_one_common_info select,
    #step_one_common_info input {
        border: 1px solid gray;
        border-radius: 6px;
        position: relative;
        width: 100%;
        margin: 10px;
        line-height: 6ex;

    }

    #step_one_common_info input {
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

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #245a94 !important;
    }
</style>


<h2 class="fw-bold">COMMON INFORMATION</h2>
<!-- <h1><span id="step_percent"></span>%</h1> -->
<div class="progress" id="progress_bar_cont">
    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" id="progress_bar_step_1">
        <span id="percentageText"></span>
    </div>
</div>


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

            <div id="app_basic_info">

                <div class="row">
                    <div class="d-flex">
                        <h4 class="">BASIC INFORMATION</h4>
                        <a href="applicant_account_setting.php" class="mx-2 my-1"><span style="font-size: 15px;">Edit</span></a>
                    </div>

                </div>

                <div class="row">
                    <div class="input-wrapper col-lg-6 col-11" >
                        <label for="app_fname">First Name </label>
                        <input type="text" id="app_fname" name="app_fname" disabled>
                    </div>
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="app_mname">Middle Name</label>
                        <input type="text" id="app_mname" name="app_mname" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="app_lname">Last Name </label>
                        <input type="text" id="app_lname" name="app_lname" disabled>
                    </div>

                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="app_tin" class="required">Tax Identification Number</label>
                        <input type="text" id="app_tin" name="app_tin" data-column="tin" required placeholder="Tax Identification Number">
                    </div>
                </div>



                <h4 class="row">CONTACT INFORMATION</h4>

                <div class="row">
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="email">Email<span class="required"></span></label>
                        <input type="text" id="email" name="email" disabled required>
                    </div>
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="contact_number">Contact Number<span class="required"></span></label>
                        <input type="tel" id="contact_number" name="contact_number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" maxlength="11" disabled onkeyup="valContactNumber(this.id)" required>
                    </div>
                </div>
            </div>

            <?php

            $applicant = select("applicant", "id = '$_SESSION[user_id]'");

            $applicant_address;
            if (mysqli_num_rows($applicant) > 0) {

                if ($row = mysqli_fetch_assoc($applicant)) {

                    $applicant_address = $row['address'];
                }
            }
            ?>

            <h4 class="row">Address</h4>
            <div id="applicant_inp_address" data-address-id="<?php echo $applicant_address; ?>">
                <div class="row">
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="house_number">House Number</label>
                        <input type="number" id="house_number" name="house_number" data-column='house_no' placeholder="House Number">
                    </div>
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="unit_number">Unit Number</label>
                        <input type="number" id="unit_number" name="unit_number" data-column='unit_no' placeholder="Unit Number">
                    </div>
                </div>
                <div class="row">
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="floor_number">Floor Number</label>
                        <input type="number" id="floor_number" name="floor_number" data-column='floor_no' placeholder="Floor Number">
                    </div>
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="street_name" >Street Name<span class="required"></span></label>
                        <input type="text" required id="street_name" name="street_name" data-column="street_name" placeholder="Street Name" onclick="validateInput(this)" >
                    </div>
                </div>

                <div class="row">
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="lot_number">Lot Number</label>
                        <input type="number" id="lot_number" name="lot_number" data-column='lot_no' placeholder="Lot Number">
                    </div>
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="block_number">Block Number</label>
                        <input type="number" id="block_number" name="block_number" data-column='block_no' placeholder="Block Number">
                    </div>
                </div>
\
                <div class="row">
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="purok">Purok</label>
                        <input type="text" pattern="[A-Za-z]+" id="purok" name="purok" data-column='purok' placeholder="Purok">
                    </div>
                    <div class="input-wrapper col-lg-6 col-11">
                        <label for="barangay" class="required">Barangay</label>
                        <input type="text" pattern="[A-Za-z]+" id="barangay" name="barangay" data-column='barangay' required placeholder="Barangay">
                    </div>

                </div>
            </div>


            <div id="applicant_information_summary">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <p><b>Applicant Complete Name</b></p>
                        <p id="summ_app_name" class="text-muted">First Middle Last Suffix</p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <p><b>Applicant Tax Indentification Number</b></p>
                        <p id="summ_app_tin" class="text-muted">87000-4321</p>
                        <p><b>Applicant Contact Information</b></p>
                        <p id="summ_app_contact" class="text-muted">(09)12-3456-789</p>

                    </div>
                </div>
            </div>
        </div>





        <div class="tab-pane fade p-4 pt-0" id="project_information" role="tabpanel" aria-labelledby="project_information_tab" tabindex="0">

            <!--  //**PROJECT BASIC */ -->

            <div id="proj_basic">
                <h4 class="row">PROJECT BASIC INFORMATION</h4>

                <div class="row">
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_no_units">Number of Units<span class="required"></span></label>
                        <input type="number" id="proj_no_units" name="proj_no_units" data-column="no_of_units" required>
                    </div>
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_no_storey">Number of Storey<span class="required"></span></label>
                        <input type="number" id="proj_no_storey" name="proj_no_storey" data-column="no_of_storey" required>
                    </div>
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_no_basement">Number of Basement</label>
                        <input type="number" id="proj_no_basement" name="proj_no_basement" data-column="no_of_basement">
                    </div>
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_cost">Project Cost<span class="required"></span></label>
                        <input type="number" id="project_cost" name="proj_cost" data-column="project_cost" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_lot_area">Lot area (in square meters)<span class="required"></span></label>
                        <input type="number" id="proj_lot_area" name="proj_lot_area" data-column="lot_area" required>
                    </div>
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="ttl_floor_area" style="overflow:hidden;height:1rem">Total Floor Area/Building Area (in square meters)
                            <span class="required"></span></label>
                        <input type="number" id="ttl_floor_area" name="ttl_floor_area" data-column="total_floor_area" required>
                    </div>
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_tct_no">TCT Number<span class="required"></span></label>
                        <input type="text" id="proj_tct_no" name="proj_tct_no" data-column="tct_no" required>
                    </div>
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="td_no">Tax Declaration Number<span class="required"></span></label>
                        <input type="text" id="td_no" name="td_no" data-column="tax_dec_no" required>
                    </div>
                </div>

                <div class="row">
                    <div class="input-wrapper">
                        <label for="proj_title">Project Title<span class="required"></span></label>
                        <input type="text" id="proj_title" name="proj_title" data-column="title" required>
                    </div>
                </div>

            </div>
            <!-- //**PROJECT BASIC END*/ -->

            <!-- //**PROJECT ADDRESS */ -->

            <div id="proj_address">
                <h4 class="row">Project Address</h4>

                <div class="row">
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_house_no">House Number</label>
                        <input type="number" id="proj_house_no" name="proj_house_no" data-column="house_no">
                    </div>
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_lot_no">Lot Number</label>
                        <input type="number" id="proj_lot_no" name="proj_lot_no" data-column="lot_no">
                    </div>
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_block_no">Block Number</label>
                        <input type="number" id="proj_block_no" name="proj_block_no" data-column="block_no">
                    </div>
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_unit_no">Unit Number</label>
                        <input type="number" id="proj_unit_no" name="proj_unit_no" data-column="unit_no">
                    </div>
                </div>
                <div class="row">
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_street_name">Street<span class="required"></span></label>
                        <input type="text" id="proj_street_name" name="proj_street_name" data-column="street_name" required>
                    </div>
                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_purok">Purok</label>
                        <input type="text" id="proj_purok" name="proj_purok" data-column="purok">
                    </div>

                    <div class="input-wrapper col-lg-3 col-md-5 col-11">
                        <label for="proj_barangay">Barangay<span class="required"></span></label>
                        <!-- change to dropdown -->
                        <input type="text" pattern="[A-Za-z]+" id="proj_barangay" name="proj_barangay" data-column="barangay" required>
                    </div>
                </div>
            </div>
            <!-- //**PROJECT ADDRESS END */ -->

            <!-- //**PROJECT INSPECTOR  */ -->

            <div id="proj_inspector">
                <h4>Full-time Inspector/Supervisor</h4>
                <div class="row">
                    <div class="input-wrapper col-lg-4 col-11">
                        <label for="proj_inspector_name">Name</label>
                        <input type="text" id="proj_inspector_name" name="proj_inspector_name" data-column="name">
                    </div>
                    <div class="input-wrapper col-lg-4 col-11">
                        <label for="proj_inspector_prof">Profession</label>
                        <input type="text" id="proj_inspector_prof" name="proj_inspector_prof" data-column="profession">
                    </div>
                    <div class="input-wrapper col-lg-4 col-11">
                        <label for="proj_prc_reg_no">PRC Registered Number</label>
                        <input type="text" id="proj_prc_reg_no" name="proj_prc_reg_no" data-column="prc_no">
                    </div>

                </div>

            </div>

            <!-- //**PROJECT INSPECTOR END */ -->

        </div>
    </div>
</div>

<script>
    $("#app_basic_info input[disabled]").attr("title", "Disabled. You can edit this information in your profile.")


    <?php
    // **retrival applicant

    $user_id = $_SESSION['user_id'];
    $step_one_applicant = select('vw_applicant_basics', "applicant_id = '$user_id'");
    if (mysqli_num_rows($step_one_applicant) > 0) {
        while ($row = mysqli_fetch_assoc($step_one_applicant)) {

            echo "$('#app_fname')[0].value = '" . $row['firstname'] . "';";
            echo "$('#app_mname')[0].value = '" . $row['middlename'] . "';";
            echo "$('#app_lname')[0].value = '" . $row['lastname'] . "';";
            if ($row['tin'] == "" || $row['tin'] == null) {
                echo "$('#app_tin')[0].value = 'Undefined';";
            } else {
                echo "$('#app_tin')[0].value = '" . $row['tin'] . "';";
            }
            echo "$('#email')[0].value ='" . $row['email'] . "';";
            echo "$('#contact_number')[0].value ='" . $row['contact_no'] . "';";
            echo "$('#house_number')[0].value ='" . $row['house_no'] . "';";
            echo "$('#unit_number')[0].value ='" . $row['unit_no'] . "';";
            echo "$('#floor_number')[0].value ='" . $row['floor_no'] . "';";
            echo "$('#street_name')[0].value ='" . $row['street_name'] . "';";
            echo "$('#lot_number')[0].value ='" . $row['lot_no'] . "';";
            echo "$('#block_number')[0].value ='" . $row['block_no'] . "';";
            echo "$('#purok')[0].value ='" . $row['purok'] . "';";
            echo "$('#barangay')[0].value ='" . $row['barangay'] . "';";
        }
    }


    // **retrival project

    $step_one_project = select('vw_project_basics', "address = '$project_address'");
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


    function update_progress_bar(id,inp_ttl_query,inp_emp_query) {

            //get percentage of filled required
        //total
        let inp_ttl = $(""+inp_ttl_query).length

        //empty
        let inp_emp = $(""+inp_emp_query).filter(function() {
            return !$(this).val();
        }).length;

        let completion_percent = ((inp_ttl - inp_emp) / inp_ttl) * 100;

        $("#" + id).width(completion_percent + "%");

        // Change the color based on the completion percentage
        if (completion_percent < 30) {
            $("#" + id).css("background-color", "#FF0000"); // Red
        } else if (completion_percent < 70) {
            $("#" + id).css("background-color", "#FFA500"); // Orange
        } else {
            $("#" + id).css("background-color", "#4CAF50"); // Green
        }
        // Update the text content with the rounded percentage
        $("#" + id).text(completion_percent.toFixed(0) + "%");

    }

    //do after document is loaded
    $(window).on("load", function() {

    

        update_progress_bar("progress_bar_step_1","#step_one_common_info input","#step_one_common_info input")
        // Update the width of the progress bar


        let all_inp_step_one = document.querySelectorAll('#step_one_common_info input');

        all_inp_step_one.forEach(inp => {
            inp.addEventListener('change', function handleClick(event) {

        update_progress_bar("progress_bar_step_1","#step_one_common_info input","#step_one_common_info input")

            })

})


        //summary
        $("#summ_app_name").html($("#app_fname")[0].value + " " + $("#app_mname")[0].value + " " + $("#app_lname")[0].value)
        $("#summ_app_tin").html($("#app_tin")[0].value)
        $("#summ_app_contact").html($("#contact_number")[0].value)


        //*get inputs from app_address
        const app_address_inp = document.querySelectorAll('#applicant_inp_address input');

        app_address_inp.forEach(inp => {
            inp.addEventListener('change', function handleClick(event) {

                let column = $("#" + this.id).data("column");
                let value = $("#" + this.id).val();
                // let address_id =  `id = '`+$("#applicant_inp_address").data('address-id')+`'` ;
                let address_id = `id = '<?php echo $applicant_address; ?>'`;

                // inp.setAttribute('style', 'background-color: yellow;');


                try {
                    update_ajax('address', column, value, address_id);

                } catch (error) {
                    console.log(error);

                }

            });
        });


        $("#app_tin").on("change", function() { //*update app_tin

            let column = $("#" + this.id).data("column");
            let value = $("#" + this.id).val();
            let address_id = `id = '<?php echo $_SESSION['user_id'] ?>'`;

            try {

                update_ajax('applicant', column, value, address_id);

                if (value == "" || value == null) {
                    $("#summ_app_tin").html("Undefined")

                } else {
                    console.log(value)
                    $("#summ_app_tin").html(value)

                }

            } catch (error) {
                console.log(error);

            }
        })



        //*get inputs from proj_basic_inp
        var proj_basic_inp = document.querySelectorAll('#proj_basic input');

        proj_basic_inp.forEach(inp => {
            inp.addEventListener('change', function handleClick(event) {

                let column = $("#" + this.id).data("column");
                let value = $("#" + this.id).val();

                let project_id = `id = '<?php echo $project_id; ?>'`;

                try {

                    if (column == "title") {
                        if (value == "" || value == null) {
                            value = "Untitled";
                            $("#" + this.id).val(value);
                        }
                        $("#inp_project_name").val(value);

                    }
                    update_ajax('project', column, value, project_id);

                } catch (error) {
                    console.log(error);

                }

            });
        }); //**proj_basic_inp END */


        // **PROJ ADDRESS
        var proj_address_inp = document.querySelectorAll('#proj_address input');

        proj_address_inp.forEach(inp => {
            inp.addEventListener('change', function handleClick(event) {

                let column = $("#" + this.id).data("column");
                let value = $("#" + this.id).val();

                let project_address_id = `id = '<?php echo $project_address; ?>'`;

                try {

                    if (column == "title") {
                        if (value == "" || value == null) {
                            value = "Untitled";
                            $("#" + this.id).val(value);
                        }
                        $("#inp_project_name").val(value);

                    }
                    update_ajax('address', column, value, project_address_id);

                } catch (error) {
                    console.log(error);

                }

            });
        }); // **PROJ ADDRESS END */


        // **PROJ SUPERVISOR
        var proj_supervisor_inp = document.querySelectorAll('#proj_inspector input');

        proj_supervisor_inp.forEach(inp => {
            inp.addEventListener('change', function handleClick(event) {

                let column = $("#" + this.id).data("column");
                let value = $("#" + this.id).val();

                let proj_supervisor_id = `id = '<?php echo $project_supervisor; ?>'`;

                try {

                    if (column == "title") {
                        if (value == "" || value == null) {
                            value = "Untitled";
                            $("#" + this.id).val(value);
                        }
                        $("#inp_project_name").val(value);

                    }
                    update_ajax('supervisor', column, value, proj_supervisor_id);

                } catch (error) {
                    console.log(error);

                }

            });
        }); // **PROJ SUPERVISOR END */

        function validateInput(input) {
            input.value = input.value.replace(/[^A-Za-z]/g, '');
        }

    }); //*doc load end
</script>