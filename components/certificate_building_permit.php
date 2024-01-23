
<div id = "cert_cont">

    
    <style>
        #building_permit_certificate{
        /* 
                top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); */
        
        /* Set the transform origin to top-left corner */
        transform-origin: top left;
        }

        #cert_cont label {
            font-weight: lighter !important;
        }

        #cert_cont input {
            font-weight: bold !important;
            padding: 10px !important;
        }

       

        .certificate {
            width: 320mm;
            /* A4 width in landscape mode */
            height: 240mm;
            /* A4 height in landscape mode */
            margin: 0 auto;
            position: relative;
            border: 3px solid #294ca5fa;
            /* Solid black border */
            /* background-image: url(bpa_formdocs/unified.jpg); */
            background-repeat: no-repeat;
            background-size: contain;
        }

        .logo {
            width: 100px;
            /* Adjust the width of the logo */
            float: left;
            margin-right: 20px;
            /* Adjust the spacing between the logo and text */
        }

        .text-center {
            text-align: center;
        }

        .my-3 {
            margin: 3px 0;
        }

        .fw-bold {
            font-weight: bold;
        }

        .certificate-header {
            padding: 50px;
        }

        .form-check {
            display: inline-block;
            margin: 5px;
            font-size: 9px;
        }


        /* .body {
            line-height: 0px;
        } */

        #building_permit_certificate .input-field {
            border: 1px solid black;
            float: left;
            margin: 0;
            padding: 0;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            width: 100px;
            height: 19px;
        }

        .input-field-date {
            border: 1px solid black;
            float: left;
            /* margin: 0;
        padding: 0; */
                border-top: 0px;
                border-left: 0px;
                border-right: 0px;
                width: 140px;
                height: 20px;
            }

            .input-field-short {
                border: 1px solid black;
                float: left;
                margin: 0;
                padding: 0;
                border-top: 0px;
                border-left: 0px;
                border-right: 0px;
                vertical-align: middle;
                width: 85px;
                height: 20px;
            }

            .input-field-qty {

                float: right;
                margin: 0;
                padding: 0;
                border-top: 0px;
                border-left: 0px;
                border-right: 0px;
                width: 75px;
                height: 17px;
                margin-bottom: 4px;
            }

            .checkbox {
                /* width: 4px;
                height: 4px;
                margin: 0;
                padding: 0;
                vertical-align: middle; */
            }

            .custom-align {
                display: flex;
                align-items: center;
            }


            .form-check {
                margin-bottom: -2px;
                /* Adjust this value as needed */
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

                label, input {
                    font-size: 11px !important;
                }

                h4 {
                    font-size: 15px;
                }

                .bottom-row {
                    margin-top: -28px !important;
                    font-size: 12px;
                }

                .form-check-input {
                    width: 10px !important;
                    height: 10px !important;
                }


                #cert_cont {
                    margin-top: -30px !important;
                    transform: scale(1.00);
                    background-color: red;
                    margin: 0 !important;
                    height: auto;
                    
                    padding-bottom: -5px !important;
                }

                #building_permit_certificate {
                    border: none;
                }

                #cert_cont img{
                    width: 140px !important; 
                    height: 145px !important;
                }
            }
    </style>

        

    <div class="certificate" id = "building_permit_certificate" style = " transform: scale(0.850)">
        <div class="certificate-header">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <img class="logo" src="../img/icon/Seal_of_Nasugbu.png" alt="Logo" style="width: 148px; height: 137px;">
                </div>
                <div class="col d-flex flex-column align-items-center">
                    <div class="d-block">
                        <p class="text-uppercase fw-bold" style="font-size: 13px; text-align: center;">
                            Republic of the Philippines <br>
                            Municipality of Nasugbu <br>
                            Province OF Batangas
                        </p>
                        <p class="fw-bold" style="font-size: 16px; margin-bottom: -36px;">Office of the Building Official</p><br>
                        <p class="text-center fs-3 fw-bold" style="">Building Permit</p><br>
                    </div>
                </div>

                <div class="col">

                </div>
            </div>
            
            

            <!-- Application Purpose -->
            <div class="text-center" style="margin-top: -45px; ">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="New" id="new" style="width: 20px; height: 20px;">
                    <label class=" mx-4 custom-align" for="new" style="font-size: 18px;">New</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Renewal" id="renewal" style="width: 20px; height: 20px;">
                    <label class=" mx-4 custom-align" for="renewal" style="font-size: 18px;">Renewal</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Amendatory" id="amendatory" style="width: 20px; height: 20px;">
                    <label class=" mx-4 custom-align" for="amendatory" style="font-size: 18px;">Amendatory</label>
                </div>
            </div> <br>


            <div class="row">
                <div class="col-4">
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="">
                            <label class=" fw-bold mx-3 text-uppercase" style="font-size: 15px;">
                                BUILDING PERMIT NO.

                            </label>
                        </div>
                        <input class="input-field" style="height: 20px; width: 152px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="">
                            <label class=" fw-bold mx-3 text-uppercase" style="font-size: 15px;">
                                DATE ISSUED:

                            </label>
                        </div>
                        <input class="input-field" style="height: 20px; width: 211px;" type="text" placeholder=""><br>
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="">
                            <label class=" fw-bold mx-3 text-uppercase" style="font-size: 15px;">
                                FSEC NO.

                            </label>
                        </div>
                        <input class="input-field" style="height: 20px ; width: 243px;" type="text" placeholder=""><br>
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="">
                            <label class=" fw-bold mx-3 text-uppercase" style="font-size: 15px;">
                                DATE ISSUED

                            </label>
                        </div>
                        <input class="input-field" style="height: 20px; width: 215px;" type="text" placeholder="">
                    </div>
                </div>
                <div class="col-4">

                </div>
                <div class="col-4">
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="">
                            <label class=" fw-bold text-uppercase" style="font-size: 15px;">
                                OFFICIAL RECEIPT NO.

                            </label>
                        </div>
                        <input class="input-field mx-1" style="height: 20px; width: 167px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="">
                            <label class=" fw-bold text-uppercase" style="font-size: 15px;">
                                DATE PAID:

                            </label>
                        </div>
                        <input class="input-field" style="height: 20px; width: 257px;" type="text" placeholder=""><br>
                    </div>

                </div>
            </div><br>

            <div class="row">
                <p>This <b>PERMIT</b> is issued persuant to Sections 207,301,302,303 and 304 of the National Building Code of the Philippines (PD 1096) ,its Revised IRR ,other Referral Codes and its Term and Conditions.</p>
            </div>
            <div class="row">
                <div class="d-inline-flex align-items-start justify-content-start">
                    <div class="">
                        <label class=" text-uppercase fw-bold" style="font-size: 15px;">
                            OWNER/PERMITEE:

                        </label>
                    </div>
                    <input class="input-field w-100" style="height: 20px; width: 100%;" type="text" id="owner_permit"><br>
                </div>
            </div>
            <div class="row">
                <div class="d-inline-flex align-items-start justify-content-start">
                    <div class="">
                        <label class=" text-uppercase fw-bold" style="font-size: 15px;">
                            PROJECT TITLE:

                        </label>
                    </div>
                    <input class="input-field" style="height: 20px; width: 978px;" type="text" id="cert_project_title"><br>
                </div>
            </div>
            <div class="row">

                <div class="col-3">
                    <p class=" text-uppercase" style="font-size: 15px;">LOCATION OF CONSTRUCTION:</p>

                </div>
                <div class="col-3">
                    <div class="d-inline-flex align-items-start justify-content-start">


                        <label class=" text-uppercase fw-bold" style="font-size: 15px; margin-left: -19px;">
                            LOT:

                        </label>

                        <input class="input-field" style="height: 20px; width: 55px; " type="text" id="cert_lot_no">


                    </div>
                </div>
                <div class="col-3">
                    <div class="d-inline-flex align-items-start justify-content-start">


                        <label class=" text-uppercase fw-bold" style="font-size: 15px; margin-left: -200%; ">
                            BLK:

                        </label>

                        <input class="input-field" style="height: 20px; width: 55px;  " type="text" id="cert_blk_no">


                    </div>
                </div>
                <div class="col-3">
                    <div class="d-inline-flex align-items-start justify-content-start">


                        <label class="  fw-bold" style="font-size: 15px; margin-left: -359px; text-wrap: nowrap;">
                            TCT NO:

                        </label>

                        <input class="input-field" style="height: 20px; width: 120px; " type="text" id="cert_tct_no">

                        <div class="d-inline-flex align-items-start justify-content-start">


                            <label class=" text-uppercase fw-bold" style="font-size: 15px; ">
                                STREET:

                            </label>
                            <input class="input-field" style="height: 20px; width: 153px; " type="text" id="cert_street">

                            <label class=" text-uppercase fw-bold" style="font-size: 15px; margin-left: 21px;">
                                BRGY:

                            </label>

                            <input class="input-field" style="height: 20px; width: 155px; " type="text" id="cert_brgy">


                        </div>
                    </div>





                </div>



            </div>

            <div class="row ">


                <div class="col-4" style="margin-top: -10px;">
                    <div class="d-inline-flex align-items-start justify-content-start">


                        <label class="  fw-bold" style="font-size: 15px; margin-left: 240px;">
                            CITY/MUNICIPALITY:

                        </label>

                        <input class="input-field" style="height: 20px; width: 400px; " type="text" value="Nasugbu, Municipality">

                        <div class="d-inline-flex align-items-start justify-content-start">

                            <label class=" text-uppercase fw-bold" style="font-size: 15px;">
                                ZIPCODE:

                            </label>

                            <input class="input-field" style="height: 20px; width: 239px; " type="text" value="4231">


                        </div>
                    </div>
                </div>




            </div>

            <div class="row">
                <div class="col-6">
                    <div class="d-inline-flex align-items-start justify-content-start">


                        <label class=" text-uppercase fw-bold" style="font-size: 15px; ">
                            USE OR CHARACTER OF OCCUPANCY:

                        </label>

                        <input class="input-field " style="height: 20px; width: 253px; " type="text" id="cert_coo">


                    </div>
                </div>
                <div class="col-4">
                    <div class="d-inline-flex align-items-start justify-content-start">


                        <label class=" text-uppercase fw-bold" style="font-size: 15px; text-wrap: nowrap; ">
                            and Classified As:

                        </label>

                        <input class="input-field" style="height: 20px; width: 383px;  " type="text" placeholder="">


                    </div>
                </div>

            </div>
            <div class="row">
                <div class="d-inline-flex align-items-start justify-content-start">
                    <div class="">
                        <label class=" text-uppercase fw-bold" style="font-size: 15px;">
                            Scope of work:

                        </label>
                    </div>
                    <input class="input-field" style="height: 20px; width: 964px;" type="text" id="cert_scope"><br>
                </div>
            </div>
            <div class="row">
                <div class="d-inline-flex align-items-start justify-content-start">
                    <div class="">
                        <label class=" text-uppercase fw-bold" style="font-size: 15px;">
                            TOTAL PROJECT COST:

                        </label>
                    </div>
                    <input class="input-field" style="height: 20px; width: 928px;" type="text" id="cert_project_cost"><br>
                </div>
            </div>
            <div class="row">
                <div class="d-inline-flex align-items-start justify-content-start">
                    <div class="">
                        <label class=" text-uppercase fw-bold" style="font-size: 15px;">
                            PROFESSIONAL IN CHARGE IN CONSTRUCTION:

                        </label>
                    </div>
                    <input class="input-field" style="height: 20px;  width: 742px;" type="text" id="cert_in_charge"><br>
                </div>
            </div><br>



            <div class="row">
                <div class="col-6 " style="margin-left: 100px;">
                    <h4 class="fw-bold"> PERMIT ISSUED BY:</h4>
                </div>
            </div><br>
            <div class="row bottom-row">
                <center>

                    <u><b>ENGR. ROMEO A. VELASCO</u><br>
                    BUILDING OFFICIAL</b><br>
                    (signature over Printed name)

                    <p><b>THIS PERMIT MAY BE CANCELLED OR REVOKED PURSUANT TO SECTION 207, 305 AND 206 OF THE NATIONAL BUILDING CODE OF THE PHILIPPINES (PD 1096) AND ITS REVISED IRR</b></p>
                </center>

            </div>

        </div>


    </div>
    </div>

    <script>







        <?php
        
        $building_permit_cert = full_query("SELECT 
        vw_applicant_basics.full_name, 
        vw_project_basics.title, 
        vw_project_basics.tct_no,
        vw_project_basics.street_name,
        vw_project_basics.lot_no,
        vw_project_basics.block_no,
        vw_project_basics.barangay,
        vw_project_basics.profession,
        vw_project_ids.unified,
        f_unified.scope, 
        f_unified.est_cost_total
        
        FROM 
            vw_project_ids
        JOIN 
            vw_project_basics ON vw_project_ids.project_id = vw_project_basics.project_id
        JOIN 
            vw_applicant_basics ON vw_project_ids.project_applicant = vw_applicant_basics.applicant_id
        JOIN 
            f_unified ON vw_project_ids.unified = f_unified.id
        WHERE vw_project_ids.project_id = '".$project_id."'");

        
        if ($row = mysqli_fetch_assoc($building_permit_cert)) {

            echo '$("#owner_permit").val("'.$row["full_name"].'");';
            echo '$("#cert_project_title").val("'.$row["title"].'");';
            echo '$("#cert_lot_no").val("'.$row["lot_no"].'");';
            echo '$("#cert_blk_no").val("'.$row["block_no"].'");';
            echo '$("#cert_tct_no").val("'.$row["tct_no"].'");';
            echo '$("#cert_street").val("'.$row["street_name"].'");';
            echo '$("#cert_brgy").val("'.$row["barangay"].'");';
            echo '$("#cert_scope").val("'.$row["scope"].'");';
            echo '$("#cert_project_cost").val("'.$row["est_cost_total"].'");';
            echo '$("#cert_in_charge").val("'.$row["profession"].'");';



        }
        
        
        
        
        
        
        ?>
    </script>