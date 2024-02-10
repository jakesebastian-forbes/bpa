<style>
  #step_two_wrapper .input-wrapper {
    position: relative;
  }

  #step_two_wrapper :is(select, input) {
    border: 1px solid gray;
    border-radius: 6px;
    position: relative;
    margin: 10px;
    line-height: 6ex;
    height: 6ex;
    width: 100%;
    padding-left: 15px;

  }

  #step_two_wrapper [type~="checkbox"] {
    /* all : unset; */
    width: 20px;
    height: 20px;
    margin: 1px;
  }


  #step_two_wrapper label {
    position: absolute;
    top: -0.2ex;
    z-index: 1;
    left: 2em;
    background-color: white;
    padding: 0 5px;
    font-size: 80%;

  }

  .rectangle {
    background-color: #245A94;
    /* Set the background color to your desired color */
    color: white;
    /* Set the text color to white */
    padding: 0px;
    margin-left: 1rem !important;
    /* Adjust the padding as needed */
  }
</style>

<h2 class="fw-bold">FILL UP FORMS</h2>


<div id="step_two_wrapper" class="" style="margin: 0; padding: 0;">

  <div class="progress my-2" id="progress_bar_cont">
    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" id="progress_bar_step_2" data-tab="step_two_tab">
      <span id="percentageText"></span>
    </div>
  </div>

  <div id="step_two_locational">
    <div class="rectangle" style="margin: 0; padding: 0;">
      <p style="font-size: 25px; margin-left: 8px;" class="fw-bold">LOCATIONAL</p>
    </div>


    <?php
    $corp = select('project', "`id` = '$project_id'");

    if (mysqli_num_rows($corp) > 0) {

      if ($row = mysqli_fetch_assoc($corp)) {
        // echo trim($row['corporate_owned']);
        if (intval($row['corporate_owned']) == 1) {
          echo '
      <h2 class="my-2 mx-3">Corporation Information</h2>
      <div class="row">
      <div class="input-wrapper col-lg-6 col-12">
        <label for="p2_loc_corp_name" class="">Corporation Name <span class="required"></span></label>
        <input type="text" id="p2_locational_corp_name" name="p2_locational_corp_name" value = ""
        data-column="corporation_name" required>
      </div>
      <div class="input-wrapper col-lg-6 col-12">
        <label for="p2_loc_corp_address" class="">Corporation Address <span class="required"></span></label>
        <input type="text" id="p2_locational_corp_address" name="p2_locational_corp_address"
        data-column="corporation_address" required>
      </div>
      
    </div>';
        }
      }
    }

    ?>

    <div class="row">
      <div class="input-wrapper col-lg-6 col-12">
        <label for="p2_loc_rol" class="">Right Over Land<span class="required"></span></label>
        <select class="form-select" id="p2_loc_rol" name="p2_loc_rol" data-spec-div="rol_spec" data-column="right_over_land" required>
          <option value="" selected disabled hidden>Select an option</option>
          <option value="owned">Owner</option>
          <option value="lease">Lease</option>
          <option value="other">Others (Specify)</option>
        </select>
      </div>

      <div class="input-wrapper col-lg-6 col-12" id="rol_spec">
        <label for="" class="">Please Specify</label>
        <input type="text" name="rol_spec_input" id="rol_spec_input" data-column="rol_spec" style="height: 45px;">
      </div>

    </div>

    <div class="row">

      <div class="input-wrapper col-lg-6 col-12">
        <label for="p2_loc_elu" class="">Existing Land Use of Project Site<span class="required"></span></label>
        <select class="form-select " id="p2_loc_elu" name="p2_loc_elu" data-spec-div="land_use_spec" data-column="existing_land_use" required>
          <option value="" selected disabled hidden>Select an option</option>
          <option value="residential">Residential</option>
          <option value="industrial">Industrial</option>
          <option value="institutional">Institutional</option>
          <option value="commercial">Commercial</option>
          <option value="other">Others (Specify)</option>
        </select>

      </div>


      <div class="input-wrapper col-lg-6 col-12" id="land_use_spec">
        <label for="" class="">Please Specify</label>
        <input type="text" name="" id="land_use_spec_input" data-column="existing_land_use_spec">
      </div>

    </div>

    <div class="row">
      <div class="input-wrapper col-lg-6 col-12">
        <label for="p2_loc_proj_nature" class="">Project Nature<span class="required"></span></label>
        <select class="form-select" id="p2_loc_proj_nature" name="p2_loc_proj_nature" data-spec-div="proj_nature_spec" data-column="project_nature" required>
          <option value="" selected disabled hidden>Select an option</option>
          <option value="new development">New Development</option>
          <option value="improvement">Improvement</option>
          <option value="other">Others (Specify)</option>
        </select>
      </div>

      <div class="input-wrapper col-lg-6 col-12" id="proj_nature_spec">
        <label for="" class="">Please Specify</label>
        <input type="text" name="" id="proj_nature_spec_inp" data-column="project_nature">
      </div>




    </div>


    <div class="row">

      <div class="input-wrapper col-lg-6 col-12">
        <label for="p2_loc_proj_tenure" class="">Project Tenure<span class="required"></span></label>
        <select class="form-select" id="p2_loc_proj_tenure" name="p2_loc_proj_tenure" data-spec-div="proj_tenure_spec" data-column="project_tenure" required>
          <option value="" selected disabled hidden>Select an option</option>
          <option value="New Development">New Development</option>
          <option value="Permanent">Permanent</option>
          <option value="Temporary">Temporary</option>
          <option value="Vacant/Idle">Vacant/Idle</option>
          <option value="Agricultural">Agricultural (Specify Crop)</option>
          <option value="Tenanted">Tenanted</option>
          <option value="Non-Tenanted">Non-Tenanted</option>
        </select>

      </div>

      <div class="input-wrapper col-lg-6 col-12" id="proj_tenure_spec">
        <label for="" class="">Please Specify</label>
        <input type="text" name="" id="proj_tenure_spec_inp" data-column="project_tenure_specify">
      </div>

    </div>

    <div class="row">
      <div class="input-wrapper col-lg-12  col-12">
        <label for="loc_bldg_improvement" class="">Building Improvement(s)</label>
        <input type="text" name="loc_bldg_improvement" id="loc_bldg_improvement" data-column="building_improvement">

      </div>


    </div>
    <p class="fw-bold mx-3">If the project applied for the subject written notice(s) from this commission and its
      deputized zoning administrator to the effect requiring for presentation of locational
      clearance/certificate of zoning compliance/czc. <span class="required" style="margin-right: 5px;"></span></p>

    <!-- <div class="row"> -->

    <div class="input-wrapper col-lg-6 col-12" style="margin-top:px;">
      <select class="form-select col-lg-6 col " id="p2_loc_czc" name="p2_loc_czc" data-column="czc_notice_require" data-spec-div="czc_notice_spec" required>
        <!-- <option value="" selected disabled hidden>Select an option</option> -->

        <option value="yes">Yes</option>
        <option value="no" selected>No</option>


      </select>

    </div>


    <!-- </div> -->

    <div id="czc_yes">

      <div class="row">
        <div class="input-wrapper col-lg-6 col-12" id="czc_notice_spec">
          <label for="" class="fw-bold">Other HSRC officer of zoning administrator who issued the notice(s)</label>
          <input type="text" name="" id="czc_notice_spec_inp" data-column="czc_other_specify">
        </div>

        <div class="input-wrapper col-lg-6 col-12">
          <label for="p2_loc_date_notice" class="">Date Of Notice</label>
          <input type="date" id="p2_loc_date_notice" name="p2_loc_date_notice" data-column="czc_notice_date">
        </div>

      </div>
      <div class="row">
        <div class="input-wrapper col-lg-6 col-12">
          <label for="p2_loc_order_notice" class="">Order Notice</label>
          <input type="text" id="p2_loc_order_notice" name="p2_loc_order_notice" data-column="czc_notice_order">
        </div>
      </div>

    </div>

    <div class="row">
      <p for="p2_loc_czc_similar_app" class="fw-bold mx-3">Is the project applied for the subject of similir application(s) with other offices of the
        commission and/or deputized zoning administrator? <span class="required"></span></p>

      <div class="col-lg-6 col-12" style="margin-top: -12px;">
        <select class="form-select" id="p2_loc_czc_similar_app" name="p2_loc_czc_similar_app" data-column="similar_application" required>
          <!-- <option value="" selected disabled hidden>Select an option</option> -->

          <option value="yes">Yes</option>
          <option value="no" selected>No</option>
        </select>
      </div>

      <div id="similar_app_yes">

        <p class="fw-bold my-2 mx-3">If yes, please answer the following: </p>

        <div class="row">
          <div class="input-wrapper col-lg-6 col-12">
            <label for="p2_loc_similar_application" class="">(A) Other HSRC Office(s) where similar application(s) was/were filled: </label>
            <input type="text" id="p2_loc_similar_application" name="p2_loc_similar_application" data-column="sa_other_office">
          </div>

          <div class="input-wrapper col-lg-6 col-12" class="">
            <label for="p2_loc_date_filled">(B) Date(s) Filled: </label>
            <input type="date" id="p2_loc_date_filled" name="p2_loc_date_filled" data-column="sa_date_filled">
          </div>

        </div>



        <div class="row">
          <div class="input-wrapper col-lg-6 col-12 w-100">
            <label for="p2_loc_action_taken" class="">(C) Action(s) Taken by office(s) mentioned in (A): </label>
            <input type="text" id="p2_loc_action_taken" name="p2_loc_action_taken" data-column="sa_actions">
          </div>
        </div>

      </div>

    </div>

    <div class="row">
      <div class="input-wrapper col-lg-6 col-12">
        <label class=" mb-0">Prepared Mode Lease of Decision <span class="required"></span></label>
        <select class="form-select col-lg-6 col-12" id="p2_loc_pmld" name="p2_loc_pmld" data-column="lease_of_decision" required>
          <option value="" selected disabled hidden>Select an option</option>

          <option value="pick-up">Pick-up</option>
          <option value="mail_applicant">By Mail, Address to Applicant</option>
          <option value="mail_representative">By mail, address to authorized representative</option>

        </select>

      </div>


    </div>


    <hr>
    <script>
      function if_spec(select_id, retrived_value) {

        // for select, check if value retrived is within options
        // if not, select others
        // insert retrieved data to specs

        let exists = false;
        for (i = 0; i < document.getElementById(select_id).length; ++i) {
          if (document.getElementById(select_id).options[i].value == retrived_value) {

            exists = true;
            break;
          }
        }

        // console.log(exists);

        if (exists == true) {
          $("#" + select_id).val(retrived_value)

        }

        //if false
        //select others
        //open specify
        //place value in specify
        if (exists == false) {
          $("#" + select_id).val('other');

          let spec_input_id = document.querySelectorAll("[data-column='" + $("#" + select_id).data('column') + "']")[1].id;
          // console.log(spec_input_id);
          $("#" + spec_input_id).val(retrived_value)
          // console.log($("#"+select_id).data('column'));


        }

      }


      document.addEventListener("DOMContentLoaded", () => {

        <?php
        $locational = select('f_locational', "`id` = '$project_locational'");

        // print_r($_SESSION);

        if (mysqli_num_rows($locational) > 0) {

          if ($row = mysqli_fetch_assoc($locational)) {
            // print_r($row);

        ?>
            //** retrival */


            $("#p2_locational_corp_name").val('<?php echo $row['corporation_name'] ?>')
            $("#p2_locational_corp_address").val('<?php echo $row['corporation_address'] ?>')
            $("#p2_loc_building_improvement").val('<?php echo $row['building_improvement'] ?>')



            $("#p2_loc_rol").val('<?php echo $row['right_over_land'] ?>')
            $("#rol_spec_input").val('<?php echo $row['rol_spec'] ?>')
            $("#p2_loc_elu").val('<?php echo $row['existing_land_use'] ?>')
            $("#land_use_spec_input").val('<?php echo $row['existing_land_use_spec'] ?>')
            $("#p2_loc_proj_nature").val('<?php echo $row['project_nature'] ?>')
            $("#proj_nature_spec_inp").val('<?php echo $row['project_nature'] ?>')




            $("#p2_loc_proj_tenure").val('<?php echo $row['project_tenure'] ?>')
            $("#proj_tenure_spec_inp").val('<?php echo $row['project_tenure_specify'] ?>')






            $("#loc_bldg_improvement").val('<?php echo $row['building_improvement'] ?>')


            $("#p2_loc_czc").val('<?php echo $row['czc_notice_require'] ?>')
            $("#p2_loc_date_notice").val('<?php echo $row['czc_notice_date'] ?>')
            $("#p2_loc_order_notice").val('<?php echo $row['czc_notice_order'] ?>')


            $("#p2_loc_czc_similar_app").val('<?php echo $row['similar_application'] ?>')
            $("#czc_notice_spec_inp").val('<?php echo $row['czc_other_specify'] ?>')

            $("#p2_loc_similar_application").val('<?php echo $row['sa_other_office'] ?>')
            $("#p2_loc_date_filled").val('<?php echo $row['sa_date_filled'] ?>')
            $("#p2_loc_action_taken").val('<?php echo $row['sa_actions'] ?>')

            $("#p2_loc_pmld").val('<?php echo $row['lease_of_decision'] ?>')
        <?php
          }
        }
        ?>



        //**hiding non-needed components */

        if ($("#p2_loc_czc").val() == "no") {

          $("#czc_yes").hide();

        }

        if ($("#p2_loc_czc_similar_app").val() == "no") {
          $("#similar_app_yes").hide()

        }

        let project_tenure = $("#p2_loc_proj_tenure").val();

        if (project_tenure == "" || project_tenure == undefined) {

        } else {
          if (project_tenure.toLowerCase() == "agricultural" || project_tenure.toLowerCase() == "temporary") {
            $("#proj_tenure_spec").show();
          } else {
            $("#proj_tenure_spec").hide();


          }

        }

        // if ($("#p2_loc_proj_tenure").val().toLowerCase() == "agricultural" || $("#p2_loc_proj_tenure").val().toLowerCase() == "temporary") {
        //   $("#proj_tenure_spec").show();
        // } else {
        //   $("#proj_tenure_spec").hide();


        // }


        // **listen to changes to hide/show components


        let val_other = $('#step_two_locational select option[value="other"]');

        for (x = 0; x < val_other.length; x++) {
          // console.log(val_other[x].parentElement);
          inp = val_other[x].parentElement;

          // console.log(inp.value);

          if (inp.value != "other") {
            // console.log(inp.id)
            // console.log(inp.getAttribute("data-spec-div"))
            $("#" + inp.getAttribute("data-spec-div")).hide()

          }


          inp.addEventListener('change', function handleClick(event) {

            let spec_div = $("#" + this.getAttribute("data-spec-div"))[0].id;
            let spec_input = $("#" + spec_div + " input")[0].id;

            if (this.value == "other") {
              $("#" + this.getAttribute("data-spec-div")).show()
              // console.log("other")
              // console.log(this.id);
              // console.log(spec_input);



            } else {
              $("#" + this.getAttribute("data-spec-div")).hide()
              // console.log("not other")
              // console.log(this.id);
              // console.log(spec_input);
              // console.log($("#"+spec_input).val());
              // console.log($("#"+spec_input).data("column"));

              if ($("#" + spec_input).val() == '' || $("#" + spec_input).val() == null || $("#" + spec_input).val() == undefined) {
                // console.log("empty");
              } else {
                // console.log("not empty");
                let column = $("#" + spec_input).data("column");
                $("#" + spec_input).val('');

                update_ajax('f_locational', column, "", " id = '<?php echo $project_locational ?>'");

              }


              // console.log(this.id);

              // let column = $("#czc_notice_spec_inp").data("column");
              // update_ajax('f_locational', column, "", " id = '<?php //echo $project_locational 
                                                                  ?>'");


            }
          });
        }


        $("#p2_loc_proj_tenure").on("change", function() {
          if (this.value.toLowerCase() == "agricultural" || this.value.toLowerCase() == "temporary") {
            $("#proj_tenure_spec").show();

          } else {
            $("#proj_tenure_spec").hide();

          }
        })


        $("#p2_loc_czc").on("change", function() {

          if (this.value == "yes") {
            $("#czc_yes").show();

          } else if (this.value == "no") {
            $("#czc_yes").hide();

            try {
              let column = $("#czc_notice_spec_inp").data("column");
              update_ajax('f_locational', column, "", " id = '<?php echo $project_locational ?>'");
              column = $("#p2_loc_date_notice").data("column");
              update_ajax('f_locational', column, "", " id = '<?php echo $project_locational ?>'");
              column = $("#p2_loc_order_notice").data("column");
              update_ajax('f_locational', column, "", " id = '<?php echo $project_locational ?>'");

              $("#czc_notice_spec_inp").val('')
              $("#p2_loc_date_notice").val('')
              $("#p2_loc_order_notice").val('')

            } catch (error) {
              console.log(error)

            }



          }

        })



        $("#p2_loc_czc_similar_app").on("change", function() {
          console.log(this.value);

          if (this.value == "yes") {
            $("#similar_app_yes").show();

          } else if (this.value == "no") {
            $("#similar_app_yes").hide();

            try {

              // update database
              let column = $("#p2_loc_similar_application").data("column");
              update_ajax('f_locational', column, "", " id = '<?php echo $project_locational ?>'");
              column = $("#p2_loc_date_filled").data("column");
              update_ajax('f_locational', column, "", " id = '<?php echo $project_locational ?>'");
              column = $("#p2_loc_action_taken").data("column");
              update_ajax('f_locational', column, "", " id = '<?php echo $project_locational ?>'");

              // reflect to site

              $("#p2_loc_similar_application").val('')
              $("#p2_loc_date_filled").val('')
              $("#p2_loc_action_taken").val('')


            } catch (error) {
              console.log(error)
            }




          }

        })


        // ** listen to change and insert/update select value

        let locational_selects = document.querySelectorAll('#step_two_locational select');

        locational_selects.forEach(inp => {
          inp.addEventListener('change', function handleClick(event) {
            // console.log(this);
            let column = $("#" + this.id).data("column");
            let value = $("#" + this.id).val();


            if (value.toLowerCase() != "other" || value.toLowerCase() != "others") {
              try {

                update_ajax('f_locational', column, value, " id = '<?php echo $project_locational ?>'");

              } catch (error) {
                console.log(error);
              }
              // console.log(value)
            }
            // console.log("column: ", column, " --- value:", value)
          });
        });

        // ** listen to change and insert/update input value


        let locational_input = document.querySelectorAll('#step_two_locational input');

        locational_input.forEach(inp => {
          inp.addEventListener('change', function handleClick(event) {
            console.log(this);
            let column = $("#" + this.id).data("column");
            let value = $("#" + this.id).val();

            try {

              update_ajax('f_locational', column, value, " id = '<?php echo $project_locational ?>'");

            } catch (error) {
              console.log(error);
            }


            console.log("column: ", column, " --- value:", value)
          });
        });
      });
    </script>

  </div>

  <!-- // ** LOCATIONAL END -->

  <div id="step_two_sanitary">

    <div class="rectangle">
      <p style="font-size: 25px; margin-left: 8px;" class="fw-bold">SANITARY</p>
    </div>



    <div class="row">
      <div class="input-wrapper col-lg-6 col-12">
        <label for="sanitary_scope" class="fw-bold">Scope of Work <span class="required"></span></label>
        <select class="form-select select2" id="sanitary_scope" name="sanitary_scope" name="sanitary_scope" data-column="scope" data-spec-div="sanitary_scope_spec_div" required>
          <option value="new installation" selected>New Installation</option>
          <option value="addition">Addition</option>
          <option value="repair">Repair</option>
          <option value="removal">Removal</option>
          <option value="other">Others(specify)</option>

        </select>
      </div>

      <div class="input-wrapper col-lg-6 col-12" id="sanitary_scope_spec_div">
        <label for="" class="">Please Specify</label>
        <input type="text" name="" id="sanitary_scope_spec" data-column="scope_spec">
      </div>


    </div>


    <?php

    $sanitary_fixture = full_query("SELECT * FROM `f_sanitary_fixtures` WHERE `form` = '$project_sanitary' ORDER BY timestamp DESC");



    if (mysqli_num_rows($sanitary_fixture) > 0) {

      $row_count = 1;

      echo '
    <div id="sanitary_fixtures">

      
    
      <div class="row mb-4 mx-3 my-3" id = "fixture_display" style = "max-height: 500px; min-height: 200px;
      min-width:600px; max-width:100%
      border:1px solid black;
      resize:both;
      overflow-y:auto; ">
    ';

      echo '
        <table style="width: 100%;" class="table table-bordered mb-0" id = "table_sanitary_fixtures">
        <tr class = "text-center">
          <th scope="col">No.</th>
          <th scope="col">Quantity</th>
          <th scope="col">Cost</th>
          <th scope="col">Status</th>
          <th scope="col">Fixture</th>
          <th scope="col">Action</th>

        </tr>
      ';

      while ($row = mysqli_fetch_assoc($sanitary_fixture)) {

        // print_r($row);

        echo '
     
        <tr class = "sanitary_fixture_item" id ="' . $row['id'] . '">
          <td class ="cnt">' . $row_count . '</td>
          <td class ="item_qnty">' . $row['quantity'] . '</td>
          <td class ="item_cost">' . $row['cost'] . '</td>
          <td class ="item_status">' . ucwords($row['status']) . '</td>
          <td class ="item_fixture">' . ucwords($row['fixture']) . '</td>
          <td class ="item_action">
          <button class = "fixture_edit btn my-btn-blue" data-fix-id = "' . $row['id'] . '">Edit</button>
          <button class = "fixture_remove btn btn-danger">Remove</button>
          </td>

        

        </tr>
       ';



        $row_count++;
      }
      echo '
            <tr>
            <td class="fw-bold" >TOTAL</td>
            <td id = "sanitary_fixture_total_quantity"></td>
            <td id = "sanitary_fixture_total_cost" title = "Total = (Quantity x Cost)ₙ1 +
             (Quantity x Cost)ₙ2 + ..."></td>
            <td></td>
            </tr>


            </table>
</div>
</div>

';
    } else {

      echo '
    <div id="sanitary_fixtures">
</div>
  
        ';
    }

    ?>






    <!-- //**ADD FIXTURES */ -->
    <p class="fw-bold my-2 mx-3">FIXTURES TO BE INSTALLED</p>


    <form action="../php/insert_sanitary_fixtures.php" method="post" id="add_fixture_form">
      <div class="row">

        <input type="text" name="form_id" value="<?php echo $project_sanitary ?>" hidden>

        <div class="input-wrapper col-lg-3 col-12">
          <label for="sanitary_fixture_qnty" class="">Quantity</label>
          <input type="number" min="1" value="1" id="sanitary_fixture_qnty" name="sanitary_fixture_qnty">
        </div>


        <div class="input-wrapper col-lg-3 col-12">
          <label for="sanitary_fixture_cost" class="">Cost</label>
          <input type="number" min="0" value="0" id="sanitary_fixture_cost" name="sanitary_fixture_cost">
        </div>

        <div class="input-wrapper col-lg-3 col-12">
          <label for="sanitary_fixture_status" class="">Status</label>
          <select class="form-select" id="sanitary_fixture_status" name="sanitary_fixture_status">
            <option value="New" selected>New</option>
            <option value="Existing">Existing</option>
          </select>
        </div>

        <div class="input-wrapper col-lg-3 col-12">
          <label for="sanitary_fixture_item" class="">Fixtures</label>
          <select class="form-select select2" id="sanitary_fixture_item" name="sanitary_fixture_item">
            <option value="water closet" selected>Water Closet</option>
            <option value="floor drain">Floor Drain</option>
            <option value="lavatories">Lavatories</option>
            <option value="kitchen sink">Kitchen Sink</option>
            <option value="faucet">Faucet</option>
            <option value="shower head">Shower Head</option>
            <option value="water meter">Water Meter</option>
            <option value="grease trap">Grease Trap</option>
            <option value="bath tubs">Bath Tubs</option>
            <option value="slop sink">Slop Sink</option>
            <option value="urinal">Urinal</option>
            <option value="air conditioning unit">Air Conditioning Unit</option>
            <option value="water tank/reservoir">Water Tank/Reservoir</option>
            <option value="bidette">Bidette</option>
            <option value="laundry trays">Laundry Trays</option>
            <option value="dental cuspidor">Dental Cuspidor</option>
            <option value="gas heater">Gas Heater</option>
            <option value="electrical heater">Electrical Heater</option>
            <option value="water boiler">Water Boiler</option>
            <option value="drinking fountain">Drinking Fountain</option>
            <option value="bar sink">Bar Sink</option>
            <option value="soda fountain sink">Soda Fountain Sink</option>
            <option value="laboratory sink">Laboratory Sink</option>
            <option value="sterilizer">Sterilizer</option>
            <option value="swimming pool">Swimming Pool</option>

          </select>
        </div>

      </div>

      <div class="row">
        <div class="col-lg-8"></div>
        <div class="col-lg-4 col-12 d-flex justify-content-end justify-content-evenly">

          <button class="btn float-right mr-2 btn btn-secondary" id="btn_reset_fixtures" type="reset">Clear selection</button>

          <button class="btn float-right mr-1 btn my-btn-blue" id="btn_add_fixtures" type="button">Add Fixture</button>

        </div>
      </div>




    </form>


    <div class="form-group row my-4">
      <div class="col-lg-4 col-12">
        <div class="form-check">
          <input class="form-check-input sanitary-system" type="checkbox" id="water_dis_system" name="water_dis_system" value="water distribution system">
          <span class="form-check-label mx-2" for="waterDistributionSystem" style="font-size: 13px;">WATER DISTRIBUTION SYSTEM</span>
        </div>
      </div>

      <div class="col-lg-4 col-12">
        <div class="form-check">
          <input class="form-check-input sanitary-system" type="checkbox" id="sanitary_sewer_system" name="sanitary_sewer_system" value="sanitary sewer system">
          <span class="form-check-label mx-2" for="sanitarySewerSystem" style="font-size: 13px;">SANITARY SEWER SYSTEM</span>
        </div>
      </div>

      <div class="col-lg-4 col-12">
        <div class="form-check">
          <input class="form-check-input sanitary-system" type="checkbox" id="storm_drainage_system" name="storm_drainage_system" value="storm drainage system">
          <span class="form-check-label mx-2" for="stormDrainageSystem" style="font-size: 13px;">STORM DRAINAGE SYSTEM</span>
        </div>
      </div>
    </div>


    <div class="row my-1">
      <div class="input-wrapper col-lg-6">
        <label for="p2_unified_water_supply">Water Supply</label>
        <select class="form-select" id="p2_unified_water_supply" name="p2_unified_water_supply" data-column="water_supply" data-spec-div="water_supply_div">
          <option value="Shallow Well" selected>Shallow Well</option>
          <option value="Deep Well &amp; Pump Set">Deep Well &amp; Pump Set</option>
          <option value="City/Municipal/Water System">City/Municipal/Water System</option>
          <option value="Others">Others</option>
        </select>
      </div>

      <div class="input-wrapper col-lg-6" id="water_supply_div">
        <label for="water_supply_spec">Others (Specify)</label>
        <input type="text" id="water_supply_spec" data-column="water_supply_spec">
      </div>
    </div>

    <div class="row">
      <div class="input-wrapper col-lg-6 col">
        <label for="p2_unified_system_disposal">System of Disposal</label>
        <select class="form-select" id="p2_unified_system_disposal" name="p2_unified_system_disposal" data-column="disposal_system">
          <option value="Waste Water Treatment Plant" selected>Waste Water Treatment Plant</option>
          <option value="Septic Vault/Imhope Tank">Septic Vault/Imhope Tank</option>
          <option value="Sanitary Sewer Connection">Sanitary Sewer Connection</option>
          <option value="Sub-Surface Sand Filter">Sub-Surface Sand Filter</option>
          <option value="Surface Drainage">Surface Drainage</option>
          <option value="Street Canal">Street Canal</option>
          <option value="Water Course">Water Course</option>
        </select>
      </div>

    </div>

    <div class="row my-1">
      <div class="input-wrapper col-lg-6 col-12">
        <label for="sanitary_prop_start">Proposed Date Start of Installation<span class="required"></span></label>
        <input type="date" name="" id="sanitary_prop_start" data-column="proposed_start" required>
      </div>

      <div class="input-wrapper col-lg-6 col-12">
        <label for="sanitary_exp_end">Expected Date of Completion<span class="required"></span></label>
        <input type="date" name="" id="sanitary_exp_end" data-column="est_finish" required>
      </div>

    </div>

    <!-- </div> -->


    <!-- //**sanitary fixture modal  */ -->
    <div class="modal fade" id="modal_sanitary_fixtures" tabindex="-1" aria-labelledby="modal_sanitary_fixtures_Label" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="fixture_operation">Action</h1>
            <!-- <h5 id=""></h5> -->

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="row">

              <div class="input-wrapper col">
                <label for="sanitary_fixture_qnty">QUANTITY</label>
                <input type="number" min="1" value="1" id="sanitary_fixture_qnty_edit" name="sanitary_fixture_qnty" required="">
              </div>


              <div class="input-wrapper col">
                <label for="sanitary_fixture_cost">COST</label>
                <input type="number" min="0" value="0" id="sanitary_fixture_cost_edit" name="sanitary_fixture_cost" required="">
              </div>

              <div class="input-wrapper col">
                <label for="sanitary_fixture_status">STATUS</label>
                <select class="form-select text-uppercase" id="sanitary_fixture_status_edit" name="sanitary_fixture_status" required="">
                  <option value="New" selected="">New</option>
                  <option value="Existing">Existing</option>
                </select>
              </div>

              <!-- <div class="input-wrapper col">
                <label for="sanitary_fixture_item">FIXTURES</label>
                <select class="form-select select2 text-uppercase" id="sanitary_fixture_item_edit" name="sanitary_fixture_item_edit" required="">
                  <option value="faucet">Faucet</option>
                  <option value="shower head">Shower Head</option>
                  <option value="water meter">Water Meter</option>
                  <option value="grease trap">Grease Trap</option>
                  <option value="bath tubs">Bath Tubs</option>
                  <option value="slop sink">Slop Sink</option>
                  <option value="urinal">Urinal</option>
                  <option value="air conditioning unit">Air Conditioning Unit</option>
                  <option value="water tank/reservoir">Water Tank/Reservoir</option>
                  <option value="bidette">Bidette</option>
                  <option value="laundry trays">Laundry Trays</option>
                  <option value="dental cuspidor">Dental Cuspidor</option>
                  <option value="gas heater">Gas Heater</option>
                  <option value="electrical heater">Electrical Heater</option>
                  <option value="water boiler">Water Boiler</option>
                  <option value="drinking fountain">Drinking Fountain</option>
                  <option value="bar sink">Bar Sink</option>
                  <option value="soda fountain sink">Soda Fountain Sink</option>
                  <option value="laboratory sink">Laboratory Sink</option>
                  <option value="sterilizer">Sterilizer</option>
                  <option value="swimming pool">Swimming Pool</option>

                </select>
              </div> -->


            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn my-btn-blue">Save changes</button>
          </div>
        </div>
      </div>
    </div>



    <script>
      async function remove_existing_fixture() {
        await sleep(1000)
        let uniqueValues = [];
        $("#table_sanitary_fixtures .item_fixture").each(function() {
          let value = $(this).text(); // Change to .val() if these are input elements
          if (uniqueValues.indexOf(value) === -1) {
            uniqueValues.push(value);
            $("#sanitary_fixture_item > option[value='" + value.toLowerCase() + "']").remove();
          }
        });

        // console.log(uniqueValues);

      }



      function sanitary_attach_event() {
        let fixture_edit = document.getElementsByClassName("fixture_edit");

        Array.from(fixture_edit).forEach(box => {
          box.addEventListener('click', function handleClick(event) {
            $("#modal_sanitary_fixtures").modal('toggle');
            $("#fixture_operation").html("Edit");
            let fixture_id = $(this).data("fix-id");
            console.log(fixture_id)
            // $("#bf7d95bd-a98b-11ee-94cb-0a0027000017.sanitary_fixture_item .item_fixture")

            $("#sanitary_fixture_qnty_edit").val(parseInt($("#" + fixture_id + ".sanitary_fixture_item .item_qnty").html()));
            $("#sanitary_fixture_cost_edit").val(parseInt($("#" + fixture_id + ".sanitary_fixture_item .item_cost").html()));
            $("#sanitary_fixture_status_edit").val($("#" + fixture_id + ".sanitary_fixture_item .item_status").html());

            let fixture = $("#" + fixture_id + ".sanitary_fixture_item .item_fixture").html()
            console.log(fixture)
            $("#sanitary_fixture_item_edit").val(fixture.toLowerCase());

            console.log($("#sanitary_fixture_item_edit").val())
            console.log($("#" + fixture_id + ".sanitary_fixture_item .item_fixture").html())
          });
        });


        let fixture_remove = document.getElementsByClassName("fixture_remove");

        Array.from(fixture_remove).forEach(box => {
          box.addEventListener('click', function handleClick(event) {
            $("#modal_sanitary_fixtures").modal('toggle');
            $("#fixture_operation").html("Remove");
          });
        });

      }


      function submit_fixture_form(form_id) {

        var form = $("#" + form_id);
        var url = form.attr('action');

        $.ajax({
          type: "POST",
          url: url,
          data: form.serialize(),
          success: function(data) {

            // Ajax call completed successfully 
            console.log("Form Submited Successfully");
            console.log(data)
            // return "success";
            refresh_element("sanitary_fixtures");
            sleep_time(3000);
            $("#add_fixture_form")[0].reset();

            // refresh_element("sanitary_fixture_item");
            remove_existing_fixture();
            console.log("sanitary event")
            sanitary_attach_event();
            calculateTotal();



          },
          error: function(data) {

            // Some error in ajax call 
            console.log("some Error");
            console.log(data)
            return "fail";

          }
        });


      };

      function calculateTotal() {
        var totalCost = 0;
        var totalQuantity = 0;

        $('.sanitary_fixture_item').each(function() {
          var quantity = parseFloat($(this).find('.item_qnty').text()) || 0;
          var cost = parseFloat($(this).find('.item_cost').text()) || 0;

          totalCost += quantity * cost;
          totalQuantity += quantity;
        });

        // Update the total cost and quantity in the last row
        $('#sanitary_fixture_total_quantity').html(totalQuantity);
        $('#sanitary_fixture_total_cost').html(totalCost);

        // console.log(totalQuantity)
        // console.log(totalCost)


      }



      $(document).ready(function() {


        $('#btn_add_fixtures').click(function(event) {

          let sanitary_qnty = $("#sanitary_fixture_qnty").val();
          let sanitary_cost = $("#sanitary_fixture_cost").val();

          if (sanitary_cost == "" || sanitary_qnty == "") {
            alert("Quantity or cost cannot be empty. Please fill out the fields.")

          } else if (sanitary_cost <= 0 || sanitary_qnty <= 0) {
            alert("Quantity or cost cannot be zero.")

          } else {
            submit_fixture_form('add_fixture_form');
          }

        });

        // Calculate total cost when the document is ready
        calculateTotal();



        remove_existing_fixture();

        sanitary_attach_event();




        <?php
        $sanitary_system = select('f_sanitary_system', "`form` = '$project_sanitary'");

        // print_r($_SESSION);

        if (mysqli_num_rows($sanitary_system) > 0) {

          while ($row = mysqli_fetch_assoc($sanitary_system)) {
            // print_r($row);

            echo '$(\'input[value="' . $row['type'] . '"]\').prop(\'checked\',true);';
          }
        }
        ?>

        $(".sanitary-system").click(function() {
          // Retrieve the status of the clicked checkbox
          var isChecked = $(this).prop("checked");

          if (isChecked == true) {
            //insert to db

            insert_ajax("f_sanitary_system", "`id`,`form`,`type`", "UUID(),'<?php echo $project_sanitary ?>','" + this.value + "'");

          } else {
            //delete from db
            delete_ajax("f_sanitary_system", "`form` = '<?php echo $project_sanitary ?>' AND `type` = '" + this.value + "'")

          }

          console.log(this.value)

          // Log the status to the console (you can adjust based on your needs)
          console.log("Checkbox status: " + (isChecked ? "checked" : "unchecked"));
        });



        <?php
        $sanitary_gen = select('f_sanitary', "`id` = '$project_sanitary'");

        // print_r($_SESSION);

        if (mysqli_num_rows($sanitary_gen) > 0) {

          while ($row = mysqli_fetch_assoc($sanitary_gen)) {
            // print_r($row);

            // echo '$(\'input[value="' . $row['type'] . '"]\').prop(\'checked\',true);';

        ?>

            $("#p2_unified_water_supply").val("<?php echo $row['water_supply'] ?>")
            $("#water_supply_spec").val("<?php echo $row['water_supply_spec'] ?>")
            $("#p2_unified_system_disposal").val("<?php echo $row['disposal_system'] ?>")
            $("#sanitary_prop_start").val("<?php echo $row['proposed_start'] ?>")
            $("#sanitary_scope").val("<?php echo $row['scope'] ?>")
            $("#sanitary_scope_spec").val("<?php echo $row['scope_spec'] ?>")

            $("#sanitary_exp_end").val("<?php echo $row['est_finish'] ?>")


            if ("<?php echo strtolower($row['scope']) ?>" == "other" || "<?php echo strtolower($row['scope']) ?>" == "others") {
              $("#sanitary_scope_spec_div").show();
            } else {
              $("#sanitary_scope_spec_div").hide();

            }


            if ("<?php echo strtolower($row['water_supply']) ?>" == "other" || "<?php echo strtolower($row['water_supply']) ?>" == "others") {
              $("#water_supply_div").show();
            } else {
              $("#water_supply_div").hide();

            }

        <?php
          }
        }
        ?>


        $("#sanitary_scope").change(function() {


          let column = $("#" + this.id).data("column");
          let value = $("#" + this.id).val();
          try {
            update_ajax('f_sanitary', column, value, " id = '<?php echo $project_sanitary ?>'");

          } catch (error) {
            console.log(error);
          }

          if (value.toLowerCase() == "other" || value.toLowerCase() == "others") {
            $("#" + $("#" + this.id).data("spec-div")).show();

          } else {
            $("#" + $("#" + this.id).data("spec-div")).hide();

          }

        })

        $("#sanitary_scope_spec").change(function() {

          let column = $("#" + this.id).data("column");
          let value = $("#" + this.id).val();
          try {
            update_ajax('f_sanitary', column, value, " id = '<?php echo $project_sanitary ?>'");

          } catch (error) {
            console.log(error);
          }


        })


        $("#p2_unified_water_supply").change(function() {
          console.log(this);
          let column = $("#" + this.id).data("column");
          let value = $("#" + this.id).val();

          if (value.toLowerCase() == "other" || value.toLowerCase() == "others") {
            $("#" + $("#" + this.id).data("spec-div")).show();

          } else {
            $("#" + $("#" + this.id).data("spec-div")).hide();

          }

          try {
            update_ajax('f_sanitary', column, value, " id = '<?php echo $project_sanitary ?>'");

          } catch (error) {
            console.log(error);
          }
          console.log(value)

          console.log("column: ", column, " --- value:", value)
        });

        $("#water_supply_spec").change(function() {

          let column = $("#" + this.id).data("column");
          let value = $("#" + this.id).val();
          try {
            update_ajax('f_sanitary', column, value, " id = '<?php echo $project_sanitary ?>'");

          } catch (error) {
            console.log(error);
          }


        })

        $("#p2_unified_system_disposal").change(function() {

          let column = $("#" + this.id).data("column");
          let value = $("#" + this.id).val();
          try {
            update_ajax('f_sanitary', column, value, " id = '<?php echo $project_sanitary ?>'");

          } catch (error) {
            console.log(error);
          }


        })

        $("#sanitary_prop_start").change(function() {

          let column = $("#" + this.id).data("column");
          let value = $("#" + this.id).val();
          try {
            update_ajax('f_sanitary', column, value, " id = '<?php echo $project_sanitary ?>'");

          } catch (error) {
            console.log(error);
          }


        })

        $("#sanitary_exp_end").change(function() {

          let column = $("#" + this.id).data("column");
          let value = $("#" + this.id).val();

          if ($("#sanitary_prop_start").val() > $("#sanitary_exp_end").val() == true) {

            alert("Project's estimated finish cannot be earlier than proposed start.");
            $("#sanitary_exp_end").val(0);
          } else {
            try {
              update_ajax('f_sanitary', column, value, " id = '<?php echo $project_sanitary ?>'");

            } catch (error) {
              console.log(error);
            }

          }



        })



      })
    </script>

  </div>
  <!-- //**STEP TWO SANITARY END */ -->



  <!-- //** ELECTRICAL */ -->

  <div id="step_two_electrical">
    <div class="rectangle">
      <p style="font-size: 25px; margin-left: 8px;" class="fw-bold">ELECTRICAL</p>
    </div>



    <div class="row">
      <div class="input-wrapper col-lg-6 col-12">
        <label for="electrical_scope" class="fw-bold">Scope of Work <span class="required"></span></label>
        <select class="form-select select2" id="electrical_scope" name="electrical_scope" name="electrical_scope" data-column="scope" data-spec-div="electrical_scope_spec_div" required>
          <option value="new installation" selected>New Installation</option>
          <option value="annual installation">Annual Inspection</option>
          <option value="temporary">Temporary</option>
          <option value="reconnection">Reconnection of Service Entrance</option>
          <option value="separation">Separation of Service Entrance</option>
          <option value="upgrading">Upgrading of Service Entrance</option>
          <option value="relocation">Relocation of Service Entrance</option>
          <option value="other">Others(specify)</option>

        </select>
      </div>

      <div class="input-wrapper col-lg-6 col-12" id="electrical_scope_spec_div">
        <label for="" class="">Please Specify</label>
        <input type="text" name="" id="electrical_scope_spec" data-column="scope_spec">
      </div>


    </div>






    <div class="row">
      <p class="fw-bold my-2 mx-3">SUMMARY OF ELECTRICAL LOADS / CAPACITITES APPLIED FOR</p>
      <div class="input-wrapper col-lg-4 col-12">
        <label for="p2_electrical_tcl">Total Connection Load<span class="required"></span></label>
        <input type="number" data-column="total_conn_load" placeholder="kVA" class="m-2" id="p2_electrical_tcl" name="p2_electrical_tcl" min="0" required>
      </div>

      <div class="input-wrapper col-lg-4 col-12">
        <label for="p2_electrical_ttc">Total Transformer Capacity<span class="required"></span></label>
        <input type="number" data-column="total_transformer_cap" placeholder="kVA" class="m-2" id="p2_electrical_ttc" name="p2_electrical_ttc" min="0" required>
      </div>

      <div class="input-wrapper col-lg-4 col-12">
        <label for="p2_electrical_tgc">Total Generator/UPS Capacity<span class="required"></span></label>
        <input type="number" data-column="total_gen_cap" placeholder="kVA" class="m-2" id="p2_electrical_tgc" name="p2_electrical_tgc" min="0" required>
      </div>
    </div>


    <div class="row">
      <div class="input-wrapper col-lg-6 col-12">
        <label for="electrical_sup" class="text-capitalize"> Supervisor / In-charge of Electrical Works<span class="required"></span></label>
        <select class="form-select" id="electrical_sup" name="electrical_sup" data-column="supervisor" required>
          <option value="professional engineer" selected>Professional Electrical Engineer</option>
          <option value="registered engineer">Registered Electrical Engineer</option>
          <option value="registered electrician">Registered Master Electrician</option>

        </select>
      </div>

    </div>



  </div>

  <script>
    <?php
    $electrical_gen = select('f_electrical', "`id` = '$project_electrical'");

    // print_r($_SESSION);

    if (mysqli_num_rows($electrical_gen) > 0) {

      while ($row = mysqli_fetch_assoc($electrical_gen)) {
        // print_r($row);

        // echo '$(\'input[value="' . $row['type'] . '"]\').prop(\'checked\',true);';

    ?>

        $("#p2_electrical_tcl").val("<?php echo $row['total_conn_load'] ?>")
        $("#p2_electrical_ttc").val("<?php echo $row['total_transformer_cap'] ?>")
        $("#p2_electrical_tgc").val("<?php echo $row['total_gen_cap'] ?>")
        $("#electrical_scope").val("<?php echo $row['scope'] ?>")


        if ("<?php echo strtolower($row['scope']) ?>" == "other" || "<?php echo strtolower($row['scope']) ?>" == "others") {
          $("#electrical_scope_spec_div").show();
          $("#electrical_scope_spec").val("<?php echo $row['scope_spec'] ?>")

        } else {
          $("#electrical_scope_spec_div").hide();

        }

        $("#electrical_sup").val("<?php echo $row['supervisor'] ?>")



    <?php

      }
    };
    ?>

    $("#electrical_scope").change(function() {


      let column = $("#" + this.id).data("column");
      let value = $("#" + this.id).val();
      try {
        update_ajax('f_electrical', column, value, " id = '<?php echo $project_electrical ?>'");

      } catch (error) {
        console.log(error);
      }

      if (value.toLowerCase() == "other" || value.toLowerCase() == "others") {
        $("#" + $("#" + this.id).data("spec-div")).show();

      } else {
        $("#" + $("#" + this.id).data("spec-div")).hide();

      }

    })

    $("#electrical_scope_spec").change(function() {

      let column = $("#" + this.id).data("column");
      let value = $("#" + this.id).val();
      try {
        update_ajax('f_electrical', column, value, " id = '<?php echo $project_electrical ?>'");

      } catch (error) {
        console.log(error);
      }


    })


    $("#p2_electrical_tcl").change(function() {

      let column = $("#" + this.id).data("column");
      let value = $("#" + this.id).val();
      try {
        update_ajax('f_electrical', column, value, " id = '<?php echo $project_electrical ?>'");

      } catch (error) {
        console.log(error);
      }


    })


    $("#p2_electrical_ttc").change(function() {

      let column = $("#" + this.id).data("column");
      let value = $("#" + this.id).val();
      try {
        update_ajax('f_electrical', column, value, " id = '<?php echo $project_electrical ?>'");

      } catch (error) {
        console.log(error);
      }


    })


    $("#p2_electrical_tgc").change(function() {

      let column = $("#" + this.id).data("column");
      let value = $("#" + this.id).val();
      try {
        update_ajax('f_electrical', column, value, " id = '<?php echo $project_electrical ?>'");

      } catch (error) {
        console.log(error);
      }


    })

    $("#electrical_sup").change(function() {

      let column = $("#" + this.id).data("column");
      let value = $("#" + this.id).val();
      try {
        update_ajax('f_electrical', column, value, " id = '<?php echo $project_electrical ?>'");

      } catch (error) {
        console.log(error);
      }


    })
  </script>

  <div id="step_two_unified">

    <div class="rectangle">
      <p style="font-size: 25px; margin-left: 8px;" class="fw-bold my-4">UNIFIED</p>
    </div>

    <div class="row">
      <div class="input-wrapper col-lg-6 col-12" style="margin-top: -12px;">
        <div class="col">
          <label for="p2_unified_area_no">Area No.</label>
          <input type="number" id="p2_unified_area_no" min="0" name="p2_unified_area_no">
        </div>
      </div>

      <div class="input-wrapper col-lg-6 col-12" style="margin-top: -12px;">
        <div class="col">
          <label for="p2_unified_form_ownership">Form of Ownership<span class="required"></span></label>
          <input type="text" id="p2_unified_form_ownership" name="p2_unified_form_ownership" data-column="form_of_ownership" required>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="input-wrapper col-lg-6 col-12">
        <label for="unified_scope">Scope of Work<span class="required"></span></label>
        <select class="form-select select2" id="unified_scope" name="unified_scope" data-column="scope" required data-spec-div="unified_scope_spec_div" required>
          <option value="New Construction" selected>New Construction</option>
          <option value="Erection">Erection</option>
          <option value="Addition">Addition</option>
          <option value="Alteration">Alteration</option>
          <option value="Renovation">Renovation</option>
          <option value="Conversion">Conversion</option>
          <option value="Repair">Repair</option>
          <option value="Moving">Moving</option>
          <option value="Raising">Raising</option>
          <option value="Accesory Building Structure">Accesory Building Structure</option>
          <option value="Legalization of Existing Building">Legalization of Existing Building</option>
          <option value="Others">Others(specify)</option>

        </select>
      </div>

      <div class="input-wrapper col-lg-6 col-12" id="unified_scope_spec_div">
        <label for="unified_scope_spec">Please Specify</label>
        <input type="text" name="unified_scope_spec" id="unified_scope_spec" data-column="scope_spec">
      </div>


    </div>






    <div class="row">
      <p class="fw-bold text-uppercase my-2 mx-3">Use or Character of Occupancy</p>
    </div>

    <div class="row">
      <div class="input-wrapper col-lg-4 col-12">
        <label class="">Group<span class="required"></span></label>
        <select class="form-select col-lg-6 col-12" id="p2_unified_group_occupancy" name="p2_unified_group_occupancy" required>
          <option value="Group A - Residential (Dewelling)">Group A - Residential (Dewelling)</option>
          <option value="Group B - Residential">Group B - Residential</option>
          <option value="Group C - Educational &amp; Recreational">Group C - Educational &amp; Recreational</option>
          <option value="Group D - Institutional">Group D - Institutional</option>
          <option value="Group E - Commercial">Group E - Commercial</option>
          <option value="Group F - Light Industrial">Group F - Light Industrial</option>
          <option value="Group G - Medium Industrial">Group G - Medium Industrial</option>
          <option value="Group H - Assembly (Occupant Load Less than 1000)">Group H - Assembly (Occupant Load Less than 1000)</option>
          <option value="Group I - Assembly (Occupant Load Less than 1000)">Group I - Assembly (Occupant Load Less than 1000)</option>
          <option value="Group J/1 - Agricultural">Group J-1 - Agricultural</option>
          <option value="Group J/2 - Accessories">Group J-2 - Accessories</option>
        </select>
      </div>



      <div class="input-wrapper col-lg-4 col-12">
        <label class="">Type<span class="required"></span></label>
        <select class="form-select col-lg-6 col-12" id="unified_group_category" required>

        </select>
      </div>

      <div class="input-wrapper col-lg-4 col-12" id="unified_group_category_spec_div">
        <label class="" style="margin-bottom:5px">Others(Specify)</label>
        <input type="text" id="unified_group_category_spec" name="unified_group_category_spec">
      </div>
    </div>

    <div id="unified_estimated_cost">

      <div class="row">
        <p class="fw-bold my-2 mx-3">ESTIMATED COST</p>
        <div class="input-wrapper col-lg col-12">
          <label for="p2_unified_building">Building<span class="required"></span></label>
          <input type="number" data-column="est_cost_building" id="p2_unified_building" name="p2_unified_building" required>
        </div>

        <div class="input-wrapper col-lg col-12">
          <label for="p2_unified_electrical">Electrical<span class="required"></span></label>
          <input type="number" data-column="est_cost_electrical" id="p2_unified_electrical" name="p2_unified_electrical" required>
        </div>

        <div class="input-wrapper col-lg col-12">
          <label for="p2_unified_mechanical">Mechanical<span class="required"></span></label>
          <input type="number" data-column="est_cost_mechanical" id="p2_unified_mechanical" name="p2_unified_mechanical" required>
        </div>


      </div>



      <div class="row">

        <div class="input-wrapper col-lg col-12">
          <label for="p2_unified_electronics">Electronics<span class="required"></span></label>
          <input type="number" data-column="est_cost_electronics" id="p2_unified_electronics" name="p2_unified_electronics" required>
        </div>

        <div class="input-wrapper col-lg col-12">
          <label for="p2_unified_plumbing">Plumbing<span class="required"></span></label>
          <input type="number" data-column="est_cost_plumbing" id="p2_unified_plumbing" name="p2_unified_plumbing" required>
        </div>

        <div class="input-wrapper col-lg col-12">
          <label for="p2_unified_ttl_est_cost" class="fw-bold">TOTAL ESTIMATED COST</span></label>
          <input type="number" data-column="est_cost_total" id="p2_unified_ttl_est_cost" name="p2_unified_ttl_est_cost" readonly>
        </div>
      </div>
    </div>


    <div class="row">
      <p class="fw-bold my-2 mx-3">DATE OF CONSTRUCTION</p>
      <div class="input-wrapper col-lg-6 col-12">
        <label for="p2_unified_pp_date_construction">Proposed Date of Construction<span class="required"></span></label>
        <input type="date" data-column="date_proposed_construction" id="p2_unified_pp_date_construction" name="p2_unified_pp_date_construction" required>
      </div>

      <div class="input-wrapper col-lg-6 col-12">
        <label for="p2_unified_exp_date_completion">Expected Date of Completion<span class="required"></span></label>
        <input type="date" data-column="date_estimated_completion" id="p2_unified_exp_date_completion" name="p2_unified_exp_date_completion" required>
      </div>

    </div>

    <!-- <div class="row ">
      <div class="input-wrapper col-lg-12 col-12">
      <label for="application_type" class="fw-bold">Application Type<span class="required"></span></label>
                    <select class="form-select w-100" id="unified_application_type" name="application_type" data-column="application_type" required>
                      <option value="">Please select an option</option>
                      <option value="Simple">Simple</option>
                      <option value="New">New</option>
                      <option value="Renewal">Renewal</option>
                      <option value="Complex">Complex</option>
                      <option value="Amendatory">Amendatory</option>
                    </select>
      </div>
                    
                  </div> -->

  </div>

</div>

<!-- </div> -->

<script>
  $(document).ready(function() {

    var char_occ_json; // Assuming this is declared globally

    // Perform AJAX request to get JSON data
    $.ajax({
      url: '../js-css/character_of_occupancy.json',
      dataType: 'json',
      success: function(data) {
        char_occ_json = data;

        // Populate the first select element with 'group' values
        var groupDisplay = document.getElementById('p2_unified_group_occupancy');
        // populateSelect(groupDisplay, char_occ_json, 'name');

        // Trigger change event to initialize the second select element with categories
        $(groupDisplay).change();
      },
      error: function(xhr, status, error) {
        console.error('Error fetching data:', error);
      }
    });

    // Function to populate a select element with options
    function populateSelect(selectElement, data, property) {
      for (var key in data) {
        if (data.hasOwnProperty(key)) {
          var value = data[key][property];
          var optionElement = document.createElement('option');
          optionElement.value = key; // Set value as the key (group name)
          optionElement.textContent = value;
          selectElement.appendChild(optionElement);
        }
      }
    }

    // Add an event listener for the change event on the first select element (group)
    $('#p2_unified_group_occupancy').change(function() {
      // Clear existing options in the second select element (category)
      try {
        $('#unified_group_category').empty();

        // Get the selected group name including key and name
        var selectedGroupName = $(this).val();

        // Extract the key (group name) from the selected group name
        var selectedGroupNameKey = selectedGroupName.split(' - ')[0];

        // Get the selected group's category array
        var selectedGroupCategory = char_occ_json[selectedGroupNameKey].category;

        // Populate the second select element with options (categories)
        for (var i = 0; i < selectedGroupCategory.length; i++) {
          var optionElement = document.createElement('option');
          optionElement.value = selectedGroupCategory[i];
          optionElement.textContent = selectedGroupCategory[i];
          $('#unified_group_category').append(optionElement);
        }

      } catch (error) {
        console.log(error)

      }

    });






    <?php
    $unified_gen = select('f_unified', "`id` = '$project_unified'");

    // print_r($_SESSION);

    if (mysqli_num_rows($unified_gen) > 0) {

      while ($row = mysqli_fetch_assoc($unified_gen)) {
        // print_r($row);

    ?>

        $("#p2_unified_building").val("<?php echo $row['est_cost_building'] ?>");
        $("#p2_unified_electrical").val("<?php echo $row['est_cost_electrical'] ?>");
        $("#p2_unified_mechanical").val("<?php echo $row['est_cost_mechanical'] ?>");
        $("#p2_unified_electronics").val("<?php echo $row['est_cost_electronics'] ?>");
        $("#p2_unified_plumbing").val("<?php echo $row['est_cost_plumbing'] ?>");
        $("#p2_unified_ttl_est_cost").val("<?php echo $row['est_cost_total'] ?>");
        $("#p2_unified_pp_date_construction").val("<?php echo $row['date_proposed_construction'] ?>");
        $("#p2_unified_exp_date_completion").val("<?php echo $row['date_estimated_completion'] ?>");
        $("#p2_unified_group_occupancy").val("<?php echo $row['occupancy_group'] ?>");
        $("#unified_group_category").val("<?php echo $row['occupancy_type'] ?>");
        $("#unified_scope").val("<?php echo $row['scope'] ?>");
        $("#p2_unified_form_ownership").val("<?php echo $row['form_of_ownership'] ?>");
        $("#p2_unified_area_no").val("<?php echo $row['area_no'] ?>");

        // $("#unified_scope_spec").val("<?php //echo $row['scope_spec'] 
                                          ?>")




        // console.log('<?php //echo $row['scope'] 
                        ?>');

        // console.log("retrieval")
        // console.log('<?php //echo $row['occupancy_specify'] 
                        ?>');





    <?php


        if (strtolower($row['occupancy_type'])   == "other" || strtolower($row['occupancy_type']) == "others") {
          echo "$('#p2_unified_specify').show();";
          echo "$('#unified_group_category_spec').val('" . $row['occupancy_specify'] . "');";
        } else {
          echo "$('#unified_group_category_spec_div').hide();";
        }
        // 
        // echo "console.log('" . strtolower($row['scope']) . "');";

        if (strtolower($row['scope'])   == "other" || strtolower($row['scope']) == "others") {
          echo "$('#unified_scope_spec_div').show();";
          echo "$('#unified_scope_spec').val('" . $row['scope_spec'] . "');";
        } else {
          // echo "console.log('hide');";

          echo "$('#unified_scope_spec_div').hide();";
        }
      }
    };
    ?>


  });



  $("#p2_unified_form_ownership").change(function() {

    // let column = $("#" + this.id).data("column");
    let value = $("#" + this.id).val();
    try {
      update_ajax('f_unified', "form_of_ownership", value, " id = '<?php echo $project_unified ?>'");

    } catch (error) {
      console.log(error);
    }
  })




  $("#p2_unified_pp_date_construction").change(function() {

    let column = $("#" + this.id).data("column");
    let value = $("#" + this.id).val();
    try {
      update_ajax('f_unified', column, value, " id = '<?php echo $project_unified ?>'");

    } catch (error) {
      console.log(error);
    }


  })


  $("#p2_unified_exp_date_completion").change(function() {

    let column = $("#" + this.id).data("column");
    let value = $("#" + this.id).val();

    if ($("#p2_unified_pp_date_construction").val() > $("#p2_unified_exp_date_completion").val() == true) {

      alert("Project's estimated finish cannot be earlier than proposed start.");
      $("#p2_unified_exp_date_completion").val(0);
    } else {
      try {
        update_ajax('f_unified', column, value, " id = '<?php echo $project_unified ?>'");

      } catch (error) {
        console.log(error);
      }

    }
  })

  $("#p2_unified_pp_date_construction").change(function() {
  let parsedGivenDate = new Date($(this).val());
  let currentDate = new Date();

  console.log(parsedGivenDate.toDateString());
  console.log(currentDate.toDateString());

  // Compare the dates
  if (parsedGivenDate < currentDate) {
    console.log('The given date has already passed.');
    alert('The given date has already passed. Please select a valid date.');
    $(this).val('');
  }
});





  $("#unified_scope").change(function() {


    let column = $("#" + this.id).data("column");
    let value = $("#" + this.id).val();
    try {
      update_ajax('f_unified', column, value, " id = '<?php echo $project_unified ?>'");

    } catch (error) {
      console.log(error);
    }

    if (value.toLowerCase() == "other" || value.toLowerCase() == "others") {
      $("#" + $("#" + this.id).data("spec-div")).show();

    } else {
      $("#" + $("#" + this.id).data("spec-div")).hide();

    }

  })

  $("#unified_scope_spec").change(function() {

    let column = $("#" + this.id).data("column");
    let value = $("#" + this.id).val();
    try {
      update_ajax('f_unified', column, value, " id = '<?php echo $project_unified ?>'");

    } catch (error) {
      console.log(error);
    }


  })





  $("#p2_unified_group_occupancy").change(async function() {
    let column = $("#" + this.id).data("column");
    let value = $("#" + this.id).val();

    await sleep(2000); // Sleep for 2000 milliseconds

    // Assuming update_ajax returns a Promise, or you can wrap it in a Promise if not
    const updateGroupPromise = update_ajax('f_unified', "occupancy_group", value, " id = '<?php echo $project_unified ?>'");

    // Get the value of the newly rendered unified_group_category
    const category_group = $("#unified_group_category").val();
    // console.log(category_group);

    try {
      // Wait for the first update_ajax to complete
      await updateGroupPromise;

      // Now, call the second update_ajax
      await update_ajax('f_unified', "occupancy_type", category_group, " id = '<?php echo $project_unified ?>'");
    } catch (error) {
      console.error(error);
    }
  });


  $("#unified_group_category").change(function() {

    let value = $("#" + this.id).val();
    try {
      update_ajax('f_unified', "occupancy_type", value, " id = '<?php echo $project_unified ?>'");


    } catch (error) {
      console.log(error);
    }


    if (value.toLowerCase() == "other" || value.toLowerCase() == "others") {
      $("#unified_group_category_spec_div").show();
    } else {
      $("#unified_group_category_spec_div").hide();
    }

  })


  $("#unified_group_category_spec").change(function() {
    let value = $("#" + this.id).val();
    try {
      update_ajax('f_unified', "occupancy_specify", value, " id = '<?php echo $project_unified ?>'");


    } catch (error) {
      console.log(error);
    }

  })


  $("#p2_unified_area_no").change(function() {
    let value = $("#" + this.id).val();
    try {
      update_ajax('f_unified', "area_no", value, " id = '<?php echo $project_unified ?>'");


    } catch (error) {
      console.log(error);
    }

  })


  let unified_est_cost_inp = document.querySelectorAll('#unified_estimated_cost input:not(#p2_unified_ttl_est_cost)');

  unified_est_cost_inp.forEach(inp => {
    inp.addEventListener('change', function handleClick(event) {

      console.log($(this).val());

      if ($(this).val() == '') {
        $(this).val(0);
      }


      let column = $("#" + this.id).data("column");
      let value = $("#" + this.id).val();
      try {
        update_ajax('f_unified', column, value, " id = '<?php echo $project_unified ?>'");

      } catch (error) {
        console.log(error);
      }



      // let total = parseInt($("#p2_unified_ttl_est_cost").val());

      let building_cost = parseInt($("#p2_unified_building").val());
      let electrical_cost = parseInt($("#p2_unified_electrical").val());
      let mechanical_cost = parseInt($("#p2_unified_mechanical").val());
      let electronics_cost = parseInt($("#p2_unified_electronics").val());
      let plumbing_cost = parseInt($("#p2_unified_plumbing").val());

      // let this_value = parseInt($(this).val());

      // total = total + this_value;

      total = building_cost + electrical_cost + mechanical_cost + electronics_cost + plumbing_cost;



      $("#p2_unified_ttl_est_cost").val(total)
      update_ajax('f_unified', "est_cost_total", total, " id = '<?php echo $project_unified ?>'");

      // console.log($(this).val());
    })

  })

  // const myElement = document.getElementById("unified_group_category_spec");


  // // Add an event listener for the visibilitychange event directly to your element
  // myElement.addEventListener("visibilitychange", function() {
  //   // Check if the element is hidden or not
  //   if (myElement.hidden) {
  //     console.log("Element is hidden");
  //   } else {
  //     console.log("Element is visible");
  //   }
  // });
</script>


<script>
  //overall script 
  // $(document).ready(function() 

  $(window).on("load", function() {


    update_progress_bar("progress_bar_step_2", "#step_two_wrapper input[required], #step_two_wrapper select[required], #step_two_wrapper input[type='radio'][required]",
      "#step_two_wrapper input[required], #step_two_wrapper select[required], #step_two_wrapper input[type='radio'][required]")
    // Update the width of the progress bar


    let all_inp_step_two = document.querySelectorAll("#step_two_wrapper input[required], #step_two_wrapper select[required], #step_two_wrapper input[type='radio'][required]");

    all_inp_step_two.forEach(inp => {
      inp.addEventListener('change', function handleClick(event) {

        update_progress_bar("progress_bar_step_2", "#step_two_wrapper input[required], #step_two_wrapper select[required], #step_two_wrapper input[type='radio'][required]",
          "#step_two_wrapper input[required], #step_two_wrapper select[required], #step_two_wrapper input[type='radio'][required]")

      })
    })


    // // Select all input, select, and date inputs within the #step_two element
    // var allInputs = $("#step_two input, #step_two select, #step_two [type='date']");

    // // Filter for inputs that are empty or equal to ' '
    // var emptyOrWhitespaceInputs = allInputs.filter(function() {
    //     var inputValue = $(this).val();
    //     return $.trim(inputValue) === ''; // Check if the trimmed value is empty
    // });

    // // Now, emptyOrWhitespaceInputs contains the elements that are empty or equal to ' '

    // // Example: Add a red border to the filtered inputs
    // emptyOrWhitespaceInputs.css("border", "2px solid red");
    // emptyOrWhitespaceInputs.val('');

  })
</script>