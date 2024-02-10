





<div id="form_unified" class="m-auto print">

<style>
    #form_unified {

        border: 1px solid black;
        padding-top: 5.5rem;
        padding-left: 2rem;
        padding-right: 1.5rem;
        padding-bottom: 1.5rem;
        width: 22cm;
        height: auto;
        /**39cm; */
        transform: scale(1);
        font-style: arial;
        font-size: 11px;
        /* font-weight: ; */
    }

    #form_unified p {
        margin-bottom: 1px;
    }

    #form_unified_header table {
        margin: 0px;

    }

    #form_unified_header input {
        font-size: 10px;

    }

    #form_unified div.col-2 {
        text-align: start;
    }

    #form_unified table,
    th,
    td {
        border: 1px solid black;
    }

    input {
        font-size: 10px;
    }


    #form_unified td {
        padding: 5px;
        width: 10px;
        height: 17px;

    }

    #psa_only table,
    th,
    td {
        border: 1px solid black;
    }

    #psa_only td {
        /* padding:5px; */
        width: 17px;
        height: 25px;

    }


    #form_unified span>input {
        margin-right: 5px;

    }

    #box_one_cont input {
        font-size: 10px;
    }

    /* #form_unified td>input {
        width: inherit;
        border: none
    } */

    #unified_totals_row input {
        text-align: center;
        font-weight: bold;
    }
        

    .input-improvement {
        border: 1px solid black;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        width: 150px;
        height: 17px;
    }

    .input-underline {
        border: 1px solid black;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        height: 17px;
    }

    .input-field-30 {
        border: 1px solid black;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        width: 30px;
        height: 17px;
    }

    .input-field-100 {
        border: 1px solid black;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        width: 100px;
        height: 17px;
    }

    .input-field {
        border: 1px solid black;
        float: left;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        height: 17px;
    }

    .check-box {
        width: 11px;
    }


    .vertical-line::before {
        content: "";
        border-left: 2px solid #000;
        height: 28.15222mm;
        position: absolute;
        margin-top: 1px;
    }

    .vertical-line-2::before {
        border-left: 2px solid #000;
        height: 28.15222mm;
        position: absolute;
        margin-left: 0px;
        margin-top: 17px;
    }

    .underline {
        border-bottom: 1px solid black;
    }

    .underline-2 {
        border-bottom: 2px solid black;
        width: 100px !important;
    }

    .input-field-short {
        border: 1px solid black;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        vertical-align: middle;
        width: 85px;
        height: 17px;
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


        #form_unified {
            margin-top: -50px !important;
            transform: scale(0.90);
            background-color: red;
            /* display: none; */
            height: auto;

            border: none;
            padding: 0;
        }

        
    }

</style>


    <div id="form_unified_header" class="text-center" >
        <div style="margin-top: -30px;">
            <p>Republic of the Philippines <br>
            City/Municipality of Nasugbu <br>
            Province of Batangas</p>
        </div>
        
        <h2 style=" font-size: 21px;" class="fw-bold">UNIFIED APPLICATION FORM FOR BUILDING PERMIT</h2>
        <div class="row">
            <div class="col"></div>
            <div class="col-2">
                <p><span><input type="checkbox" name="application_type" id="" value="Simple"></span>SIMPLE</p>

            </div>
            <div class="col-2">
                <!-- <p><span><input type="checkbox" name="" id=""></span>RENEWAL</p> -->

            </div>
            <div class="col-2">
                <p><span><input type="checkbox" name="application_type" id="" value="Complex"></span>COMPLEX</p>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-2">
                <p><span><input type="checkbox" name="application_type" id="" value="New"></span>NEW</p>

            </div>
            <div class="col-2">
                <p><span><input type="checkbox" name="application_type" id="" value="Renewal"></span>RENEWAL</p>

            </div>
            <div class="col-2">
                <p><span><input type="checkbox" name="application_type" id="" value="Amendatory"></span>AMENDATORY</p>
            </div>
            <div class="col"></div>
        </div>
        <div class="row mb-2">
            <div class="d-flex">
                <p style="margin-left:20px;">THIS ALSO APPLIES FOR : </p>
                <p style="margin-left:39px;"><span><input type="checkbox" name="" id="" value="" checked></span>LOCATIONAL
                    CLEARANCE</p>
                <p style="margin-left:103px;"><span><input type="checkbox" name="" id="" checked></span>FIRE SAFETY
                    EVALUATION CLEARANCE</p>
            </div>
        </div>

        <div class="row text-start">
            <div class="col-3">
                <p>APPLICATION NO.</p>
  

                <?php
                $table_id = "unified_app_no";
                require "no_table.php";
                
                ?>

            </div>
            <div class="col-6"></div>
            <div class="col-3" style="margin-left:-20px;">

                <p>AREA NO.</p>
          

                
                <?php
                //$table_id = "unified_area_no";
                //require "no_table.php";
                
                ?>

                <input type="text" class="form-control fw-bold" style="width: 90%; height: 20px;" id="unified_area_no">



            </div>

        </div>

    </div> <!--header end-->

    <p>BOX 1(TO BE ACCOMPLISHED IN PRINT BY THE APPLICANT)</p>
    <div class="row">
        <div id="box_one_cont" class="col border border-dark" style="height: fit-content;">
            <div class="row" style="border-bottom: var(--border_black_1);">
                <div class="col">
                    <p>OWNER/APPLICANT</p>
                    <!-- <input type="text" name="" id=""> -->

                </div>
                <div class="col">
                    <p>LAST NAME</p>
                    <input type="text" name="unified_app_lname" id="unified_app_lname" class="input-improvement w-100 fw-bold">



                </div>
                <div class="col">
                    <p>FIRST NAME</p>
                    <input type="text" name="unified_app_fname" id="unified_app_fname" class="input-improvement w-100 fw-bold">

                </div>

                <div class="col-1">
                    <p>M.I</p>
                    <input type="text" name="unified_app_mname" id="unified_app_mname" class="input-field-30 fw-bold ">
                </div>
                <div class="col border-start border-dark">
                    <p>TIN</p>
                    <input type="text" name="unified_app_tin" id="unified_app_tin" class="input-field-100 fw-bold ">
                </div>
                <div class="underline w-100" style="margin-top: -5px;"></div>
            </div>

            <div class="row border-dark">
                <div class="col-4">
                    <p>FOR CONSTRUCTION OWNED BY AN ENTERPRISE</p>
                </div>
                <div class="col border-start border-dark">
                    <p>FORM OF OWNERSHIP</p>
                    <input type="text" name="unified_ownership" id="unified_ownership" class="input-field  w-100  fw-bold">

                </div>
                <div class="underline w-100" style="margin-top: -7px;"></div>
            </div>

            <div class="row border-bottom">
                <div class="col">
                    <p>ADDRESS: </p>
                </div>
                <div class="col-1">
                    <p>NO.,</p>
                    <input type="text" name="unified_house_number" id="unified_house_number" class="input-field w-100 fw-bold">
                </div>
                <div class="col">
                    <p>STREET,</p>
                    <input type="text" name="unified_street_name" id="unified_street_name" class="input-field w-100 fw-bold">
                </div>
                <div class="col">
                    <p>BARANGAY,</p>
                    <input type="text" name="unified_barangay" id="unified_barangay" class="input-field w-100 fw-bold">
                </div>
                <div class="col">
                    <p>CITY/MUNICIPALITY,</p>
                    <input type="text" name="unified_city_municipality" id="unified_city_municipality" class="input-field fw-bold" style="width: 100px;" value="Nasugbu,Batangas">

                </div>
                <div class="col text-end">
                    <p>ZIP CODE</p>
                    <input type="text" name="unified_zip_code" id="unified_zip_code" class="input-field fw-bold text-end" style="width: 60px;" value="4231">

                </div>
                <div class="col-2 border-start border-dark">
                    <p>CONTACT NO.</p>
                    <input type="text" name="unified_contact_no" id="unified_contact_no" class="input-field w-100 fw-bold">

                </div>
                <div class="underline w-100" style="margin-top: -5px;"></div>
            </div>


            <div class="row">
                <p>LOCATION OF CONSTRUCTION: LOT NO.<span><input type="text" class="input-underline fw-bold" name="lot_no" id="lot_no" style="width:30px; font-size:9px"></span>
                    BLK NO.<span><input type="text" class="input-underline fw-bold" style="width:30px; font-size:9px" name="blk_no" id="blk_no"></span>
                    TCT NO. <span><input type="text" class="input-underline fw-bold" style="width:65px; font-size:9px" name="tct_no" id="tct_no"></span>
                    TAX DEC. NO <span><input type="text" class="input-underline fw-bold" style="width:80px; font-size:9px" name="tax_dec_no" id="tax_dec_no"></span>
                </p>

            </div>

            <div class="row">
                <p>STREET<span class="mx-2"><input type="text" class="input-underline fw-bold" style="width:100px; font-size:10px" name="proj_loc_street" id="proj_loc_street"></span>
                    BARANGAY<span class="mx-2"><input type="text" class="input-underline fw-bold" style="width:110px; font-size:10px" name="proj_loc_barangay" id="proj_loc_barangay"></span>
                    CITY/MUNICIPALITY OF<span><input type="text" class="input-underline fw-bold" style="width:130px; font-size:10px" value="Nasugbu, Batangas"></span>
                <div class="underline w-100" style="margin-top: -7px;"></div>
            </div>

            <div class="row pr-0 border-bottom border-dark">
    <p>SCOPE OF WORK</p>
    <div class="row pe-0 me-0">
        <div class="col pe-0">
            <p>
                <span><input type="checkbox" name="unified_sw" id="new_construction" value="New Construction" class="check-box"></span>
                NEW CONSTRUCTION
            </p>
        </div>
        <div class="col px-0">
            <p>
                <span><input type="checkbox" name="unified_sw" id="renovation" value="Renovation" class="check-box"></span>
                RENOVATION
                <!-- <span><input type="text" class="input-underline" style="width: 100px;"></span> -->
            </p>
        </div>
        <div class="col px-0">
            <p>
                <span><input type="checkbox" name="unified_sw" id="raising" value="Raising" class="check-box"></span>
                RAISING
                <!-- <span><input type="text" class="input-underline" style="width: 130px;"></span> -->
            </p>
        </div>
    </div>

    <div class="row pe-0 me-0">
        <div class="col pe-0">
            <p>
                <span><input type="checkbox" name="unified_sw" id="erection" value="Erection" class="check-box"></span>
                ERECTION
                <!-- <span><input type="text" class="input-underline" style="width: 120px;"></span> -->
            </p>
        </div>
        <div class="col px-0">
            <p>
                <span><input type="checkbox" name="unified_sw" id="conversion" value="Conversion" class="check-box"></span>
                CONVERSION
                <!-- <span><input type="text" class="input-underline" style="width: 100px;"></span> -->
            </p>
        </div>
        <div class="col px-0">
            <p style="font-size: smaller;">
                <span><input type="checkbox" name="unified_sw" value="Accessory Building Structure" id="accessory" class="check-box"></span>
                ACCESSORY BUILDING/STRUCTURE
                <!-- <span><input type="text" class="input-underline" style="width: 46px;"></span> -->
            </p>
        </div>
    </div>

    <div class="row pe-0 me-0">
        <div class="col pe-0">
            <p>
                <span><input type="checkbox" name="unified_sw" id="unified_addition" value="Addition" class="check-box"></span>
                ADDITION
                <!-- <span><input type="text" class="input-underline" style="width: 120px;"></span> -->
            </p>
        </div>
        <div class="col px-0">
            <p>
                <span><input type="checkbox" name="unified_sw" id="unified_repair" value="Repair" class="check-box"></span>
                REPAIR
                <!-- <span><input type="text" class="input-underline" style="width: 100px;"></span> -->
            </p>
        </div>
        <div class="col px-0">
            <p style="font-size: smaller;">
                <span><input type="checkbox" name="unified_sw" value="Legalization of Existing Building" id="legalization" class="check-box"></span>
                LEGALIZATION OF EXISTING BUILDING
                <!-- <span><input type="text" class="input-underline" style="width: 33px;"></span> -->
            </p>
        </div>
    </div>

    <div class="row pe-0 me-0">
        <div class="col pe-0">
            <p>
                <span><input type="checkbox" name="unified_sw" id="alteration" value="Alteration" class="check-box"></span>
                ALTERATION
                <!-- <span><input type="text" class="input-underline" style="width: 120px;"></span> -->
            </p>
        </div>
        <div class="col px-0">
            <p>
                <span><input type="checkbox" name="unified_sw" id="moving" value="Moving" class="check-box"></span>
                MOVING
                <!-- <span><input type="text" class="input-underline" style="width: 100px;"></span> -->
            </p>
        </div>
        <div class="col px-0 pb-1">
            <p>
                <span><input type="checkbox" name="unified_sw" id="others" value="Others" class="check-box"></span>
                OTHERS(Specify)
                <!-- <span><input type="text" class="input-underline" style="width: 100px;"></span> -->
            </p>
        </div>
    </div>
</div>

            <p>USE OR CHARACTER OF OCCUPANCY</p>
            <div class="row">

                <!-- group A-D -->
                <div class="col">
                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_a" class="check-box" value="GROUP A">
                        <span style="font-size: 10px;"> <b>GROUP A: RESIDENTIAL (DWELLINGS)</b> </span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex align-items-center mx-2">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">SINGLE</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start justify-content-start">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">DUPLEX</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center mx-2">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">RESIDENTIAL</span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: -2px;">
                        <div class="d-flex gap-1">
                            <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                            <span style="font-size: 8px;">OTHERS(Specify)</span>
                            <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px">
                        </div>
                    </div>



                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_b" class="check-box" value="GROUP B">
                        <span style="font-size: 10px;"> <b>GROUP B: RESIDENTIAL</b> </span>
                    </div>
                    <div class="row" style="margin-top: 1px;">
                        <div class="col">
                            <div class="d-flex align-items-start mx-2">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">HOTEL</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">MOTEL</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">TOWNHOUSE</span>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="margin-top: -2px;">
                        <div class="col">
                            <div class="d-flex align-items-start mx-2">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">DORMITORY</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start" style="margin-left: 20px">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">BOARDINGHOUSE,</span>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="margin-top: -2px;">
                        <div class="col">
                            <div class="d-flex align-items-start mx-2">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">RESIDENTIAL</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start" style="margin-left: 20px">
                            <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">LODGINGHOUSE</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: -2px;">
                        <div class="d-flex gap-1">
                            <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                            <span style="font-size: 8px;">OTHERS(Specify)</span>
                            <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px">
                        </div>
                    </div>


                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_c" class="check-box" value="GROUP C">
                        <span style="font-size: 8px;"> <b>GROUP C: EDUCATIONAL & RECREATIONAL</b> </span>
                    </div>

                    <div class="row" style="margin-top: -2px;">
                        <div class="col">
                            <div class="d-flex align-items-start mx-2">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">SCHOOL BLDG</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">SCHOOL AUDI</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: -2px;">
                        <div class="col">
                            <div class="d-flex align-items-start mx-2">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">CIVIC CENTER</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start mx-3">
                                <span style="font-size: 8px;">GYMNASIUM</span>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="margin-top: -2px;">
                        <div class="col">
                            <div class="d-flex align-items-start mx-2">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">CLUB HOUSE</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">CHURCH, MOSQUE, TEMPLE, CHAPEL</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: -14px;">
                        <div class="d-flex gap-1">
                            <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                            <span style="font-size: 8px;">OTHERS(Specify)</span>
                        </div>
                        <input type="text" class="input-underline" style="width: 90px ;height: 13px; margin-top: -1px; margin-left: 20px">
                    </div>


                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_d" class="check-box" value="GROUP D">
                        <span style="font-size: 9px;"> <b>GROUP D: INSTITUTIONAL</b> </span>
                    </div>

                    <div class="row">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">HOSPITAL OR SIMILAR STRUCTURE</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">HOME FOR THE AGED</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">GOVERNMENT OFFICE</span>
                        </div>
                    </div>


                    <div class="row" style="margin-top: -2px; margin-bottom: 2px">
                        <div class="d-flex gap-1">
                            <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                            <span style="font-size: 8px;">OTHERS(Specify)</span>
                            <input type="text" class="input-underline W-100" style="margin-top: 1px; height: 13px">
                        </div>
                    </div>
                </div>

                <!-- GROUP E-G -->
                <div class="col">
                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_e" class="check-box" value="GROUP E">
                        <span style="font-size: 10px;"> <b>GROUP E: COMMERCIAL</b> </span>
                    </div>



                    <div class="row" style="margin-top: 2px;">
                        <div class="col">
                            <div class="d-flex align-items-start mx-2">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">BANK</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">STORE</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">SHOPPING</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 2px;">
                        <div class="col">
                            <div class="d-flex align-items-start mx-2">
                                <input type="radio" name="" id="" class="check-box">
                                <span style="font-size: 8px;">DRINKING/DINING ESTABLISHMENT</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-start mx-2">
                                <span style="font-size: 8px;">CENTER/MALL</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 2px;">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">SHOP(i.e DRESSSHOP, TAILORING, BARBERSHOP,
                                etc.)</span>
                        </div>
                    </div>


                    <div class="row" style="margin-top: 2px; margin-bottom: 2px">
                        <div class="d-flex gap-1">
                            <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                            <span style="font-size: 8px;">OTHERS(Specify)</span>
                            <input type="text" class="input-underline W-100" style="margin-top: 1px; height: 13px">
                        </div>
                    </div>


                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_f" class="check-box" value="GROUP F">
                        <span style="font-size: 10px;"> <b>GROUP F: LIGHT INDUSTRIAL</b> </span>
                    </div>

                    <div class="row" style="margin-top: -2px;">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">FACTORY/PLANT (USING INCOMBUSTIBLE/ NON-EXPLOSIVE
                                MATERIALS)</span>
                        </div>
                    </div>

                    <div class="row" style="margin-top: -2px; margin-bottom: 2px">
                        <div class="d-flex gap-1">
                            <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                            <span style="font-size: 8px;">OTHERS(Specify)</span>
                            <input type="text" class="input-underline W-100" style="margin-top: 1px; height: 13px">
                        </div>
                    </div>

                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_g" class="check-box" value="GROUP G">
                        <span style="font-size: 10px;"> <b>GROUP G: MEDIUM INDUSTRIAL</b> </span>
                    </div>

                    <div class="row" style="margin-top: -2px;">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">STORAGE / WAREHOUSE (FOR HAZARDOUS/HIGHLY FLAMMBALE
                                MATERIALS)</span>
                        </div>
                    </div>

                    <div class="row" style="margin-top: -2px;">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">FACTORY (FOR HAZARDOUS/HIGHLY FLAMMBALE
                                MATERIALS)</span>
                        </div>
                    </div>

                    <div class="row" style="margin-top: -2px; margin-bottom: 2px">
                        <div class="d-flex gap-1">
                            <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                            <span style="font-size: 8px;">OTHERS(Specify)</span>
                            <input type="text" class="input-underline W-100" style="margin-top: 1px; height: 13px">
                        </div>
                    </div>


                </div>


                <div class="col">

                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_h" class="check-box" value="GROUP H">
                        <span style="font-size: 8px;"> <b>GROUP H: ASSEMBLY (OCCUPANT LOAD LESS THAN 1,000)</b>
                        </span>
                    </div>

                    <div class="row">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">THEATER, AUDITORIUM, CONVENTIONAL HALL, GRANDSTANDBY
                                BLEACHER</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-flex gap-1">
                            <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                            <span style="font-size: 8px;">OTHERS(Specify)</span>
                            <input type="text" class="input-underline" style="width: 70px; margin-top: 1px; height: 13px">
                        </div>
                    </div>


                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_i" class="check-box" value="GROUP I">
                        <span style="font-size: 8px;"> <b>GROUP I: ASSEMBLY (OCCUPANT LOAD 1,000 OR MORE)</b>
                        </span>
                    </div>

                    <div class="row">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">COLISEUM, SPORTS COMPLEX, CONVENTION CENTER, AND
                                SIMILAR STRUCTURE</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-flex gap-1">
                            <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                            <span style="font-size: 8px;">OTHERS(Specify)</span>
                            <input type="text" class="input-underline" style="width: 70px; margin-top: 1px; height: 13px">
                        </div>
                    </div>


                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_j_1" class="check-box" value="GROUP J/1">
                        <span style="font-size: 8px;"> <b>GROUP J: (J-1) AGRICULTURAL</b> </span>
                    </div>

                    <div class="row">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">BARN, GRANARY, POULTRY HOUSE, PIGGERY, GRAIN MILL,
                                GRAIN SILO</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-flex gap-1">
                            <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                            <span style="font-size: 8px;">OTHERS(Specify)</span>
                            <input type="text" class="input-underline" style="width: 70px; margin-top: 1px; height: 13px">
                        </div>
                    </div>


                    <div class="d-flex gap-1">
                        <input type="radio" name="co_group" id="uco_j_2" class="check-box" value="GROUP J/2">
                        <span style="font-size: 8px;"> <b>GROUP J: (J-2) AGRICULTURAL</b> </span>
                    </div>

                    <div class="row">
                        <div class="d-flex align-items-start mx-2">
                            <input type="radio" name="" id="" class="check-box">
                            <span style="font-size: 8px;">PRIVATE CARPORT/GARAGE, TOWER, SWIMMING POOL, FENCE
                                OVER 1.80m, STEEL/CONCRETE TANK</span>
                        </div>
                    </div>


                    <div class="d-flex gap-1">
                        <input type="radio" name="" id="" class="check-box" style="margin-left: 8px;">
                        <span style="font-size: 8px;">OTHERS(Specify)</span>
                        <input type="text" class="input-underline" style="width: 60px; margin-top: 1px; height: 13px">
                    </div>




                </div>
            </div>
            <!-- TYPE OF OCCUPANCY END -->

            <div class="underline w-100" style="margin-top: -1px;"></div>

            <div class="row" id="unified_totals_row">
                <div class="col">
                    <div class="d-flex gap-1">
                        <span style="font-size: 9px;">OCCUPANCY CLASSIFIED</span>
                        <input type="text" class="input-underline" style="width: 135px; margin-top: 1px; height: 13px">
                    </div>
                    <div class="d-flex gap-1">
                        <span style="font-size: 9px;">NUMBER OF UNITS</span>
                        <input type="text" class="input-underline" style="width: 157px; margin-top: 1px; height: 13px" id="unified_no_unit">
                    </div>
                    <div class="d-flex gap-1">
                        <span style="font-size: 9px;">NUMBER OF STOREY</span>
                        <input type="text" class="input-underline" style="width: 152px; margin-top: 1px; height: 13px" id="unified_no_of_storey">
                    </div>
                    <div class="d-flex gap-1">
                        <span style="font-size: 9px;">TOTAL FLOOR AREA</span>
                        <input type="text" class="input-underline W-100" style=" margin-top: 1px; height: 13px" id="unified_floor_area">
                        <span style="font-size: 9px;">SQ. M</span>
                    </div>
                    <div class="d-flex gap-1 pb-1">
                        <span style="font-size: 9px;">LOT AREA</span>
                        <input type="text" class="input-underline" style="width: 169px; margin-top: 1px; height: 13px" id="unified_lot_area">
                        <span style="font-size: 9px;">SQ. M</span>
                    </div>
                </div>


                <div class="col">
                    <div class="row">
                        <div class="d-flex gap-1">
                            <span style="font-size: 9px;">TOTAL ESTIMATED COST: P</span>
                            <input type="text" class="input-underline" style="width: 169px; margin-top: 1px; height: 13px" id="total_est_cost">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="d-flex gap-1">
                                <span style="font-size: 9px;">BUILDING</span>
                                <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px" id="est_building">
                            </div>
                            <div class="d-flex gap-1">
                                <span style="font-size: 9px;">ELECTRICAL</span>
                                <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px" id="est_electrical">
                            </div>
                            <div class="d-flex gap-1">
                                <span style="font-size: 9px;">MECHANICAL</span>
                                <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px" id="est_mechanical">
                            </div>
                            <div class="d-flex gap-1">
                                <span style="font-size: 9px;">ELECTRONICS</span>
                                <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px" id="est_electronics">
                            </div>
                            <div class="d-flex gap-1">
                                <span style="font-size: 9px;">PLUMBING</span>
                                <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px" id="est_plumbing">
                            </div>
                        </div>
                        <div class="col" style="margin-top: -2px">
                            <span style="font-size: 8px;">COST OF EQUIPMENT INSTALLED:</span>
                            <div class="d-flex gap-1">
                                <span style="font-size: 9px;">P</span>
                                <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px" id="installation_cost_electrical">
                            </div>
                            <div class="d-flex gap-1">
                                <span style="font-size: 9px;">P</span>
                                <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px" id="installation_cost_mechanical">
                            </div>
                            <div class="d-flex gap-1">
                                <span style="font-size: 9px;">P</span>
                                <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px" id="installation_cost_electronics">
                            </div>
                            <div class="d-flex gap-1">
                                <span style="font-size: 9px;">P</span>
                                <input type="text" class="input-underline w-100" style="margin-top: 1px; height: 13px" id="installation_cost_plumbing">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" id="unified_totals_row">
                <div class="col pb-1">
                    <div class="d-flex gap-1">
                        <span style="font-size: 8px;">PROPOSED DATE OF CONSTRUCTION</span>
                        <input type="text" class="input-underline" style="width: 169px; margin-top: 1px; height: 13px" id="unified_start_construction">
                    </div>

                </div>

                <div class="col">
                    <div class="d-flex gap-1 my-1">
                        <span style="font-size: 8px;">EXPECTED DATE OF COMPLETION</span>
                        <input type="text" class="input-underline" style="width: 169px ;margin-top: 1px; height: 13px" id="unified_exp_completion">
                    </div>
                </div>
            </div>


        </div> <!--box_one_cont end-->


        <div class="col-2" id="psa_only">
            <br>
            <p>DO NOT FILL-UP(PSA USE ONLY)</p>
            <table style="width: 100%;">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr style="background-color: black;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: black;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: black;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: black;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: black;"></td>
                    <td style="background-color: black;"></td>
                    <td></td>
                    <td style="background-color: black;"></td>
                    <td style="background-color: black;"></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: black;"></td>
                    <td style="background-color: black;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: black;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: black;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="background-color: white;"></td>
                </tr>
                <tr>
                    <td style="background-color: black;"></td>
                    <td style="background-color: black;"></td>
                    <td style="background-color: black;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: black;"></td>
                    <td style="background-color: black;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>



            </table>




        </div>
    </div>

    <!-- box 2 -->
    <div class="row">
    <p class="text-start text-uppercase fw-bold px-0" style="font-size: 10px;">BOX 2</p>

    </div>
    <div id="box_two_cont" class="row border border-dark" style="height: fit-content;">
        <span style="font-size: 10px;" class="fw-bold mx-2">FULL TIME INSPECTOR AND SUPERVISOR OF CONSTRUCTION WORKS
            (REPRESENTING THE OWNER)</span>

        <div class="underline w-100"></div>
        <div class="row">
            <div class="col pb-2" style="margin-top: 30px;">
                <div class="row text-center align-items-center justify-content-center">
                    <input type="text" class="input-underline w-75" style="font-size: 10px; text-align: center;"> <br>
                    <span style="font-size: 10px; margin-bottom: -3px" class="fw-bold">ARCHITECT OR CIVIL ENGINEER</span> <br>
                    <span style="font-size: 10px; margin-top: -5px"> (signed and sealed over printed name)</span>
                    <div class="d-flex gap-1 text-center align-items-center justify-content-center" style="margin-top: -4px">
                        <span style="font-size: 8px;">Date</span>
                        <input type="text" class="input-underline" style="width: 150px; margin-top: 1px; height: 13px">
                    </div>
                </div>
            </div>


            <div class="col pb-0">
                <div class="row">
                    <div class="d-flex vertical-line">
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

    </div> <!-- box_two_end -->

    <div id="box_three_cont" class="">


        <div class="row my-2">
            <div class="col border border-dark my-1" style="height: 100px; position: relative;">
                <span style="font-size: 10px; position: absolute; top: -13px; left: 0;" class="fw-bold">BOX 3</span>
                <span style="font-size: 10px;" class="fw-bold">APPLICANT:</span>

                <div class="d-flex" style="margin-top: 10px;">
                    <input type="text" class="input-underline w-75 fw-bold" style="font-size: 10px; text-align: center;" id="unified_applicant_name">
                    <span style="font-size: 10px; margin-bottom: -3px" class="fw-bold">Date</span>
                    <input type="text" class="input-underline fw-bold" style="width: 50px;font-size: 10px;" id="unified_applicant_date">

                </div>

                <span style="font-size: 10px; margin-top: -5px; margin-left: 50px"> (signed and sealed over printed name)</span>

                <div class="underline w-100" style="margin-top: 5px;"></div>

                <div class="row">
                    <div class="d-flex">
                        <span style="font-size: 10px;" class="fw-bold">Address</span>
                        <input type="text" class="input-underline w-100 mx-2 fw-bold" style="font-size: 10px;" id="unified_applicant_address">
                    </div>
                    <div class="underline w-100" style="margin-top: -7px;"></div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="d-flex align-items-start justify-content-start">
                            <span class="" style="font-size: 8px; text-align: start; text-wrap: nowrap;">Gov't Issued ID</span>
                            <input type="text" class="input-underline w-50" style="font-size: 10px;">
                        </div>

                    </div>
                    <div class="col">
                        <div class="d-flex align-items-start justify-content-start">
                            <span style="font-size: 8px;">Date Issued</span>
                            <input type="text" class="input-underline w-50" style="font-size: 10px;">
                        </div>

                    </div>
                    <div class="col">
                        <div class="d-flex align-items-start justify-content-start">
                            <span style="font-size: 8px;">Place Issued</span>
                            <input type="text" class="input-underline w-50" style="font-size: 10px;" value="Nasugbu">
                        </div>
                    </div>

                    <div class="underline w-100" style="margin-top: -7px;"></div>
                </div>

            </div>
            <div class="col border border-dark my-1" style="height: 100px; position: relative;">
                <span style="font-size: 10px; position: absolute; top: -13px; left: 0;" class="fw-bold">BOX 4</span>
                <span style="font-size: 10px;" class="fw-bold">WITH MY CONSENT: LOT OWNER/AUTHORIZED REPRESENTATIVE</span>

                <div class="d-flex" style="margin-top: 10px;">
                    <input type="text" class="input-underline w-75" style="font-size: 10px; text-align: center;">
                    <span style="font-size: 10px; margin-bottom: -3px" class="fw-bold">Date</span>
                    <input type="text" class="input-underline" style="width: 50px;font-size: 10px;">

                </div>

                <span style="font-size: 10px; margin-top: -5px; margin-left: 50px"> (signed and sealed over printed name)</span>

                <div class="underline w-100" style="margin-top: 5px;"></div>

                <div class="row">
                    <div class="d-flex">
                        <span style="font-size: 10px;" class="fw-bold">Address</span>
                        <input type="text" class="input-underline w-100" style="font-size: 10px;">
                    </div>
                    <div class="underline w-100" style="margin-top: -7px;"></div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="d-flex align-items-start justify-content-start">
                            <span style="font-size: 8px; text-align: start; text-wrap: nowrap;">Gov't Issued ID</span>
                            <input type="text" class="input-underline w-50" style="font-size: 10px;">
                        </div>

                    </div>
                    <div class="col">
                        <div class="d-flex align-items-start justify-content-start">
                            <span style="font-size: 8px;">Date Issued</span>
                            <input type="text" class="input-underline w-50" style="font-size: 10px;">
                        </div>

                    </div>
                    <div class="col">
                        <div class="d-flex align-items-start justify-content-start">
                            <span style="font-size: 8px;">Place Issued</span>
                            <input type="text" class="input-underline w-50" style="font-size: 10px;">
                        </div>
                    </div>

                    <div class="underline w-100" style="margin-top: -7px;"></div>
                </div>



            </div>
        </div>

    </div> <!-- box_three_end -->


    <div class="row">

    <p class="pl-0 text-start text-uppercase fw-bold px-0" style="font-size: 10px; margin-top: -8px;">BOX 5</p>
    </div>
    <div id="box_five_cont" class="row border border-dark" style="height: fit-content;">
        <div class="row mx-2">
            <div class="col">
                <div class="d-flex">
                    <span style="font-size: 10px;">REPUBLIC OF THE PHILIPPINES CITY/MUNICIPALITY OF</span>
                    <input type="text" class="input-underline w-100 fw-bold text-center" style="font-size: 10px; margin-top: 10px" value="NASUGBU, BATANGAS">
                    <span style="font-size: 10px;  margin-top: 10px">)</span>
                </div>

            </div>

            <div class="col my-1">
                <span style="font-size: 10px;" class="fw-bold">S.S</span>
            </div>
        </div>


        <div class="row" style="margin-top: 2px;">
            <div class="d-flex justify-content-center">
                <span style="font-size: 10px;">BEFORE ME, at the Municipality of </span>
                <input type="text" class="input-underline fw-bold text-center" style="width: 200px; font-size: 10px;" value="Nasugbu"> 
                <span style="font-size: 10px;">, on </span>
                <input type="text" class="input-underline" style="width: 100px; font-size: 10px;">
                <span style="font-size: 10px;">personally appeared the following: </span>
            </div>

        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="col-5">
                <div class="d-flex flex-column align-items-center">
                    <input type="text" class="input-underline text-center fw-bold" style="width: 240px; font-size: 10px;" id="applicant_name">
                    <span style="font-size: 10px;">APPLICANT</span>
                </div>
            </div>
            <div class="col-2">
                <div class="d-flex flex-column align-items-center">
                    <input type="text" class="input-underline" style="width: 120px; font-size: 10px;">
                    <span style="font-size: 10px;">Gov't Issued ID No.</span>
                </div>
            </div>
            <div class="col-2">
                <div class="d-flex flex-column align-items-center">
                    <input type="text" class="input-underline" style="width: 120px; font-size: 10px;" >
                    <span style="font-size: 10px;">Date Issued</span>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex flex-column align-items-center">
                    <input type="text" class="input-underline text-center fw-bold" style="width: 140px; font-size: 10px;" value="Nasugbu, Batangas">
                    <span style="font-size: 10px;">Place Issued</span>
                </div>
            </div>


        </div>

        <div class="row " style="margin-top: 15px;">
            <div class="col-5">
                <div class="d-flex flex-column align-items-center" style="margin-bottom: -3px">
                    <input type="text" class="input-underline" style="width: 240px; font-size: 10px;">
                    <span style="font-size: 10px;">LICENSED ARCHITECT OR CIVIL ENGINEER</span>
                </div>
                <span style="font-size: 10px; margin-top: -4px; margin-left: 30px">(Full time Inspector and Supervisor of contruction works)</span>
            </div>
            <div class="col-2">
                <div class="d-flex flex-column align-items-center">
                    <input type="text" class="input-underline" style="width: 120px; font-size: 10px;">
                    <span style="font-size: 10px;">Gov't Issued ID No.</span>
                </div>
            </div>
            <div class="col-2">
                <div class="d-flex flex-column align-items-center">
                    <input type="text" class="input-underline" style="width: 120px; font-size: 10px;">
                    <span style="font-size: 10px;">Date Issued</span>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex flex-column align-items-center">
                    <input type="text" class="input-underline text-center fw-bold" style="width: 140px; font-size: 10px;" value="Nasugbu, Batangas">
                    <span style="font-size: 10px;">Place Issued</span>
                </div>
            </div>
        </div>


        <div class="row mx-2 my-2">
            <span style="font-size: 12px;">Whose signatures appears hereinabove, known to me to be the same person who executed this standard
                prescribed formand acknowledge to me that the same is their free and voluntary act and deed.
            </span>
            <span style="font-size: 12px;" class="my-2 mx-2">WITNESS MY HAND AND SEAL on the date and place above written </span>
        </div>

        <div class="row pb-1">
            <div class="col mx-2" style="margin-top: -10px;">
                <span style="font-size: 11px;">Doc no.</span>
                <input type="text" class="input-underline" style="width: 80px; font-size: 10px;"> <br>
                <span style="font-size: 11px;">Page no.</span>
                <input type="text" class="input-underline" style="width: 80px; font-size: 10px;"> <br>
                <span style="font-size: 11px;">Book no.</span>
                <input type="text" class="input-underline" style="width: 80px; font-size: 10px;"> <br>
                <span style="font-size: 11px;">Series of</span>
                <input type="text" class="input-underline" style="width: 80px; font-size: 10px;">
            </div>

            <div class="col">
                <div class="d-flex flex-column align-items-center">
                    <input type="text" class="input-underline" style="width: 240px; font-size: 10px;">
                    <span style="font-size: 10px;">NOTARY PUBLIC (Until December <span>
                            <input type="text" class="input-underline" style="width: 70px; font-size: 10px;">
                        </span>)</span>

                </div>
            </div>
        </div>



    </div>
    <!-- box_five_end -->

</div> <!--form end-->

<script>

<?php 
    
    // $user_id = $_SESSION['user_id'];
    $review_applicant = select('vw_applicant_basics',"applicant_id = '$project_applicant'");
    if (mysqli_num_rows($review_applicant) > 0) {
        while ($row = mysqli_fetch_assoc($review_applicant)) {

        echo "$('#unified_app_fname')[0].value = '" . $row['firstname'] . "';";
        echo "$('#unified_app_mname')[0].value = '" . $row['middlename'] . "';";
        echo "$('#unified_app_lname')[0].value = '" . $row['lastname'] . "';";
        echo "$('#unified_app_tin')[0].value = '" . $row['tin'] . "';";
        echo "$('#unified_house_number')[0].value ='".$row['house_no'] . "';";
        echo "$('#unified_street_name')[0].value ='".$row['street_name'] . "';";
        echo "$('#unified_barangay')[0].value ='".$row['barangay'] . "';";
        echo "$('#unified_contact_no')[0].value ='".$row['contact_no'] . "';";

        $fullname = $row['lastname'].' '.$row['firstname'].' '.$row['middlename']; 
        echo "$('#applicant_name')[0].value = '" . $fullname . "';";

        echo "$('#unified_applicant_name')[0].value = '" . $fullname . "';";

        $fullAdress = $row['lot_no'].' '.$row['block_no'].' '.$row['street_name'].' '.$row['barangay']; 

        echo '$("#unified_applicant_address").val("'.$fullAdress.'");';


        
        
    }
}



    $project_address = full_query("SELECT vw_project_basics.project_id, vw_project_basics.street_name,
    vw_project_basics.lot_no, vw_project_basics.block_no, vw_project_basics.barangay, project.tct_no, project.tax_dec_no
    FROM project
    JOIN vw_project_basics
    ON project.id = vw_project_basics.project_id
    WHERE project.id = '$project_id'");

    if ($row = mysqli_fetch_assoc($project_address)) {

        echo '$("#lot_no").val("'.$row["lot_no"].'");';
        echo '$("#blk_no").val("'.$row["block_no"].'");';
        echo '$("#tct_no").val("'.$row["tct_no"].'");';
        echo '$("#tax_dec_no").val("'.$row["tax_dec_no"].'");';
        echo '$("#proj_loc_street").val("'.$row["street_name"].'");';
        echo '$("#proj_loc_barangay").val("'.$row["barangay"].'");';

    }



    $unified_project = full_query("SELECT vw_project_basics.project_id, vw_project_basics.lot_area, 
    vw_project_basics.no_of_storey, vw_project_basics.total_floor_area, vw_project_basics.no_of_units
    FROM vw_project_basics
    WHERE vw_project_basics.project_id = '$project_id'");

    if ($row = mysqli_fetch_assoc($unified_project)) {

        echo '$("#unified_no_unit").val("'.$row["no_of_units"].'");';
        echo '$("#unified_no_of_storey").val("'.$row["no_of_storey"].'");';
        echo '$("#unified_floor_area").val("'.$row["total_floor_area"].'");';
        echo '$("#unified_lot_area").val("'.$row["lot_area"].'");';


    }





    $unified_ownership = select('f_unified',"id = '$project_unified'");
    if (mysqli_num_rows($unified_ownership) > 0) {
    while ($row = mysqli_fetch_assoc($unified_ownership)) {


    echo "$('#unified_ownership')[0].value ='".$row['form_of_ownership'] . "';";

    //unified scope of work
    echo '$(\'input[name="unified_sw"][value="' . $row['scope'] . '"]\').prop(\'checked\', true);';


    //character of occupancy
    //group


    $groupDesignation = strtoupper(explode(' - ', $row['occupancy_group'])[0]);
    // echo "console.log('".$groupDesignation."')";
    echo '$(\'input[name="co_group"][value="' . $groupDesignation . '"]\').prop(\'checked\', true);';


 

    //estimated costs
    echo "$('#total_est_cost')[0].value ='".$row['est_cost_total'] . "';";
    echo "$('#est_building')[0].value ='".$row['est_cost_building'] . "';";
    echo "$('#est_electrical')[0].value ='".$row['est_cost_electrical'] . "';";
    echo "$('#est_mechanical')[0].value ='".$row['est_cost_mechanical'] . "';";
    echo "$('#est_electronics')[0].value ='".$row['est_cost_electronics'] . "';";
    echo "$('#est_plumbing')[0].value ='".$row['est_cost_plumbing'] . "';";

    echo "$('#unified_area_no')[0].value ='".$row['area_no'] . "';";

    echo '$(\'input[name="application_type"][value="' . $row['application_type'] . '"]\').prop(\'checked\', true);';

    //proposed date
    echo "$('#unified_start_construction')[0].value ='".formatDateOnly($row['date_proposed_construction']). "';";
    echo "$('#unified_exp_completion')[0].value ='".formatDateOnly($row['date_estimated_completion']) . "';";
    }
    }



    ?>




    </script>