<style>
  #step_two_wrapper .input-wrapper {
      position: relative;
  }

  #step_two_wrapper :is(select, input){
      border: 1px solid gray;
      border-radius: 6px;
      position: relative;
      margin: 10px;
      line-height: 6ex;
      height: 6ex;
      width: 100%;
      padding-left: 15px;

  }

  #step_two_wrapper [type~="checkbox"]{
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
    background-color: #245A94; /* Set the background color to your desired color */
    color: white; /* Set the text color to white */
    padding: 0px;
     /* Adjust the padding as needed */
}

</style>


<div id = "step_two_wrapper" class = "border border-dark p-4">

<div class="rectangle">
      <p style="font-size: 25px; margin-left: 8px;" class="fw-bold">LOCATIONAL</p>
    </div>

    
<?php
$corp = select('project', "`id` = '$project_id'");

if (mysqli_num_rows($corp) > 0) {

  if ($row = mysqli_fetch_assoc($corp)) {
    // echo trim($row['corporate_owned']);
    if(intval($row['corporate_owned']) == 1){
      echo `<div class="row">
      <div class="input-wrapper col">
        <label for="p2_loc_corp_name">CORPORATION NAME</label>
        <input type="text" id="p2_locational_corp_name" name="p2_locational_corp_name">
      </div>
      <div class="input-wrapper col">
        <label for="p2_loc_corp_address">CORPORATION ADDRESS</label>
        <input type="text" id="p2_locational_corp_address" name="p2_locational_corp_address">
      </div>
      <div class="input-wrapper col">
        <label for="p2_loc_building_improvement">BUILDING IMPROVEMENT</label>
        <input type="text" id="p2_loc_building_improvement" name="p2_loc_building_improvement">
      </div>
    </div>`;
    }


  }

}

?>

<!-- 
    <div class="row">
      <div class="input-wrapper col">
        <label for="p2_loc_corp_name">CORPORATION NAME</label>
        <input type="text" id="p2_locational_corp_name" name="p2_locational_corp_name">
      </div>
      <div class="input-wrapper col">
        <label for="p2_loc_corp_address">CORPORATION ADDRESS</label>
        <input type="text" id="p2_locational_corp_address" name="p2_locational_corp_address">
      </div>
      <div class="input-wrapper col">
        <label for="p2_loc_building_improvement">BUILDING IMPROVEMENT</label>
        <input type="text" id="p2_loc_building_improvement" name="p2_loc_building_improvement">
      </div>
    </div> -->




    <div class="row">
      <p class="fw-bold">RIGHT OVER LAND</p>
      <div class="input-wrapper col">
        <label for="p2_loc_rol">RIGHT OVER LAND</label>
        <select class="form-select" id="p2_loc_rol" name="p2_loc_rol">
          <option value="" selected>OWNER</option>
          <option value="option1">LEASE</option>
          <option value="option2">OTHER (Specify)</option>
        </select> 
      </div>

      <div class="input-wrapper col">
        <label for="p2_loc_elu">EXISTING LAND USE OF PROJECT SITE</label>
        <select class="form-select" id="p2_loc_elu" name="p2_loc_elu">
          <option value="" selected>RESIDENTIAL</option>
          <option value="option1">INDUSTRIAL</option>
          <option value="option2">INSTITUTIONAL</option>
          <option value="option1">COMMERCIAL</option>
          <option value="option2">OTHERS(Specify)</option>
      </select> 
      </div>

      <div class="input-wrapper col">
        <label for="p2_loc_proj_nature">PROJECT NATURE</label>
        <select class="form-select" id="p2_loc_proj_nature" name="p2_loc_proj_nature">
          <option value="" selected>NEW DEVELOPMENT</option>
          <option value="option1">IMPROVEMENT</option>
          <option value="option2">OTHER (Specify)</option>
      </select> 
      </div>
    </div>

    <div class="row">
      <div class="input-wrapper">
        <label for="p2_loc_proj_tenure">PROJECT TENURE</label>
        <div class="col-sm-4">
          <select class="form-select" id="p2_loc_proj_tenure" name="p2_loc_proj_tenure">
            <option value="" selected>PERMANENT</option>
            <option value="option1">TEMPORARY</option>
            <option value="option2">VACANT/IDLE</option>
            <option value="option3">AGRICULTURAL (Specify Crop)</option>
            <option value="option4">TENANTED</option>
            <option value="option5">NON-TENANTED</option>
        </select> 
        </div>
        
      </div>
    
    </div>

    <div class="row">
      <p class="input-wrapper fw-bold">If the project applied for the subject written notice(s) from this commission and its 
        deputized zoning administrator to the effect requiring for presentation of locational 
        clearance/certificate of zoning compliance/czc.</p>
        <select class="form-select col input-wrapper my-1" id="p2_loc_czc" name="p2_loc_czc">
          <option value="" selected>YES</option>
          <option value="option1">NO</option>
          <option value="option2">other HSRC officer of zoning administrator who issued the notice(s)</option>
          
        </select> 
        
      <div class="input-wrapper col">
        <label for="p2_loc_date_notice">DATE OF NOTICE</label>
        <input type="date" id="p2_loc_date_notice" name="p2_loc_date_notice">
      </div>

      <div class="input-wrapper col">
        <label for="p2_loc_order_notice">ORDER NOTICE</label>
        <input type="text" id="p2_loc_order_notice" name="p2_loc_order_notice">
      </div>
    </div>

    <div class="row">
      <p for="p2_loc_czc_similar_app" class="fw-bold">Is the project applied for the subject of similir application(s) with other offices of the 
        commission and/or deputized zoning administrator?</p>

        <div class="col-sm-4">
          <select class="form-select" id="p2_loc_czc_similar_app" name="p2_loc_czc_similar_app">
            <option value="" selected>YES</option>
            <option value="option1">NO</option>
          </select> 
        </div>
        

        <p class="fw-bold">If yes, please answer the following: </p>

        <div class="row">
        <div class="input-wrapper col">
          <label for="p2_loc_similar_application">(A) Other HSRC Office(s) where similar application(s) was/were filled: </label>
          <input type="text" id="p2_loc_similar_application" name="p2_loc_similar_application">
        </div>

        <div class="input-wrapper col">
          <label for="p2_loc_date_filled">(B) Date(s) Filled: </label>
          <input type="date" id="p2_loc_date_filled" name="p2_loc_date_filled">
        </div>

        </div>

        

        <div class="row">
          <div class="input-wrapper col w-100">
              <label for="p2_loc_action_taken">(C) Action(s) Taken by office(s) mentioned in (A):  </label>
              <input type="text" id="p2_loc_action_taken" name="p2_loc_action_taken">
          </div>
        </div>

    </div>

    <div class="row">
      <p class="fw-bold mb-0">PREPARED MODE LEASE OF DECISION</p>

      <div class="row">
      <select class="form-select col" id="p2_loc_pmld" name="p2_loc_pmld">
        <option value="" selected>PICK-UP</option>
        <option value="option1">BY MAIL, ADDRESS TO</option>
        
      </select> 

      <div class="input-wrapper col">
        <label for="p2_loc_date_signed">SIGNED DATE</label>
        <input type="date" id="p2_loc_date_signed" name="p2_loc_date_signeds">
      </div>

      </div>
    
    </div>

      
  <hr>





  <div class="rectangle">
      <p style="font-size: 25px; margin-left: 8px;" class="fw-bold">SANITARY</p>
  </div>

  

  <div class="row">
    <p class="fw-bold">FIXTURES TO BE INSTALLED: </p>

    <table style="width: 100%;" class="table table-bordered">
      <tr>
        <th scope="col">NO.</th>
        <th scope="col">QUANTITY</th>
        <th scope="col">STATUS</th>
        <th scope="col">FIXTURES</th>
      </tr>
      <tr>
        <td>1</td>
        <td>2</td>
        <td>new</td>
        <td>faucet</td>
      </tr>
      <tr>
        <td colspan="2">TOTAL</td>
        <td></td>
        <td></td>
      </tr>


    </table>

    <div class="input-wrapper col-4">
          <label for="p2_unified_qty">QUANTITY</label>
          <input type="number" id="p2_unified_qty" name="p2_unified_qty">
      </div>

      <div class="input-wrapper col-4">
        <label for="p2_unified_status">STATUS</label>
        <select class="form-select" id="p2_unified_status" name="p2_unified_status">
            <option value="" selected>NEW</option>
            <option value="option1">EXISTING</option>
        </select>
      </div>

      <div class="input-wrapper col-4">
        <label for="p2_unified_fixtures">FIXTURES</label>
        <select class="form-select select2" id="p2_unified_fixtures" name="p2_unified_fixtures" data-live-search="true" data-live-search-normalize="true" data-live-search-placeholder="Search...">
            <option value="" selected>WATER CLOSET</option>
            <option value="option1">FLOOR DRAIN</option>
            <option value="option2">LAVATORIES</option>
            <option value="option3">KITCHEN SINK</option>
            <option value="option4">FAUCET</option>
            <option value="option5">SHOWER HEAD</option>
            <option value="option6">WATER METER</option>
            <option value="option7">GREASE TRAP</option>
            <option value="option8">BATH TUBS</option>
            <option value="option9">SLOP SINK</option>
            <option value="option10">URINAL</option>
            <option value="option11">AIR CONDITIONING UNIT</option>
            <option value="option12">WATER TANK/RESERVOIR</option>
            <option value="option13">BIDETTE</option>
            <option value="option14">LAUNDRY TRAYS</option>
            <option value="option15">DENTAL CUSPIDOR</option>
            <option value="option16">GAS HEATER</option>
            <option value="option17">ELECTRICAL HEATER</option>
            <option value="option18">WATER BOILDER</option>
            <option value="option19">DRINKING FOUNTAIN</option>
            <option value="option20">BAR SINK</option>
            <option value="option21">SODA FOUNTAIN SINK</option>
            <option value="option22">LABORATORY SINK</option>
            <option value="option23">STERILIZER</option>
            <option value="option24">SWIMMING POOL</option>
        </select>
      </div>

    </div>

  <button class="btn btn-primary mx-2">Add</button>

  <div class="row my-1">
      <div class="input-wrapper col">
        <label for="p2_unified_water_supply">WATER SUPPLY</label>
        <select class="form-select" id="p2_unified_water_supply" name="p2_unified_water_supply">
            <option value="" selected>SHALLOW WELL</option>
            <option value="option1">DEEP WELL & PUMP SET</option>
            <option value="option2">CITY/MUNICIPAL/ WATER SYSTEM</option>
            <option value="option3">OTHERS</option>
        </select>
    </div>


      <div class="input-wrapper col">
        <label for="p2_unified_system_disposal">SYSTEM OF DISPOSAL</label>
        <select class="form-select" id="p2_unified_system_disposal" name="p2_unified_system_disposal" >
            <option value="" selected>WASTE WATER TREATMENT PLANT</option>
            <option value="option1">SEPTIC VAULT/IMHOPE TANK</option>
            <option value="option2">SANITARY SEWER CONNECTION</option>
            <option value="option3">SUB-SURFACE SAND FILTER</option>
            <option value="option4">SURFACE DRAINAGE</option>
            <option value="option5">STREET CANAL</option>
            <option value="option6">WATER COURSE</option>
        </select>
      </div>
        
  </div>

  <div class="form-group row my-4">
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="water_dis_system" name="water_dis_system" value="waterDistributionSystem">
        <pan class="form-check-label mx-2" for="waterDistributionSystem" style="font-size: 13px;">WATER DISTRIBUTION SYSTEM</span>
      </div>
    </div>

    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="sanitary_sewer_system" name="sanitary_sewer_system" value="sanitarySewerSystem">
        <span class="form-check-label mx-2" for="sanitarySewerSystem" style="font-size: 13px;">SANITARY SEWER SYSTEM</span>
      </div>
    </div>

    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="storm_drainage_system" name="storm_drainage_system" value="stormDrainageSystem">
        <span class="form-check-label mx-2" for="stormDrainageSystem" style="font-size: 13px;">STORM DRAINAGE SYSTEM</span>
      </div>
    </div>
  </div>


  <hr>


  <div class="rectangle">
      <p style="font-size: 25px; margin-left: 8px;" class="fw-bold">ELECTRICAL</p>
  </div>

    <div class="row">
      <p class="fw-bold">SUMMARY OF ELECTRICAL LOADS / CAPACITITES APPLIED FOR</p>
      <div class="input-wrapper col-4">
        <label for="p2_electrical_tcl">TOTAL CONNECTION LOAD</label>
        <input type="number" placeholder="kVA" class="m-2" id="p2_electrical_tcl" name="p2_electrical_tcl"> 
      </div>

      <div class="input-wrapper col-4">
        <label for="p2_electrical_ttc">TOTAL TRANSFORMER CAPACITY</label>
        <input type="number" placeholder="kVA" class="m-2" id="p2_electrical_ttc" name="p2_electrical_ttc"> 
      </div>

      <div class="input-wrapper col-4">
        <label for="p2_electrical_tgc">TOTAL GENERATOR/UPS CAPACITY</label>
        <input type="number" placeholder="kVA" class="m-2" id="p2_electrical_tgc" name="p2_electrical_tgc"> 
      </div>
    </div>

    <div class="row">
      <p class="fw-bold"> SUPERVISOR / IN-CHARGE OF ELECTRICAL WORKS</p>
      <div class="form-group row">
        <div class="col">
          <div class="form-check gap-2">
            <input class="form-check-input" type="checkbox" id="p2_electrical_prof_engr" name="p2_electrical_prof_engr" value="waterDistributionSystem">
            <span class="form-check-label mx-2" for="waterDistributionSystem" style="font-size: 13px;">PROFESSIONAL ELECTRICAL ENGINEER</span>
          </div>
        </div>
      
        <div class="col">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="p2_electrical_reg_engr" name="p2_electrical_reg_engr" value="sanitarySewerSystem">
            <span class="form-check-label mx-2" for="sanitarySewerSystem" style="font-size: 13px;">REGISTERED ELECTRICAL ENGINEER</span>
          </div>
        </div>
      
        <div class="col">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="p2_electrical_master_elec" name="p2_electrical_master_elec" value="stormDrainageSystem">
            <span class="form-check-label mx-2" for="stormDrainageSystem" style="font-size: 13px;">REGISTERED MASTER ELECTRICIAN</span>
          </div>
        </div>
      </div>
    </div>

    <hr>

    



    <div class="rectangle">
      <p style="font-size: 25px; margin-left: 8px;" class="fw-bold my-4">UNIFIED</p>
  </div>

    <div class="row">
      <div class="input-wrapper col" style="margin-top: -12px;">
        <div class="col">
          <label for="p2_unified_area_no">AREA NO.</label>
          <input type="number" id="p2_unified_area_no" name="p2_unified_area_no">
        </div>
      </div>

      <div class="input-wrapper col" style="margin-top: -12px;">
        <div class="col">
          <label for="p2_unified_form_ownership">FORM OF OWNERSHIP</label>
          <input type="text" id="p2_unified_form_ownership" name="p2_unified_form_ownership">
        </div>
      </div>
    </div>

    <div class="row">
      <p class="fw-bold">USE OR CHARACTER OF OCCUPANCY</p>
    </div>

    <div class="row">
      <div class="col">
        <p class="fw-bold mx-2">GROUP</p>
        <select class="form-select col" id="p2_unified_group_occupancy" name="p2_unified_group_occupancy">
        <option value="option1" selected>RESIDENTIAL (DWELLINGS)</option>
        <option value="option2">RESIDENTIAL</option>
        <option value="option3">EDUCATIONAL & RECREATIONAL</option>
        <option value="option4">INSTITUTIONAL</option>
        <option value="option5">COMMERCIAL</option>
        <option value="option6">LIGHT INDUSTRIAL</option>
        <option value="option7">MEDIUM INDUSTRIAL</option>
        <option value="option8">ASSEMBLY (ocuupant Load less than 1,00)</option>
        <option value="option9">ASSEMBLY (Occupant Load 1,000 or more)</option>
        <option value="option10">AGRICULTURAL</option>
        <option value="option11">ACCESSORIES</option>
      </select> 
      </div>
      

      <div class="col">
        <p class="fw-bold mx-2">TYPE</p>
        <select class="form-select col" id="">
          <!-- <option value="" selected>RESIDENTIAL (DWELLINGS)</option>
          <option value="option1">RESIDENTIAL</option>
          <option value="option1">EDUCATIONAL & RECREATIONAL</option>
          <option value="option1">INSTITUTIONAL</option>
          <option value="option1">COMMERCIAL</option>
          <option value="option1">LIGHT INDUSTRIAL</option>
          <option value="option1">MEDIUM INDUSTRIAL</option>
          <option value="option1">ASSEMBLY (ocuupant Load less than 1,00)</option>
          <option value="option1">ASSEMBLY (Occupant Load 1,000 or more)</option>
          <option value="option1">AGRICULTURAL</option>
          <option value="option1">ACCESSORIES</option> -->
        </select> 
      </div>

      <div class="col">
      <p class="fw-bold mx-2">OTHERS</p>
        <div class="input-wrapper">
          <div class="col">
            <label for="p2_unified_specify">SPECIFY</label>
            <input type="number" id="p2_unified_specify" name="p2_unified_specify">
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <p class="fw-bold">ESTIMATED COST</p>
      <div class="input-wrapper col">
          <label for="p2_unified_building">BUILDING</label>
          <input type="number" id="p2_unified_building" name="p2_unified_building">
      </div>

      <div class="input-wrapper col">
        <label for="p2_unified_electrical">ELECTRICAL</label>
        <input type="number" id="p2_unified_building" name="p2_unified_building">
      </div>

      <div class="input-wrapper col">
        <label for="p2_unified_mechanical">MECHANICAL<span class="">*</span></label>
        <input type="number" id="p2_unified_mechanical" name="p2_unified_mechanical">
      </div>

    
    </div>



    <div class="row">

      <div class="input-wrapper col">
        <label for="p2_unified_electronics">ELECTRONICS</label>
        <input type="number" id="p2_unified_electronics" name="p2_unified_electronics">
      </div>

      <div class="input-wrapper col">
        <label for="p2_unified_plumbing">PLUMBING</label>
        <input type="number" id="p2_unified_plumbing" name="p2_unified_plumbing">
      </div>

      <div class="input-wrapper col">
          <label for="p2_unified_ttl_est_cost" class="fw-bold">TOTAL ESTIMATED COST</label>
          <input type="number" id="p2_unified_ttl_est_cost" name="p2_unified_ttl_est_cost"> 
      </div>
    </div>


    <div class="row">
      <p class="fw-bold">DATE OF CONSTRUCTION</p>
      <div class="input-wrapper col">
          <label for="p2_unified_pp_date_construction">PROPOSED DATE OF CONSTRUCTION</label>
          <input type="date" id="p2_unified_pp_date_construction" name="p2_unified_pp_date_construction">
      </div>

      <div class="input-wrapper col">
        <label for="p2_unified_exp_date_completion">EXPECTED DATE OF COMPLETION<span class="required text-danger">*</span></label>
        <input type="date" id="p2_unified_exp_date_completion" name="p2_unified_exp_date_completion">
      </div>
    
    </div>



</div>