

    <div id = "electrical_form" style=" width: 22cm; border: 1px solid black; height: 402.6mm;"  class = "m-auto print">
        
    <style>
        #test > *{
        
            display: inline;
            flex-direction: column;
            margin-right: 8px;
            margin-bottom: 10px;
        }

        #electrical_form input {
            font-weight: bold;
            font-size: 11px;
            margin-left: 5px;
        }
        .input-field {
            border: 1px solid black; 
            float: left; 
            border-top: 0px; 
            border-left: 0px; 
            border-right: 0px; 
            width: 205px; 
            height: 17px;
        }
        
        /* .input-field-box2 {
            border: 1px solid black; 
            float: left; 
            border-top: 0px; 
            border-left: 0px; 
            border-right: 0px; 
            width: 205px; 
            height: 17px;
        } */
        
        .input-field-date {
            border: 1px solid black; 
            float: left; 
            border-top: 0px; 
            border-left: 0px; 
            border-right: 0px; 
            width: 140px; 
            height: 17px;
        }
        
        .input-field-short {
            border: 1px solid black;
            float: left;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            vertical-align: middle;
            width: 85px;
            height: 17px;
        }
        
        .input-field-locational {
            border: 1px solid black; 
            border-top: 0px; 
            border-left: 0px; 
            border-right: 0px; 
            width: 160px; 
            height: 17px;
        }
        .input-field-locational-loc {
            border: 1px solid black; 
            border-top: 0px; 
            border-left: 0px; 
            border-right: 0px;
            width: 360px;
            height: 17px;
        }
        .input-improvement{
            border: 1px solid black; 
            border-top: 0px; 
            border-left: 0px; 
            border-right: 0px; 
            width: 150px; 
            height: 17px;
        }
        .input-signatures{
            border: 1px solid black; 
            border-top: 0px; 
            border-left: 0px; 
            border-right: 0px;
            width: 300px;
            height: 17px;
        }
        
        .input-field-qty {
            border: 1px solid black; 
            float: left; 
            border-top: 0px; 
            border-left: 0px; 
            border-right: 0px; 
            width: 80px; 
            height: 17px;
        }
        
        .input-field-year {
            border: 1px solid black;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            width: 50px;
            height: 17px;
            /* margin-bottom: 4px; */
        }
        
        .input-field-100 {
            border: 1px solid black;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            width: 100px;
            height: 17px;
            /* margin-bottom: 4px; */
        }

        .checkbox{
            width: 13px;
            height: 13px;
            margin: 0;
            padding: 0;
            vertical-align: middle;
        }
        
        .custom-align {
            display: flex;
            align-items: center;
        }
        
        
        .form-check {
            margin-bottom: -2px; /* Adjust this value as needed */
        }
        
        .font-size{
            font-size: 10px;
        }
        .font-size-p{
            font-size: 10px;
        }
        
        .underline {
            border-bottom: 1px solid black; 
        }
        .underline-2 {
            border-bottom: 2px solid black; 
        }
        /* .vertical-division {
            border-left: 2px solid #000; 
            height: 100%; 
        } */
        /* .vertical-line::before {
            content: "";
            border-left: 2px solid #000; 
            height: 24.15222mm; 
            position: absolute;
            margin-left: 180px;
            margin-top: -8px; 
        } */
        /* .vertical-line-2::before {
            content: "";
            border-left: 2px solid #000; 
            height: 24.15222mm; 
            position: absolute;
            margin-left: 440px;
            margin-top: -8px; 
        } */
        #feature_row{
            margin-bottom: 5px;
        }

        @media print {


        @page {
            width: 22cm;
            /* height: 39cm; */
            height: auto !important;

        }

        html,
        body {
            height: auto !important;
            /* overflow: hidden; */
            min-height: auto;
            margin: 0;
        }


        #electrical_form {
            margin-top: -90px !important;
            /* padding-top: 5px !important; */
            transform: scale(0.90);
            background-color: red;
            /* display: none; */
            margin: 0;
            height: auto;
            padding: 0 !important;

            border: none !important;
        }
    }   
    
    </style>



    <p class="my-3 text-center text-uppercase" style="font-size: 10px;"><b>republic of the philippines</b>  <br>
        <b>municipality of nasugbu</b>  <br> province of batangas <br>
        area code 1019-v</p>
    <p class="my-0 text-center text-uppercase fw-bold fs-6" style="font-size: 9px;">office of the building official</p>
    <p class="my-3 text-center text-uppercase fw-bold fs-2">electrical permit</p>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="application_no" class="mx-3 text-uppercase fw-bold" style="font-size: 10px;">application no.</label>
                <!-- <input class="mx-3 form-control w-50" style="height: 25px;" type="text" placeholder=""> -->
                <?php
                $table_id = "electrical_app_no";
                require "no_table.php";
                
                ?>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group d-block justify-content-center">
                <label for="ep_no" class="mx-3 text-uppercase fw-bold" style="font-size: 10px;">ep no.</label>
                <!-- <input class="mx-3 form-control w-50" style="height: 25px;" type="text" placeholder=""> -->
                <?php
                $table_id = "electrical_ep_no";
                require "no_table.php";
                
                ?>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group d-block justify-content-end">
                <label for="bp_no" class="mx-3 text-uppercase fw-bold" style="font-size: 10px;">building permit no.</label>
                <!-- <input class="mx-3 form-control w-50" style="height: 25px;" type="text" placeholder=""> -->
                <?php
                $table_id = "electrical_building_permit_no";
                require "no_table.php";
                
                ?>
            </div>
        </div>
    </div>

    <p class="mx-4 my-1 font-size text-start text-uppercase fw-bold ">box 1 | (to be accomplished in print by the owner/applicant)</p>

    <div class="mx-2 border rounded border-dark " style="height: 105.6mm;">
        <div class="row">
            <div class="col">
                <label for="owner_name" class="mx-2 mt-0 font-size text-uppercase fw-bold">owner/applicant</label>
                <!-- <input type="text" class="input-field-locational" style="font-size: 10px; margin-top: -3px; margin-left: 10px" id="owner_name" name="owner_name"> -->
            </div>
            <div class="col">
                <label for="lastname" class="mx-2 mt-0 mb-0 font-size text-uppercase fw-bold">lastname</label>
                <input type="text" class="input-field-date" style="font-size: 10px; margin-top: 6px;" id="lastname" name="lastname">
            </div>
            <div class="col">
                <label for="firstname" class="mx-2 mt-0 mb-0 font-size text-uppercase fw-bold">firstname</label>
                <input type="text" class="input-field-date" style="font-size: 10px; margin-top: 6px;" id="firstname" name="firstname">
            </div>
            <div class="col">
                <label for="m.i" class="mx-2 mt-0 mb-0 font-size text-uppercase fw-bold">m.i</label>
                <input type="text" class="input-field-date" style="font-size: 10px; margin-top: 6px;" id="middle_initial" name="middle_initial">
            </div>
            <div class="col">
                <label for="tin" class="mx-2 mt-0 mb-0 font-size text-uppercase fw-bold">tin</label>
                <input type="text" class="input-field-date" style="font-size: 10px; margin-top: 7px;" id="tin" name="tin">
            </div>
        </div>
        
        <div class="underline w-100" style="margin-top: -2px;"></div>
        
        

        <div class="row">
            <div class="col-4">
                <label for="construction_owned" class="mx-2 font-size text-uppercase fw-bold">for construction owned</label>
                <div class="d-inline-flex">
                    <p class="mx-2 mb-0 mt-1 font-size text-start text-uppercase fw-bold" style="white-space: nowrap;">by an enterprise</p>
                    <!-- <input id="construction_owned" name="construction_owned" class="input-improvement" type="text" style="font-size: 11px; margin-top: 8px; "> -->
                </div>
            </div>
            <div class="col-4">
                <label for="form_of_ownership" class="mx-2 font-size text-uppercase fw-bold">form of ownership</label>
                <input id="electrical_form_ownership" name="form_of_ownership" class="input-field" type="text" style="font-size: 11px; margin-top: 9px;">
            </div>
            <div class="col-4">
                <label for="character_occupancy" class="mx-2 font-size text-uppercase fw-bold">use or character of occupancy</label>
                <input id="character_occupancy" name="character_occupancy" class="input-field" type="text" style="font-size: 11px; margin-top: 9px; width: 250px;">
            </div>
        </div>
        
        <div class="underline w-100" style="margin-top: -2px;"></div>
        

        <div class="row">
            <div class="col">
                <label for="address" class="mx-2 font-size text-uppercase fw-bold">address</label>
                <!-- <p class="mx-3 font-size-p text-start text-uppercase fw-bold"></p> -->
            </div>
            <div class="col" style="margin-left: -40px;">
                <label for="no" class="mx-2 font-size text-uppercase fw-bold">no.</label>
                <input id="no" name="no" class="mx-2 input-field-qty" type="number" style="font-size: 11px; margin-top: -3px;">
            </div>
            <div class="col" style="margin-left: -20px;">
                <label for="street" class="mx-2 font-size text-uppercase fw-bold">street</label>
                <input id="street" name="street" class="mx-2 input-field-qty" type="text" style="font-size: 11px; margin-top: -3px;">
            </div>
            <div class="col" style="margin-left: -20px;">
                <label for="barangay" class="mx-2 font-size text-uppercase fw-bold">barangay</label>
                <input id="applicant_barangay_elec" name="applicant_barangay_elec" class="mx-2 input-field-qty" type="text" style="font-size: 11px; margin-top: -3px;">
            </div>
            <div class="col" style="margin-left: -20px;">
                <label for="city_municipality" class="mx-2 font-size text-uppercase fw-bold">city/municipality</label>
                <input id="city_municipality" name="city_municipality" class="mx-2 input-field-qty" type="text" style="font-size: 11px; margin-top: -3px;" value="Nasugbu">
            </div>
            <div class="col" style="margin-left: -20px;">
                <label for="zip_code" class="mx-2 font-size text-uppercase fw-bold">zip code</label>
                <input id="zip_code" name="zip_code" class="input-field-qty" type="number" style="font-size: 11px; margin-top: -3px;" value="4231">
            </div>
            <div class="col" style="margin-left: -10px;">
                <label for="telephone_no" class="mx-2 font-size text-uppercase fw-bold">telephone no</label>
                <input id="telephone_no" name="telephone_no" class="input-field" type="number" style="font-size: 11px; margin-bottom: 4px; width: 116px">
            </div>
        </div>
        
        <div class="underline w-100" style="margin-top: -8px;"></div>
        
        
        <div class="row" style="margin-bottom: -19px;">
            <div class="col">
                <div class="d-inline-flex">
                    <p class="mx-3 font-size-p text-start text-uppercase fw-bold" style="white-space: nowrap;">location of construction: </p>
                </div>
            </div>
            <div class="col">
                <div class="d-inline-flex">
                    <p class=" font-size-p text-start text-uppercase fw-bold">lot no. </p>
                    <input id="electrical_lot_no" name="electrical_lot_no" class="input-field-year" type="number" style="font-size: 11px; margin-bottom: 2px;">
                </div>
            </div>
            <div class="col">
                <div class="d-inline-flex" style="margin-left: -50px;">
                    <p class="font-size-p text-start text-uppercase fw-bold">blk. no</p>
                    <input id="electrical_blk_no" name="electrical_blk_no" class="input-field-year" type="number" style="font-size: 11px; margin-bottom: 2px;">
                </div>
            </div>
            <div class="col">
                <div class="d-inline-flex" style="margin-left: -90px;">
                    <p class="font-size-p text-start text-uppercase fw-bold" style="white-space: nowrap;">tct. no</p>
                    <input id="electrical_tct_no" name="electrical_tct_no" class="input-field" type="number" style="font-size: 11px; margin-bottom: 2px; width: 100px;">
                </div>
            </div>
            <div class="col">
                <div class="d-inline-flex" style="margin-left: -80px;">
                    <p class="font-size-p text-start text-uppercase fw-bold">tax dec. no</p>
                    <input id="electrical_tax_dec_no" name="electrical_tax_dec_no" class="input-field" type="number" style="width: 100px ; font-size: 11px; margin-top: 2px;">
                </div>
            </div>
        </div>
        <div class="row mb-0 mt-1">
            <div class="col">
                <div class="d-inline-flex">
                    <p class="mx-3 font-size-p text-start text-uppercase fw-bold">street</p>
                    <input id="electrical_street" name="electrical_street" type="text" style="font-size: 11px; margin-top: 3px; border: 1px solid black; float: left; border-top: 0px; border-left: 0px; border-right: 0px; width: 120px; height: 17px;">
                </div>
            </div>
            <div class="col">
                <div class="d-inline-flex">
                    <p class="mx-3 font-size-p text-start text-uppercase fw-bold">barangay</p>
                    <input id="electrical_barangay" name="electrical_barangay" type="text" style="font-size: 11px; margin-top: 3px; border: 1px solid black; float: left; border-top: 0px; border-left: 0px; border-right: 0px; width: 120px; height: 17px;">
                </div>
            </div>
            <div class="col">
                <div class ="d-inline-flex">
                    <p class="mx-3 font-size-p text-start text-uppercase fw-bold">city/municipality</p>
                    <input id="city_municipality" name="city_municipality" type="text" style="font-size: 11px; margin-top: 3px; border: 1px solid black; float: left; border-top: 0px; border-left: 0px; border-right: 0px; width: 120px; height: 17px;" 
                    value="Nasugbu, Batangas">
                </div>
            </div>
        </div>
        
        <div class="w-100" style="border-bottom: 1px solid black; margin-top: -12px; margin-top: -12px;"></div>

        
        <p class="mx-3 my-2 font-size-p text-start text-uppercase fw-bold" style="margin-bottom: 5px;">scope of work</p>
        
        <div class="row" style="margin-bottom: 5px;">
            <div class="col mx-2" id = "scope_of_work">
                <div id="feature_row_test" class="text-end row">
                    <div style="display:inline-flex" id = "test">
                        <input type="radio" name = "scope_of_work" id="new_installation" value="new installation">
                        <p class="text-start text-uppercase" style="font-size: 10px;">new installation</p>
                    </div>
                </div>
                <div id="feature_row_test" class="text-end row" style="margin-top: -8px;">
                    <div style="display:inline-flex" id = "test">
                        <input type="radio" name = "scope_of_work" id="annual_inspec" value="annual inspection">
                        <p class="text-start text-uppercase" style="font-size: 10px;">annual inspection</p>
                    </div>
                </div>
                <div id="feature_row_test" class="text-end row" style="margin-top: -8px;">
                    <div style="display:inline-flex" id = "test">
                        <input type="radio" name = "scope_of_work" id="temporary" value="temporary">
                        <p class="text-start text-uppercase" style="font-size: 10px;">temporary</p>
                    </div>
                </div>
            </div>

            <div class="col mx-2" id = "scope_of_work_1">
                <div id="feature_row_test" class="text-end row">
                    <div style="display:inline-flex" id = "test">
                        <input type="radio" name = "scope_of_work" id="reconnection" value="reconnection">
                        <p class="text-start text-uppercase" style="font-size: 10px;">reconnection of service entrance</p>
                    </div>
                </div>
                <div id="feature_row_test" class="text-end row" style="margin-top: -8px;">
                    <div style="display:inline-flex" id = "test">
                        <input type="radio" name = "scope_of_work" id="separation" value="separation">
                        <p class="text-start text-uppercase" style="font-size: 10px;">separation of service entrance</p>
                    </div>
                </div>
                <div id="feature_row_test" class="text-end row" style="margin-top: -8px;">
                    <div style="display:inline-flex" id = "test">
                        <input type="radio" name = "scope_of_work" id="upgrade" value="upgrading">
                        <p class="text-start text-uppercase" style="font-size: 10px;">upgrading of service entrance</p>
                    </div>
                </div>
            
            </div>

            <div class="col mx-2" id = "scope_of_work_1">
                <div id="feature_row_test" class="text-end row">
                    <div style="display:inline-flex" id = "test">
                        <input type="radio" name = "scope_of_work" id="relocation" value="relocation">
                        <p class="text-start text-uppercase" style="font-size: 10px;">relocation of service entrance</p>
                    </div>
                </div>
                <div id="feature_row_test" class="text-end row" style="margin-top: -8px;">
                    <div style="display:inline-flex" id = "test">
                        <input type="radio" name = "scope_of_work" id="other" value="other">
                        <p class="text-start text-uppercase" style="font-size: 10px;">others(specify)</p>
                        <input type="text" class="input-field" id="sw_others_specify">
                    </div>
                </div>
            </div>
        </div>
        <div class="underline w-100" style="margin-top: -6px;"></div>

        <div class="row">
            <p class="fs-6 text-center text-uppercase fw-bold">summary of electrical loads/capacities applied for</p>
        </div>

        <div class="underline w-100" style="margin-top: -15px;"></div>
        
        <div class="row ">
            <div class="col text-center">
                <div class="d-inline-block align-items-center justify-content-center">
                    <p class="my-2 font-size-p text-uppercase fw-bold">total connection load</p>
                    <div class="d-inline-flex align-items-center justify-content-center">
                        <input id="total_connection_load" name="total_connection_load" type="text" class="input-field-date text-center">
                        <p class="font-size-p fw-bold">kVA</p>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="d-inline-block align-items-center justify-content-center">
                    <p class="my-2 font-size-p text-uppercase fw-bold">total transformer capacity</p>
                    <div class="d-inline-flex align-items-center justify-content-center">
                        <input id="total_transformer_capacity" name="total_transformer_capacity" type="text" class="input-field-date text-center">
                        <p class="font-size-p fw-bold">kVA</p>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="d-inline-block align-items-center justify-content-center">
                    <p class="my-2 font-size-p text-uppercase fw-bold">total generator/ups capacity</p>
                    <div class="d-inline-flex align-items-center justify-content-center">
                        <input id="total_generator_capacity" name="total_generator_capacity" type="text" class="input-field-date text-center">
                        <p class="font-size-p fw-bold">kVA</p>
                    </div>
                </div>
            </div>
        </div>
        
        

        <!-- end of border 1 -->
    </div>
    <p class="mx-4 my-1 font-size text-start text-uppercase fw-bold ">box 2 | (to be accomplished in print by the design professional)</p>
    <div class="mx-2 border rounded border-dark " style="height: 44.0mm;">

        <div class="row mx-2 my-2">
            <p class="text-start text-uppercase fw-bold" style="font-size: 12px;">design professional, plans and specification</p>
        </div>

        <div class="underline w-100" style="margin-top: -19px;"></div>
        <div class="row">
            <div class="col pb-2 mx-5" style="margin-top: 30px;">
                <div class="row text-center align-items-center justify-content-center">
                <div class="d-inline-flex">
                    <input id="date" name="date" type="text" class="input-field">
                    <p class="mx-3 font-size-p text-start text-uppercase fw-bold">date</p>
                    <input id="date_qty" name="date_qty" type="text" class="input-field-qty">
                </div>
                <div class="row">
                    <p class="font-size-p text-uppercase fw-bold" style="margin-top: -10px;">profesional electrical engineer</p>
                    <p class="font-size-p text-uppercase" style="margin-top: -17px;">(signed and sealed over printed name)</p>
                </div>
                </div>
            </div>


            <div class="col pb-0" style="margin-top: 12px;">
                <div class="row ">
                    <div class="d-flex">
                        <span style="font-size: 10px" class="mx-1">ADDRESS</span>
                        <input type="text " class="input-underline w-100" style="height: 20px; margin-top: 10px;">
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -1px;"></div>
                <div class="row my-2">
                    <div class="col d-inline-flex gap-2 ">
                        <span style="font-size: 10px" class="mx-1">PRC NO.</span>
                        <input type="text " class="input-underline w-50" style="margin-top: 1px;">
                    </div>

                    <div class="col d-inline-flex gap-2">
                        <span style="font-size: 10px">VALIDITY</span>
                        <input type="text " class="input-underline w-50" style="margin-top: 1px;">
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -9px;"></div>
                <div class="row my-2">
                    <div class="col d-inline-flex gap-2">
                        <span style="font-size: 10px" class="mx-1">PTR NO.</span>
                        <input type="text " class="input-underline w-50" style="margin-top: 1px;">
                    </div>
                    <div class="col d-inline-flex gap-2">
                        <span style="font-size: 10px">DATE ISSUED</span>
                        <input type="text " class="input-underline w-50" style="margin-top: 1px;">
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -9px;"></div>
                <div class="row my-2 mb-0">
                    <div class="col d-inline-flex gap-2">
                        <span style="font-size: 10px" class="mx-1">ISSUED AT</span>
                        <input type="text " class="input-underline w-50" style="margin-top: 1px;">
                    </div>
                    <div class="col d-inline-flex gap-2">
                        <span style="font-size: 10px">TIN</span>
                        <input type="text " class="input-underline w-50" style="margin-top: 1px;">
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -2px;"></div>
            </div>
        </div>
        

        <!-- end of border 2 -->
    </div>
    <p class="mx-4 my-1 font-size text-start text-uppercase fw-bold">box 3 </p>
    <div class="mx-2 border rounded border-dark " style="height: 83.6mm;">
    
        <div class="row">
            <p class="mx-3 my-3 text-start text-uppercase fw-bold" style="font-size: 12px;">supervisor / in-charge of electrical works </p>
        </div>
        <div class="underline w-100" style="margin-top: -18px;"></div>

        <div class="row my-2" style="margin-left: 100px;">
            <div class="col mx-2 align-items-center" id="electric_engr">
                <div id="feature_row_test" class="text-end row">
                    <div style="display:inline-flex" id="test">
                        <input type="radio" name="electric_engr" id="electric_engr_1" value="professional engineer">
                        <p class="text-start text-uppercase fw-bold" style="font-size: 10px;">professional electric engineer</p>
                    </div>
                </div>
            </div>
            <div class="col mx-2 align-items-center" id="scope_of_work">
                <div id="feature_row_test" class="text-end row">
                    <div style="display:inline-flex" id="test">
                        <input type="radio" name="electric_engr" id="electric_engr_1" value="registered engineer">
                        <p class="text-start text-uppercase fw-bold" style="font-size: 10px;">registered electrical engineer</p>
                    </div>
                </div>
            </div>
            <div class="col mx-2 align-items-center" id="scope_of_work">
                <div id="feature_row_test" class="text-end row">
                    <div style="display:inline-flex" id="test">
                        <input type="radio" name="electric_engr" id="electric_engr_1" value="registered electrician">
                        <p class="text-start text-uppercase fw-bold" style="font-size: 10px;">registered master electrician</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row text-center" style="margin-top: 40px;
">
            <div class="col" >
                <div class="d-inline-flex justify-content-center align-items-center">
                    <input type="text" class="input-field">
                    <p class="mx-2 font-size-p text-start text-uppercase fw-bold">date</p>
                    <input type="text" class="input-field-qty">
                </div>
                <div class="row">
                    <p class="font-size-p text-uppercase" style="margin-top: -3px;">(signed and sealed over printed name)</p>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 26px;">
            <div class="col mx-2">
                <div class="underline-2 w-100" style="margin-top: -10px;"></div>
                <div class="row my-2">
                    <div class="col d-inline-flex ">
                        <p class="font-size-p text-uppercase fw-bold">prc. no</p>
                        <input id="prc_no_3" name="prc_no_3" type="number" class="mx-2 input-field" style="font-size: 10px; margin-top: 6px">
                    </div>
                    <div class="col d-inline-flex">
                        <p class="font-size-p text-uppercase fw-bold">validity</p>
                        <input id="validity_3" name="validity_3" type="date" class="mx-2 input-field" style="font-size: 10px; margin-top: 6px">
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -17px;"></div>
                <div class="row my-2">
                    <div class="col d-inline-flex">
                        <p class="font-size-p text-uppercase fw-bold">ptr. no</p>
                        <input id="ptr_no_3" name="ptr_no_3" type="number" class="mx-2 input-field" style="font-size: 10px; margin-top: 5px">
                    </div>
                    <div class="col d-inline-flex">
                        <p class="font-size-p text-uppercase fw-bold">date issued</p>
                        <input id="date_issued_3" name="date_issued_3" type="date" class="mx-2 input-field" style="font-size: 10px; margin-top: 5px">
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -18px;"></div>
                <div class="row my-2 mb-0">
                    <div class="col d-inline-flex">
                        <p class="font-size-p text-uppercase fw-bold">issued at</p>
                        <input id="issued_at_3" name="issued_at_3" type="text" class="mx-2 input-field" style="font-size: 10px; margin-top: 5px">
                    </div>
                    <div class="col d-inline-flex">
                        <p class="font-size-p text-uppercase fw-bold">tin</p>
                        <input id="tin_3" name="tin_3" type="number" class="mx-2 input-field" style="font-size: 10px; margin-top: 5px">
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -10px;"></div>
                <div class="row my-3">
                    <div class="d-inline-flex">
                        <p class="font-size-p text-uppercase fw-bold" style="margin-top: -10px;">Address</p>
                        <input id="address_3" name="address_3" type="text" class="mx-2 input-field-locational-loc" style="font-size: 10px; margin-top: -9px">
                    </div>
                </div>
            </div>
        </div>        


        <!-- end of box 3 -->
    </div>
    <p class="mx-4 my-2 font-size text-start text-uppercase fw-bold">box 4</p>

    <div class="row">
        <div class="col pe-0">
            <div class="mx-2 border rounded border-dark " style="height: 65.0mm; ">
            <!-- width: 425px -->
                <div class="row">
                    <p class="mx-3 my-3 text-start text-uppercase fw-bold" style="font-size: 12px;">building owner</p>
                </div>
                <div class="row text-center my-4 mb-4">
                    <div class="col">
                        <div class="d-inline-flex justify-content-center align-items-center">
                            <input type="text" class="input-field" id="building_owner_date" name="building_owner_date">
                            <p class="mx-2 font-size-p text-start text-uppercase fw-bold">date</p>
                            <input type="text" class="input-field-qty" id="building_owner_date" name="building_owner_date">
                        </div>
                        <div class="row">
                            <p class="font-size-p text-uppercase" style="margin-top: -3px;">(signed and sealed over printed name)</p>
                        </div>
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: 26px;"></div>
                <div class="row my-3 mx-1 mb-0">
                    <div class="d-inline-flex">
                        <p class="font-size-p text-uppercase fw-bold" style="margin-top: -10px;">Adress</p>
                        <input type="text" class="mx-2 input-field" id="building_owner_address" name="building_owner_address" style="font-size: 10px; margin-top: -5px">
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -10px;"></div>
                <div class="row mx-1 mb-1">
                    <div class="col">
                        <div class="col d-inline-flex">
                            <p class="font-size-p text-uppercase fw-bold" >ptr. no</p>
                            <input type="number" class="mx-2 input-field-qty" id="building_owner_ptr_no" name="building_owner_ptr_no" style="font-size: 10px; margin-top: 5px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="col d-inline-flex">
                            <p class="font-size-p text-uppercase fw-bold" >date issued</p>
                            <input type="date" class="mx-2 input-field-qty" id="building_owner_date_issued" name="building_owner_date_issued" style="font-size: 10px; margin-top: 5px">
                        </div>
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -14px;"></div>
                <div class="row mx-1">
                    <div class="col">
                        <div class="col d-inline-flex">
                            <p class="font-size-p text-uppercase fw-bold" >place issued</p>
                            <input type="text" class="mx-2 input-field" id="building_owner_place_issued" name="building_owner_place_issued" style="font-size: 10px; margin-top: 4px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of box 4 -->
        <div class="col ps-0">
            <!-- <p class="mx-4 my-2 font-size text-start text-uppercase fw-bold">box 4</p> -->
            <div class="mx-2 border rounded border-dark " style="height: 65.0mm; ">
            <!-- width: 425px -->
                <div class="row">
                    <p class="mx-3 my-3 text-start text-uppercase fw-bold" style="font-size: 12px;">with my consent : lot owner</p>
                </div>
                <div class="row text-center my-4 mb-4">
                    <div class="col">
                        <div class="d-inline-flex justify-content-center align-items-center">
                            <input type="text" class="input-field" id="lot_owner_date" name="lot_owner_date">
                            <p class="mx-2 font-size-p text-start text-uppercase fw-bold">date</p>
                            <input type="text" class="input-field-qty" id="lot_owner_date" name="lot_owner_date">
                        </div>
                        <div class="row">
                            <p class="font-size-p text-uppercase" style="margin-top: -3px;">(signed and sealed over printed name)</p>
                        </div>
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: 26px;"></div>
                <div class ="row my-3 mx-1 mb-0">
                    <div class="d-inline-flex">
                        <p class="font-size-p text-uppercase fw-bold" style="margin-top: -10px;">Adress</p>
                        <input type="text" class="mx-2 input-field" id="lot_owner_address" name="lot_owner_address" style="font-size: 10px; margin-top: -5px">
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -10px;"></div>
                <div class="row mx-1 mb-1">
                    <div class="col">
                        <div class="col d-inline-flex">
                            <p class="font-size-p text-uppercase fw-bold">ptr. no</p>
                            <input type="number" class="mx-2 input-field-qty" id="lot_owner_ptr_no" name="lot_owner_ptr_no" style="font-size: 10px; margin-top: 5px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="col d-inline-flex">
                            <p class="font-size-p text-uppercase fw-bold">date issued</p>
                            <input type="date" class="mx-2 input-field-qty" id="lot_owner_date_issued" name="lot_owner_date_issued" style="font-size: 10px; margin-top: 5px">
                        </div>
                    </div>
                </div>
                <div class="underline-2 w-100" style="margin-top: -14px;"></div>
                <div class="row mx-1">
                    <div class="col">
                        <div class="col d-inline-flex">
                            <p class="font-size-p text-uppercase fw-bold">place issued</p>
                            <input type="text" class="mx-2 input-field" id="lot_owner_place_issued" name="lot_owner_place_issued" style="font-size: 10px; margin-top: 4px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of box 5 -->
    </div>
    
    




<!--  END OF MAIN BORDER  -->
    </div>


    <script>
        <?php 
        
        $applicant_info = select('vw_applicant_basics',"applicant_id = '$project_applicant'");
         if (mysqli_num_rows($applicant_info) > 0) {
        while ($row = mysqli_fetch_assoc($applicant_info)) {

        //name
        echo "$('#firstname')[0].value = '" . $row['firstname'] . "';";
        echo "$('#middle_initial')[0].value = '" . $row['middlename'] . "';";
        echo "$('#lastname')[0].value = '" . $row['lastname'] . "';";
        echo "$('#tin')[0].value = '" . $row['tin'] . "';";

        //address
        echo "$('#no')[0].value ='".$row['house_no'] . "';";
        echo "$('#street')[0].value ='".$row['street_name'] . "';";
        echo "$('#applicant_barangay_elec')[0].value ='".$row['barangay'] . "';";
        echo "$('#telephone_no')[0].value ='".$row['contact_no'] . "';";

  
        
    }
}


    //project location
    $project_address_electrical = full_query("SELECT vw_project_basics.project_id, vw_project_basics.street_name,
    vw_project_basics.lot_no, vw_project_basics.block_no, vw_project_basics.barangay, project.tct_no, project.tax_dec_no
    FROM project
    JOIN vw_project_basics
    ON project.id = vw_project_basics.project_id
    WHERE project.id = '$project_id'");

    if ($row = mysqli_fetch_assoc($project_address_electrical)) {

        echo '$("#electrical_lot_no").val("'.$row["lot_no"].'");';
        echo '$("#electrical_blk_no").val("'.$row["block_no"].'");';
        echo '$("#electrical_tct_no").val("'.$row["tct_no"].'");';
        echo '$("#elecrical_tax_dec_no").val("'.$row["tax_dec_no"].'");';
        echo '$("#electrical_street").val("'.$row["street_name"].'");';
        echo '$("#electrical_barangay").val("'.$row["barangay"].'");';

    }

    //electrical scope of work
    $electrical_scope = select('f_electrical',"id = '$project_electrical'");
    if (mysqli_num_rows($electrical_scope) > 0) {
        while ($row = mysqli_fetch_assoc($electrical_scope)) {

        echo '$(\'input[name="scope_of_work"][value="' . $row['scope'] . '"]\').prop(\'checked\', true);';
        echo "$('#sw_others_specify')[0].value ='".$row['scope_spec'] . "';";
        
        //electrical loads
        echo "$('#total_connection_load')[0].value ='".$row['total_conn_load'] . "';";
        echo "$('#total_transformer_capacity')[0].value ='".$row['total_transformer_cap'] . "';";
        echo "$('#total_generator_capacity')[0].value ='".$row['total_gen_cap'] . "';";

        //supervisor
        echo '$(\'input[name="electric_engr"][value="' . $row['supervisor'] . '"]\').prop(\'checked\', true);';

        }
    }
        
        //form of ownership
        $electrical_form_ownership = select('f_unified',"id = '$project_unified'");
         if (mysqli_num_rows($electrical_form_ownership) > 0) {
        while ($row = mysqli_fetch_assoc($electrical_form_ownership)) {
        

            echo "$('#electrical_form_ownership')[0].value ='".$row['form_of_ownership'] . "';";

            $character_of_occupancy = $row['occupancy_group'].' - '.$row['occupancy_type'];
            echo "$('#character_occupancy')[0].value ='".$character_of_occupancy. "';";


        }
    }
        
        ?>
    </script>