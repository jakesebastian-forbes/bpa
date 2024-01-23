
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.css">
    <!-- <script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script> -->
    <!-- <script src="../js-css/general.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->




<div id="sanitary_form" style=" width: 22cm; border: 1px solid black; height: 402.6mm;"  class="m-auto print">
    

    <style>
        #feature_row input, #feature_row p {

            display: inline;
            flex-direction: column;
            margin-right: 57px;
            margin-bottom: 5px;
        }

        #water_supply_test>* {

            display: inline;
            flex-direction: column;
            margin-right: 6px;
        }

        #sanitary_form_div input {
            font-size: 10px;
            font-weight: bold;

        }

        #sanitary_form_div label {
            
            font-weight:bold  ;

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
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            width: 85px;
            height: 15px;
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

        .input-improvement {
            border: 1px solid black;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            width: 150px;
            height: 17px;
        }

        .input-signatures {
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

        .checkbox {
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
            margin-bottom: -2px;
            /* Adjust this value as needed */
        }

        .font-size {
            font-size: 10px;
        }

        .font-size-p {
            font-size: 10px;
        }

        .underline {
            border-bottom: 1px solid black;
        }

        .vertical-division {
            border-left: 2px solid #000;
            /* Adjust the color and thickness as needed */
            height: 100%;
            /* Make it extend the full height of the parent container */
        }
        /* input,label {
            font-size: 10px;
        } */

        /* .divider {
        border-left: 1px solid black;
        height: 25px;
        margin-right: 10px;
        }          */
        #feature_row {
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


            #sanitary_form {
                margin-top: -105px !important;
                /* padding-top: -100px !important; */
                transform: scale(0.90);
                background-color: red;
                /* display: none; */
                margin: none;
                height: auto;
                padding-bottom: -5px !important;

                border: none !important;
            }
        }
    </style>
    
    <div>

        <p class="my-3 text-center text-uppercase " style="font-size: 10px;">republic of the philippines <br>
            municipality of nasugbu <br> batangas <br> office of the building official <br>
            area code 1019-v</p>

        <div class="row">
            <div class="col-4 px-4" >
                <div class="form-group" style="margin-top: -10px;">
                    <label for="application" class="mx-3 text-uppercase " style="font-size: 10px;">application no.</label>
                    <!-- <input class="mx-3  w-50" style="height: 25px;" type="text" placeholder=""> -->
                    
                <?php
                $table_id = "sanitary_app_no";
                require "no_table.php";
                
                ?>
                </div>
            </div>
            <div class="col-4"></div>
            <div class="col-4 px-4" >
                <div class="form-group d-block" style="float:inline-end; margin-top: -10px;">
                <!-- margin-left: 205px -->
                    <label for="application" class="mx-3 text-uppercase " style="font-size: 10px;">permit no.</label>
                    <!-- <input class="mx-3  w-75" style="height: 25px;" type="text" placeholder=""> -->
                    
                <?php
                $table_id = "sanitary_permit_no";
                require "no_table.php";
                
                ?>
                </div>
            </div>



        </div>

        <div class="d-flex justify-content-center row my-2" style="">
            <div class="col-4">
                <div class="form-group">
                    <div class="mx-3 d-flex align-items-start flex-column">
                        <input class=" input-field" style="height: 20px;" type="text" id="date_of_application" name="date_of_application" placeholder="">
                        <label for="date_of_application" class="mx-5 text-uppercase " style="font-size: 10px;">date of application</label>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="text-uppercase text-center fw-bold fs-6">sanitary/plumbing permit</p>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <div class="mx-3 d-flex align-items-end flex-column">
                        <input class=" input-field" style="height: 20px;" type="text" id="date_issued" name="date_issued" placeholder="">
                        <label for="date_issued" class="mx-5 text-uppercase " style="font-size: 10px;">date issued</label>
                    </div>
                </div>
            </div>
        </div>


        <p class="mx-4 text-start text-uppercase  mb-0" style="font-size: 10px;">box | (to be accomplished by sanitary/engineer/master plumber in print)</p>

        <div class="mx-2 border rounded border-dark " style="height: 250.6mm;" id="sanitary_form_div">
            <div class="row">
                <div class="col">
                    <div class="mx-2 align-items-center">
                        <label class="text-uppercase " style="font-size: 10px;" for="name_owner_applicant">
                            name of owner/applicant
                        </label>
                        <!-- <input class="input-field" type="text" id="name_owner_applicant" name="name_owner_applicant" style="margin-top: 3px"> -->
                    </div>
                </div>
                <div class="col">
                    <div class="mx-2 align-items-center">
                        <label class="text-uppercase " style="font-size: 10px;" for="lastname_firstname_mi">
                            lastname firstname m.i
                        </label>
                        <input class="input-field" type="text" id="lastname_firstname_mi" name="lastname_firstname_mi" style="margin-top: 3px">
                    </div>
                </div>
                <div class="col">
                    <div class="d-block mx-2 align-items-center">
                        <label class="text-uppercase " style="font-size: 10px;" for="tax_acct_no">
                            tax acct. no.
                        </label>
                        <input class="input-field" type="number" id="tax_acct_no" name="tax_acct_no" style=" margin-top: 3px">
                    </div>
                </div>
            </div>

            <div class="underline w-100" style="margin-top: -1px;"></div>

            <div class="row">
                <div class="col">
                    <div class="align-items-center">
                        <label class="mx-2 text-uppercase " style="font-size: 10px;" for="address_field">
                            address
                        </label>
                        <br>
                        <input class="input-field" type="text" id="address_field" name="address_field" style=" margin-top: 3px">
                    </div>
                </div>
                <div class="col">
                    <div class="align-items-center">
                        <label class="text-uppercase " style="font-size: 10px;" for="street_field">
                            no. street, barangay, city/municipality
                        </label>
                        <input class="input-field" type="text" id="applicant_address" name="applicant_address" style=" margin-top: 3px">
                    </div>
                </div>
                <div class="col">
                    <div class="align-items-center">
                        <label class="text-uppercase " style="font-size: 10px;" for="telephone_field">
                            telephone no.
                        </label>
                        <input class="input-field" type="number" id="telephone_field" name="telephone_field" style=" margin-top: 3px">
                    </div>
                </div>
            </div>


            <div class="underline w-100" style="margin-top: -1px;"></div>

            <div class="row">
                <div class="col-4">
                    <div class="align-items-center">
                        <label class="mx-2 text-uppercase " style="font-size: 10px;" for="location_field">
                            location of installation
                        </label>
                        <br>
                        <!-- <input class="input-field" type="text" id="location_field" name="location_field" style=" margin-top: 3px"> -->
                    </div>
                </div>
                <div class="col-4">
                    <div class="align-items-center">
                        <label class="text-uppercase " style="font-size: 10px;" for="address_field">
                            no. street, barangay, city/municipality
                        </label>
                        <input class="input-field" type="text" id="installation_address" name="installation_address" style=" margin-top: 3px">
                    </div>
                </div>
            </div>

            <div class="underline w-100" style="margin-top: -1px;"></div>

            <div class="row">
                <div class="col">
                    <p class="mx-2 my-1 text-start text-uppercase " style="font-size: 10px;">Scope of Work</p>
                    <div class="d-inline-flex align-items-start">
                        <div class="mx-2 form-check" style="margin-top: -20px;">
                            <input class="form-check-input checkbox" type="checkbox" value="new installation" id="sanitary_new_install" name="sanitary_sw" style="margin-top: 20px;">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 17px" for="flexCheckDefault1">
                                New Installation
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-2 form-check align-self-start">
                            <input class="form-check-input checkbox" type="checkbox" value="addition" id="sanitary_new_addition" name="sanitary_sw" style="margin-top: 6px;">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 5px;" for="flexCheckDefault2">
                                Addition of
                            </label>
                        </div>
                        <input class="input-field-short" style="margin-top: 5px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-2 form-check align-self-start" style="margin-top: -4px;">
                            <input class="form-check-input checkbox" type="checkbox" value="repair" id="sanitary_new_repair" name="sanitary_sw" style="margin-top: 6px;">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 5px;" for="flexCheckDefault3">
                                Repair of
                            </label>
                        </div>
                        <input class="input-field-short" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-2 form-check align-self-start" style="margin-top: -4px;">
                            <input class="form-check-input checkbox" type="checkbox" value="removal" id="sanitary_new_removal" name="sanitary_sw" style="margin-top: 6px;">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 5px;" for="flexCheckDefault4">
                                Removal of
                            </label>
                        </div>
                        <input class="input-field-short" type="text" placeholder="" style="margin-top: -4px;">
                    </div>
                </div>

                <div class="col mb-2">
                    <p class="mx-2 text-uppercase " style="font-size: 10px; margin: 0;">Others (Specify)</p>
                    <div class="d-inline-flex align-items-center" style="margin-top: 15px;">
                        <input class="mx-1 form-check-input checkbox" type="checkbox" value="others" id="sanitary_new_others" name="sanitary_sw">
                        <input class="input-field-short" type="text" placeholder="">
                        <p class="mx-2 text-uppercase " style="font-size: 10px; margin: 0; vertical-align: middle;">of</p>
                        <input class="input-field-short" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-center">
                        <input class="mx-1 form-check-input checkbox" type="checkbox" value="" style="margin: 0; padding: 0; vertical-align: middle;" id="flexCheckDefault6">
                        <input class="input-field-short" type="text" placeholder="">
                        <p class="mx-2 text-uppercase " style="font-size: 10px; margin: 0; vertical-align: middle;">of</p>
                        <input class="input-field-short" type="text" placeholder="">
                    </div>
                </div>

            </div>

            <hr class="w-100" style="margin-top: -13px; border-top: 1.5px solid black">

            <div class="row" style="line-height: 0px;">
                <p class="mx-4 text-start text-uppercase " style="font-size: 10px;margin-top: -10px">use or type of occupancy</p>
                <div class="col-6">
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-4 form-check" style="margin-top: -4px;">
                            <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault7">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 7px" for="flexCheckDefault7">
                                residential
                            </label>
                        </div>
                        <input class="input-field" style="height: 13px; margin-top: -6px" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-4 form-check" style="margin-top: -4px;">
                            <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault8">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 7px" for="flexCheckDefault8">
                                commercial
                            </label>
                        </div>
                        <input class="input-field" style="height: 13px; margin-top: -4px" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-4 form-check" style="margin-top: -4px;">
                            <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault4">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 7px" for="flexCheckDefault9">
                                industrial
                            </label>
                        </div>
                        <input class="input-field" style="height: 13px; margin-top: -5px" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-4 form-check" style="margin-top: -4px;">
                            <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault10">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 7px" for="flexCheckDefault10">
                                institutional
                            </label>
                        </div>
                        <input class="input-field" style="height: 13px; margin-top: -8px" type="text" placeholder="">
                    </div>

                </div>
                <div class="col-6">
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-4 form-check" style="margin-top: -4px;">
                            <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault11">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 6px;" for="flexCheckDefault11">
                                agricultural
                            </label>
                        </div>
                        <input class="input-field" style="height: 13px; margin-top: -8px" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-4 form-check" style="margin-top: -4px;">
                            <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault12">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 6px" for="flexCheckDefaul12">
                                parks, plazas, monuments
                            </label>
                        </div>
                        <input class="input-field-short" style="width: 150px;height: 13px; margin-top: -6px" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-4 form-check" style="margin-top: -4px;">
                            <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault13">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 6px" for="flexCheckDefault13">
                                recreational
                            </label>
                        </div>
                        <input class="input-field" style="height: 13px; margin-top: -6px" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-4 form-check" style="margin-top: -4px;">
                            <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault14">
                            <label class="form-check-label text-uppercase" style="font-size: 10px; margin-top: 6px" for="flexCheckDefault14">
                                others(specify)
                            </label>
                        </div>
                        <input class="input-field" style="height: 13px; margin-top: -7px" type="text" placeholder="">
                    </div>
                </div>
            </div>
            <hr class="w-100 text-dark" style="margin-top: -4px; border-top: 1.5px solid black">

            <div class="row text-center p-1" id="box_fixtures">
                <div>
                    <p class="mx-4 text-start text-uppercase " style="font-size: 10px;margin-top: -10px; line-height: 0px">fixtures to be installed:</p>
                </div>

                <div class="row mx-2 text-start text-uppercase " style="font-size: 10px;">
                    <div class="col" id="left">
                        <div class="row ">
                            <div class="col">QTY</div>
                            <div class="col">NEW FIXTURES</div>
                            <div class="col">EXISTING FIXTURES</div>
                            <div class="col">KIND OF FIXTURE</div>
                        </div>

                    </div>

                    <div class="col-1"></div>
                    <div class="col" id="right">
                        <div class="row" style="margin-right: 40px;">
                            <div class="col">QTY</div>
                            <div class="col">NEW FIXTURES</div>
                            <div class="col">EXISTING FIXTURES</div>
                            <div class="col">KIND OF FIXTURE</div>
                        </div>
                    </div>



                </div>


                <div class="row mx-1 my-0">

                    <div class="col-6" id="fixture_row_left">
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="fixtures_qty" name="fixtures_qty">
                                <input type="radio" name="feature_name1" id="feature_name_1">
                                <input type="radio" name="feature_name1" id="feature_name_2">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">water closet</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex;  margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-2" name="input-field-qty-2">
                                <input type="radio" name="feature_name2" id="feature_name_3">
                                <input type="radio" name="feature_name2" id="feature_name_4">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">floor drain</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex;  margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-3" name="input-field-qty-3">
                                <input type="radio" name="feature_name3" id="feature_name_5">
                                <input type="radio" name="feature_name3" id="feature_name_6">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">lavatories</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex;  margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-4" name="input-field-qty-4">
                                <input type="radio" name="feature_name4" id="feature_name_7">
                                <input type="radio" name="feature_name4" id="feature_name_8">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">kitchen sink</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex;  margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-5" name="input-field-qty-5">
                                <input type="radio" name="feature_name5" id="feature_name_9">
                                <input type="radio" name="feature_name5" id="feature_name_10">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">faucet</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-6" name="input-field-qty-6">
                                <input type="radio" name="feature_name6" id="feature_name_11">
                                <input type="radio" name="feature_name6" id="feature_name_12">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">shower head</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex;  margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-7" name="input-field-qty-7">
                                <input type="radio" name="feature_name7" id="feature_name_13">
                                <input type="radio" name="feature_name7" id="feature_name_14">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">water meter</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex;  margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-8" name="input-field-qty-8">
                                <input type="radio" name="feature_name8" id="feature_name_15">
                                <input type="radio" name="feature_name8" id="feature_name_16">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">grease trap</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-9" name="input-field-qty-9">
                                <input type="radio" name="feature_name9" id="feature_name_17">
                                <input type="radio" name="feature_name9" id="feature_name_18">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">bath tubs</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex;  margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-10" name="input-field-qty-10">
                                <input type="radio" name="feature_name10" id="feature_name_19">
                                <input type="radio" name="feature_name10" id="feature_name_20">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">slop sink</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex;  margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-11" name="input-field-qty-11">
                                <input type="radio" name="feature_name11" id="feature_name_21">
                                <input type="radio" name="feature_name11" id="feature_name_22">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">urinal</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex;  margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-12" name="input-field-qty-12">
                                <input type="radio" name="feature_name12" id="feature_name_23">
                                <input type="radio" name="feature_name12" id="feature_name_24">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">air conditioning unit</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex;  margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-13" name="input-field-qty-13">
                                <input type="radio" name="feature_name13" id="feature_name_25">
                                <input type="radio" name="feature_name13" id="feature_name_26">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">water tank</p>
                            </div>
                        </div>


                    </div>

                    <!-- <div class="col-1"></div> -->


                    <div class="col-6" id="fixture_row_right">
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-14" name="input-field-qty-14">
                                <input type="radio" name="feature_name14" id="feature_name_27">
                                <input type="radio" name="feature_name14" id="feature_name_28">
                                <p class="text-start text-uppercase " style="font-size: 10px;">bidette</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-15" name="input-field-qty-15">
                                <input type="radio" name="feature_name15" id="feature_name_29">
                                <input type="radio" name="feature_name15" id="feature_name_30">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">laundry trays</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-16" name="input-field-qty-16">
                                <input type="radio" name="feature_name16" id="feature_name_31">
                                <input type="radio" name="feature_name16" id="feature_name_32">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">dental cuspidor</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-17" name="input-field-qty-17">
                                <input type="radio" name="feature_name17" id="feature_name_33">
                                <input type="radio" name="feature_name17" id="feature_name_34">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">gas heater</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-18" name="input-field-qty-18">
                                <input type="radio" name="feature_name18" id="feature_name_35">
                                <input type="radio" name="feature_name18" id="feature_name_36">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">electric heater</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-19" name="input-field-qty-19">
                                <input type="radio" name="feature_name19" id="feature_name_37">
                                <input type="radio" name="feature_name19" id="feature_name_38">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">water boiler</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-20" name="input-field-qty-20">
                                <input type="radio" name="feature_name20" id="feature_name_39">
                                <input type="radio" name="feature_name20" id="feature_name_40">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">drinking fountain</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-21" name="input-field-qty-21">
                                <input type="radio" name="feature_name21" id="feature_name_41">
                                <input type="radio" name="feature_name21" id="feature_name_42">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">bar sink</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-22" name="input-field-qty-22">
                                <input type="radio" name="feature_name22" id="feature_name_43">
                                <input type="radio" name="feature_name22" id="feature_name_44">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">soda fountain sink</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-23" name="input-field-qty-23">
                                <input type="radio" name="feature_name23" id="feature_name_45">
                                <input type="radio" name="feature_name23" id="feature_name_46">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">laboratory sink</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-24" name="input-field-qty-24">
                                <input type="radio" name="feature_name24" id="feature_name_47">
                                <input type="radio" name="feature_name24" id="feature_name_48">
                                <p class="text-start text-uppercase " style="font-size: 10px; ">sterilizer</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-25" name="input-field-qty-25">
                                <input type="radio" name="feature_name25" id="feature_name_49">
                                <input type="radio" name="feature_name25" id="feature_name_50">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">swimming pool</p>
                            </div>
                        </div>
                        <div id="feature_row" class="text-end row">
                            <div style="display:inline-flex; margin-top: -10px" >
                                <input class="input-field-qty" style="height: 20px;" type="number" id="input-field-qty-26" name="input-field-qty-26">
                                <input type="radio" name="feature_name26" id="feature_name_51">
                                <input type="radio" name="feature_name26" id="feature_name_52">
                                <p class="text-start text-uppercase " style="font-size: 10px; white-space: nowrap;">others(specify)</p>
                            </div>
                        </div>
                    </div>



                </div>


                <!-- end of row -->
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="mx-2 d-inline-flex">
                        <input class="input-field-qty" id="total_qty_1" name="total_qty_1" type="text" placeholder="">
                        <label for="total_qty_1" class=" mx-2" style="font-size: 10px;">TOTAL</label>
                    </div>
                </div>
                <div class="col-4 text-end mx-4">
                    <div class="mx-2 d-inline-flex align-items-end">
                        <input class="input-field-qty" id="total_qty_2" name="total_qty_2" type="text" placeholder="">
                        <label for="total_qty_2" class=" mx-2" style="font-size: 10px;">TOTAL</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-check">
                        <div class="mx-2 d-inline-flex">
                            <input class="form-check-input checkbox" type="checkbox" value="water distribution system" id="water_dist" name="sanitary_fixtures_system">
                            <label class="form-check-label text-uppercase mx-2" style="font-size: 10px;" for="flexCheckDefault15">water distribution system</label>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <div class="form-check">
                        <div class="d-inline-flex">
                            <input class="form-check-input checkbox" type="checkbox" value="sanitary sewer system" id="sewer_sys" name="sanitary_fixtures_system">
                            <label class="form-check-label text-uppercase mx-2" style="font-size: 10px;" for="flexCheckDefault16">sanitary sewer system</label>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <div class="form-check">
                        <div class="d-inline-flex">
                            <input class="form-check-input checkbox" type="checkbox" value="storm drainage system" id="drainage_sys" name="sanitary_fixtures_system">
                            <label class="form-check-label text-uppercase mx-2" style="font-size: 10px;" for="flexCheckDefault17">storm drainage system</label>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="w-100 text-dark" style="margin-top: 5px; border-top: 1.5px solid black">
            <hr class="w-100 text-dark" style="margin-top: -12px; border-top: 1.5px solid black">

            <div class="row">
                <div class="col" id="water_supply">
                    <p class="mx-3 text-start text-uppercase " style="font-size: 13px;">water supply</p>
                    <div style="display:inline-flex;" id="water_supply_row" class="mx-1 row">
                        <div class="" id="water_supply_test" style="margin-top: -15px; ">
                            <input type="radio" name="water_supply" id="shallow_well" value="Shallow Well">
                            <p class="text-uppercase " style="font-size: 10px;" >shallow well</p>
                        </div>
                    </div>
                    <div id="water_supply_row" class="mx-1 row">
                        <div class="" id="water_supply_test" style="margin-top: -8px;">
                            <input type="radio" name="water_supply" id="deep_well" value="Deep Well & Pump Set">
                            <p class="text-uppercase " style="font-size: 10px;">deep well & pump set</p>
                        </div>
                    </div>


                    <div id="water_supply_row" class="mx-1 row">
                        <div class="" id="water_supply_test" style="margin-top: -8px;">
                            <input type="radio" name="water_supply" id="municipal_water" value="City/Municipal Water System">
                            <p class="text-uppercase " style="font-size: 10px; ">city/municipal water system</p>
                        </div>
                    </div>


                    <div id="water_supply_row" class="mx-1 row">
                        <div class="" id="water_supply_test" style="margin-top: -8px;">
                            <input type="radio" name="water_supply" id="others" value="Others">
                            <p class="text-uppercase " style="font-size: 10px;">others(specify)</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <p class="text-start text-uppercase " style="font-size: 13px;">system disposal</p>
                    <div class="row">
                        <div class="col">
                            <div id="water_supply_row" class="row">
                                <div class="" id="water_supply_test" style="margin-top: -15px;">
                                    <input type="radio" name="system_disposal" id="waste_water" value="Waste Water Treatment">
                                    <p class="text-uppercase " style="font-size: 10px; white-space: nowrap;">waste water treatment</p>
                                </div>
                            </div>
                            <div id="water_supply_row" class="row">
                                <div class="" id="water_supply_test" style="margin-top: -9px;">
                                    <input type="radio" name="system_disposal" id="septic_tank" value="Septic Tank/Imhope Vault">
                                    <p class="text-uppercase " style="font-size: 10px; white-space: nowrap;">septic tank/imhope vault</p>
                                </div>
                            </div>
                            <div id="water_supply_row" class="row">
                                <div class="" id="water_supply_test" style="margin-top: -9px;">
                                    <input type="radio" name="system_disposal" id="sanitary sewer" value="Sanitary Sewer Connection">
                                    <p class="text-uppercase " style="font-size: 10px; white-space: nowrap;">sanitary sewer</p>
                                </div>
                            </div>
                            <div id="water_supply_row" class="row">
                                <div class="" id="water_supply_test" style="margin-top: -9px;">
                                    <input type="radio" name="system_disposal" id="sub_surface" value="Sub-Surface Sand Filter">
                                    <p class="text-uppercase " style="font-size: 10px; white-space: nowrap;">sub-surface sand filter</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div id="water_supply_row" class="row">
                                <div class="" id="water_supply_test" style="margin-top: -9px;">
                                    <input type="radio" name="system_disposal" id="surface_drainage" value="Surface Drainage">
                                    <p class="text-uppercase " style="font-size: 10px; ">surface drainage</p>
                                </div>
                            </div>
                            <div id="water_supply_row" class="row">
                                <div class="" id="water_supply_test" style="margin-top: -9px;">
                                    <input type="radio" name="system_disposal" id="street_canal" value="Street Canal">
                                    <p class="text-uppercase " style="font-size: 10px; ">street canal</p>
                                </div>
                            </div>
                            <div id="water_supply_row" class="row">
                                <div class="" id="water_supply_test" style="margin-top: -9px;">
                                    <input type="radio" name="system_disposal" id="water_drainage" value="Water Course">
                                    <p class="text-uppercase " style="font-size: 10px; ">water drainage</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <div class="row">
                <div class="col">
                    <!-- number of storeys -->
                    <div>
                        <p class="my-1 mx-4 text-start text-uppercase " style="font-size: 10px;">number of storeys of building</p>
                        <input class="mx-5 input-field" style="height: 15px;" type="text" placeholder="" id="sanitary_no_storey" name="sanitary_no_storey">
                    </div>

                    <!-- proposed date start of installation -->
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-3 my-1 align-self-start">
                            <label class="text-uppercase" style="font-size: 10px;">
                                proposed date <br> start date of completion
                            </label>
                        </div>
                        <div>
                            <input class="my-3 input-field-date" style="height: 20px;" type="date" placeholder="" id="sanitary_start_date" name="sanitary_start_date">
                        </div>
                    </div>
                    <!-- expected date of completion -->
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-3 align-self-start">
                            <label class="text-uppercase" style="font-size: 10px;">
                                expected date <br> of completion
                            </label>
                        </div>
                        <div>
                            <input class="my-2 input-field-date" style="height: 20px;" type="date" placeholder="" id="sanitary_exp_completion" name="sanitary_exp_completion">
                        </div>
                    </div>
                    <!-- end of col-5 -->
                </div>
                <div class="col">
                    <!-- total area of building subdivision -->
                    <div>
                        <p class="my-1 text-start text-uppercase " style="font-size: 10px;">total area of building subdivision</p>
                        <input class="my-1 input-field" style="height: 15px; margin-left: 100px" type="number" placeholder="" id="sanitary_total_area" name="sanitary_total_area">
                    </div>
                    <!-- total cost of installation -->
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-3 my-2 align-self-start">
                            <label class="text-uppercase" style="font-size: 10px;">
                                total cost <br> of installation ₱
                            </label>
                        </div>
                        <div class="my-3">
                            <input class="input-field-date" style="height: 20px;" type="text" placeholder="" id="total_cost">
                        </div>
                    </div>
                    <!-- prepared by -->
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="mx-3 mb-1 align-self-start">
                            <label class="text-uppercase" style="font-size: 10px;">
                                prepared by:
                            </label>
                        </div>
                        <div>
                            <input class="input-field-date" style="height: 20px;" type="text" placeholder="" id="sanitary_prepared_by" name="sanitary_prepared_by">
                        </div>
                    </div>
                    <!-- end of col-4 -->
                </div>
                <!-- end of row fow water supply -->
            </div>



            <!-- end of border 1 -->
        </div>

        <p class="mx-3 text-uppercase  mb-0" style="font-size: 10px;">box 2 (to be accomplished by building official)</p>

        <div class="mx-2 border rounded border-dark" style="height: 85.6mm;">
            <div class="row">
                <p class="mx-3 my-2 text-uppercase " style="font-size: 10px;">action taken:</p>

                <div class="col-6">
                    <p class="mx-3 my-2 text-uppercase " style="font-size: 9px;">permit is hereby granted to install the sanitay/plumbing <br>
                        enumerated herein subject to the following conditions: </p>
                    <p class="mx-3 my-2 text-uppercase " style="font-size: 9px;">1. that the proposed installation shall be in accordance with
                        approved plans filed with this office and in comformity with the naiona; building code.
                    </p>
                    <p class="mx-3 my-2 text-uppercase " style="font-size: 9px;">2. that a duly licensed sanitary engineer/master plumber be engaged to undertake
                        the installation/construction
                    </p>
                    <p class="mx-3 my-2 text-uppercase " style="font-size: 9px;">3. that a certificate of completion duly signed by a sanitary engineer/master plumber in-charge of installation
                        shall be submitted not later than seven (7) days after completion of the installation
                    </p>
                    <p class="mx-3 my-2 text-uppercase " style="font-size: 9px;">4. that a certificate of final inspection and a certificate of
                        occupancy be secured prior to the actual occupancy of the building.
                    </p>
                </div>
                <!-- end of col -->
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <div class="d-inline-block">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="mx-3 my-2 text-uppercase " style="font-size: 10px;">engr. romeo a. velasco</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-12">
                                <div class="mx-3 text-center">
                                    <p class="text-capitalize fw-normal mb-0" style="font-size: 10px; line-height: 0px;">municipal engineer</p>
                                    <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                                    <p class="text-capitalize " style="font-size: 10px;">building official</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mx-3 text-center">
                                    <input class="input-field-date" style="height: 20px;" type="date" placeholder="" id="sanitary_date">
                                    <p class="text-uppercase " style="font-size: 10px;">date</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- end of row -->
            </div>


            <div class="row">
                <p class="mx-3 text-uppercase " style="font-size: 10px;">note: <br>
                    this permit may be cancelled or revoked pursuant to sections 305 & 306 of the national building code</p>
            </div>


            <!-- end of border 2-->
        </div>



    </div>



</div>

<script>
    <?php 
    // about applicant
    $applicant_info = select('vw_applicant_basics',"applicant_id = '$project_applicant'");
    if (mysqli_num_rows($applicant_info) > 0) {
        while ($row = mysqli_fetch_assoc($applicant_info)) {


        $fullname = $row['lastname'].' '.$row['firstname'].' '.$row['middlename']; 
        echo "$('#lastname_firstname_mi')[0].value = '" . $fullname . "';";
        echo "$('#sanitary_prepared_by')[0].value = '" . $fullname . "';";


        echo "$('#tax_acct_no')[0].value = '" . $row['tin'] . "';";

        $applicant_address = $row['house_no'].' '.$row['street_name'].' '.$row['barangay']; 
        echo "$('#applicant_address')[0].value ='".$applicant_address . "';";


        echo "$('#telephone_field')[0].value ='".$row['contact_no'] . "';";

  
        
    }
}


    //sanitary scope of work
    $sanitary_scope = select('f_sanitary',"id = '$project_sanitary'");
    if (mysqli_num_rows($sanitary_scope) > 0) {
        while ($row = mysqli_fetch_assoc($sanitary_scope)) {

        echo '$(\'input[name="sanitary_sw"][value="' . $row['scope'] . '"]\').prop(\'checked\', true);';

        //sanitary water supply
        echo '$(\'input[name="water_supply"][value="' . $row['water_supply'] . '"]\').prop(\'checked\', true);';

        // sanitary system disposal
        echo '$(\'input[name="system_disposal"][value="' . $row['disposal_system'] . '"]\').prop(\'checked\', true);';


        //proposed dates
        
        echo "$('#sanitary_start_date')[0].value ='".$row['proposed_start'] . "';";
        echo "$('#sanitary_exp_completion')[0].value ='".$row['est_finish'] . "';";


        }
    }

    //sanitary fixtures

    //sanitary system
    $sanitary_system = select('f_sanitary_system',"form = '$project_sanitary'");
    if (mysqli_num_rows($sanitary_system) > 0) {
        while ($row = mysqli_fetch_assoc($sanitary_system)) {

        echo '$(\'input[name="sanitary_fixtures_system"][value="' . $row['type'] . '"]\').prop(\'checked\', true);';

        }
    }




    // about project location
    $project_address = full_query("SELECT vw_project_basics.project_id, vw_project_basics.street_name,
    vw_project_basics.lot_no, vw_project_basics.block_no, vw_project_basics.barangay, vw_project_basics.no_of_storey, vw_project_basics.total_floor_area
    FROM project
    JOIN vw_project_basics
    ON project.id = vw_project_basics.project_id
    WHERE project.id = '$project_id'");

if ($row = mysqli_fetch_assoc($project_address)) {


    $fullAdress = $row['lot_no'].' '.$row['block_no'].' '.$row['street_name'].' '.$row['barangay']; 

    echo '$("#installation_address").val("'.$fullAdress.'");';

    echo "$('#sanitary_no_storey')[0].value ='".$row['no_of_storey'] . "';";
    echo "$('#sanitary_total_area')[0].value ='".$row['total_floor_area'] . "';";

}
    ?>

</script>