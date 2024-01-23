<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  -->


<?php
// print_r($_POST);

if (isset($_POST['open'])) {

    echo '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
$(document).ready(function() {


    window.print()

})
</script>

    ';

    require "../php/db_func.php";

    function string_between_two_string($str, $starting_word, $ending_word)
    {
        $arr = explode($starting_word, $str);
        if (isset($arr[1])) {
            $arr = explode($ending_word, $arr[1]);
            return $arr[0];
        }
        return '';
    }


    session_start();
    $link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $locational = substr($link, strpos($link, "locational=") + 11);
    $project_id = string_between_two_string($link, "project=", "&");

    // print_r($_SESSION);
    // echo $project_id;
    // echo "<br>";
    // echo $locational;




}

?>
  <style>
        #locational_form {
            border: 1px solid black;
            padding: 4.5rem;
            /* size of long bond paper */
            width: 22cm;
            height: 39cm;
            font-style: "Arial, Helvetica, sans-serif";
        }

        #locational_form input {
            font-weight: bold;
            text-align: center;

        }

        #locational_form input:disabled {
            color: black;
        }

        div#locational_form_header>p {
            margin-bottom: -7px;

        }

        #locational_form_body {
            font-size: 12px;
        }

        #locational_form_body .input-underline {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid black;
        }

        .input-underline:focus {
            background-color: #e2e2e25e !important;

        }

        #application_basic p {
            display: inline-block;
            width: 100%;
        }

        #locational_form_body p,
        input {
            margin-bottom: 0px;
        }

        #application_basic p {
            display: inline-block;
            width: 100%;
        }

        #application_basic input {
            float: right;

        }


        /* print styles */
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


            #locational_form {
                padding-top: 5px;
                padding-left: 10px;
                padding-right: 10px;

                padding-bottom: 5px;
                transform: scale(0.90);
                background-color: red;
                /* display: none; */
                margin: none;
                height: auto;

                border: none;
            }
        }

   
    </style>

   
<div id="locational_form" class="m-auto print">

  

            <div id="locational_form_header" style='font-family: "Times New Roman", Times, serif; text-align: center;'>
                <p>REPUBLIC OF THE PHILIPPINES</p>
                <p style="font-weight: bold;font-size: larger;">MUNICIPALITY OF NASUGBU </p>
                <p style="font-weight: bold;font-size: larger;">PROVINCE OF BATANGAS</p>
                <p class="my-4">DEPARTMENT OF MUNICIPAL PLANNING AND <br> DEVELOPMENT COORDINATOR/ZONING ADMINISTRATOR
                </p>
                <p class="mb-4" style="font-weight: bold;font-size:1.5rem; font-family: 'BernardMT Condensed';">
                    APPLICATION FOR LOCATIONAL CLEARANCE</p>
            </div>
            <div id="locational_form_body" class="row gx-5">

                <div class="col-6 right-portion">
                    <div id="application_basic">
                        <p>ANNEX A of HSRC Memorandum Circular No.<span><input id = "vw_loc_annex" type="text" class="input-underline" style="width: 50px; float: right;"></span></p>
                        <p>Application No. : <span><input id = "vw_loc_app_no" type="text" class="input-underline"></span></p>
                        <p>Date of Receipt : <span><input id = "vw_loc_receipt_date" type="text" class="input-underline"></span></p>
                        <p>PMO No./O.R No. : <span><input id = "vw_loc_or_no" type="text" class="input-underline"></span></p>
                        <p>Date Issued : <span><input id = "vw_loc_date_issued" type="text" class="input-underline"></span></p>
                        <p>Amount Paid : <span><input id = "vw_loc_amount_paid" type="text" class="input-underline"></span></p>
                    </div>

                    <input id = "vw_loc_app_name" type="text" name=""  class="input-underline w-100">
                    <p>(1) NAME OF APPLICANT(Last, First, Middle)</p>

                    <input id = "vw_loc_app_address" type="text" name=""  class="input-underline w-100">
                    <p>(2) ADDRESS OF APPLICANT</p>

                    <input id = "vw_loc_auth_rep" type="text" name=""  class="input-underline w-100" >
                    <p>(5) NAME OF AUTHORIZED REPRESENTATIVE</p>


                    <input id = "vw_loc_proj_type" type="text" name=""  class="input-underline w-100">
                    <p>(7) PROJECT TYPE <br>(Residential,Commercial,Institutional,Industrial Others Specify)</p>

                    <input id = "vw_loc_proj_loc" type="text" name=""  class="input-underline w-100">
                    <p>(9) PROJECT LOCATION <br> (Number, Street, Barangay City/Mun.Provinces)</p>

                    <p>(11) RIGHT OVER LAND</p>
                    <div class="row p-0 m-0" id="rol_radios" name="rol_radios">

                        <div class="col">
                            <p><span><input id = "vw_loc_rol_owner" type="radio" name="right_over_land"  value="owner"></span>Owner</p>
                            <p><span><input id = "vw_loc_rol_lease" type="radio" name="right_over_land"  value="lease"></span>Lease</p>
                        </div>
                        <div class="col-7">
                            <p><span><input id = "vw_loc_rol_other" type="radio" name="right_over_land"  value="other"></span> Other
                            </p>
                            <p>Specify<span><input id = "vw_loc_rol_spec" type="text" class="input-underline w-50" ></span> </p>
                        </div>
                    </div>

                    <p>(13) EXISTING LAND USE OF PROJECT SITE</p>
                    <div class="row p-0 m-0" id="loc_elu_radios">

                        <div class="col">
                            <p><span><input type="radio" name="elu" id="elu_residential" value="residential"></span> Residential</p>
                            <p><span><input type="radio" name="elu" id="elu_institutional" value="institutional"></span> Institutional</p>
                            <p><span><input type="radio" name="elu" id="elu_commercial" value="commercial"></span> Commercial</p>

                        </div>
                        <div class="col-7">
                            <p><span><input type="radio" name="elu" id="elu_industrial" value="industrial"></span> Industrial</p>
                            <p><span><input type="radio" name="elu" id="elu_others" value="other"></span> Other</p>
                            <p>Specify<span><input id = "elu_others_spec" type="text" class="input-underline w-50" ></span> </p>


                        </div>
                    </div>


                </div> <!-- end of left portion -->

                <!-- <div class="" style="width: 10px;"></div> -->


                <div class="col-6 left-portion" style="margin-top: -60px;">
                    <br> <br><br><br><br>

                    <p>Municipality of Nasugbu, Batangas</p>
                    <input id = "vw_loc_office_address" type="text" name=""  class="input-underline w-100" value="MPDC Office, J P Laurel St, Nasugbu, Batangas">
                    <p class="text-center">(Office and Address)</p>
                    <input id = "vw_loc_corp_name" type="text" name=""  class="input-underline w-100">
                    <p>NAME OF CORPORATION</p>
                    <input id = "vw_loc_corp_address" type="text" name=""  class="input-underline w-100">
                    <p>(4) ADDRESS OF CORPORATION</p>
                    <input id = "vw_loc_auth_representative" type="text" name=""  class="input-underline w-100">
                    <p>(6) ADDRESS OF AUTHORIZED REPRESENTATIVE</p>
                    <br>
                    <p>(8) PROJECT NATURE</p>
                    <div class="row p-0 m-0" id="proj_nature_radios">

                        <div class="col">
                            <p><span><input type="radio" name="proj_nature" id="proj_nature_new" value="new development"></span>New Development</p>
                            <p><span><input type="radio" name="proj_nature" id="proj_nature_improvement" value="improvement"></span>Improvement</p>

                        </div>
                        <div class="col-7">
                            <p><span><input type="radio" name="proj_nature" id="proj_nature_other" value="other"></span> Other</p>
                            <p>Specify<span><input id = "proj_nature_other_spec" type="text" class="input-underline w-50" ></span> </p>


                        </div>
                    </div>

                    <input id = "vw_loc_proj_area" type="text" name=""  class="input-underline w-100">
                    <p>(10) PROJECT AREA (in square meters)</p>
                    <div class="d-flex">
                        <p class="d-inline-flex">Lot</p>
                        <input id = "vw_loc_proj_lot" type="text" class="d-inline-flex input-underline w-100">
                    </div>
                    <div class="d-flex">
                        <p class="d-inline-flex">Building(s) Improvement:</p>
                        <input id = "vw_loc_blg_improvment" type="text" class="d-inline-flex input-underline" style="width: 281px;">
                    </div>
                    <p>(12) PROJECT TENURE</p>
                    <div id="proj_tenure_radios">
                        <p><span><input type="radio" name="proj_tenure" id="proj_tenure_new" value="New Development"></span>New Development</p>
                        <div class="d-flex">
                            <p class="d-inline-flex"><span><input type="radio" name="proj_tenure" id="proj_tenure_temp" value="Temporary"></span>Temporary
                                (specify years)</p>
                            <input id = "proj_tenure_temp_spec" type="text" class="d-inline-flex input-underline">
                        </div>
                        <p><span><input type="radio" name="proj_tenure" id="proj_tenure_3" value="Vacant/Idle"></span>Vacant/Idle</p>
                        <div class="d-flex">
                            <p class="d-inline-flex"><span><input type="radio" name="proj_tenure" id="proj_tenure_agricultural" value="Agricultural"></span>Agricultural (specify crop)</p>
                            <input id = "proj_tenure_agricultural_spec" type="text" class="d-inline-flex input-underline" >
                        </div>
                        <div class="row">
                            <p class="col"><span><input type="radio" name="proj_tenure" id="proj_tenure_tenanted" value="Tenanted"></span>Tenanted</p>
                            <p class="col"><span><input type="radio" name="proj_tenure" id="proj_tenure_tenanted_not" value="Not-Tenantend"></span>Not Tenanted</p>

                        </div>
                    </div>
                </div> <!--end of right-portion  -->


                <p>(14) PROJECT COST/CAPITALIZATION(in pesos, write in words and figures)</p>
                <input id = "vw_loc_czc" type="text" class="input-underline">
                <p>(15) IF THE PROJECT APPLIED FOR THE SUBJECT OF WRITTEN NOTICE(S) FROM THIS COMMISION AND ITS
                    DEPUTIZED ZONING
                    ADMINISTRATORS TO THE EFFECT REQUIRING FOR PRESENTATION OF LOCATIONAL CLEARANCE/CERTIFICATE OF
                    ZONING COMPLIANCE/CZC.
                </p>
                <div class="row w-75" style="margin: 0;">
                    <p class="col"><span><input type="radio" name="written_notice" id="written_notice_yes" value="yes"></span>Yes</p>
                    <p class="col"><span><input type="radio" name="written_notice" id="written_notice_no" value="no"></span>No</p>

                </div>
                <p><span><input type="radio" name="written_notice" id="written_notice_other" value="other"></span> Other HSRC Officer of Zoning
                    Adminsitrator who issued the notice(s)</p>
                <div class="row">
                    <div class="col-7">
                        <input id = "vw_loc_czc_date" type="text" class="input-underline w-100" id="loc_czc_date" name="loc_date_notice">
                        <input id = "vw_loc_czc_order_notice" type="text" class="input-underline w-100" id="loc_czc_notice" name="loc_order_notice">
                    </div>
                    <div class="col">
                        <p>(15)[b] Date(s) of notice(s)</p>
                        <p>(15)[c] Order/request indicated in the notice(s)</p>

                    </div>
                </div>

                <!-- <input id = "vw_loc_" type="text" class="input-underline w-100"> -->
                <!-- <hr class = "py-3"> -->


                <p class="mt-1">(16) IS THE PROJECT APPLIED FOR THE SUBJECT SIMILAR APPLICATION(S) WITH OTHER OFFICES OF THE
                    COMMISSION
                    AND/OR DEPUTIZED ZONING ADMINISTATOR?
                </p>

                <div class="row w-75" style="margin: 0;">
                    <p class="col"><span><input type="radio" name="written_notice_sa" id="written_notice_yes" value="yes"></span>Yes</p>
                    <p class="col"><span><input type="radio" name="written_notice_sa" id="written_notice_no" value="no"></span>No</p>

                </div>
                <p>If yes, please answer the following:</p>
                <div class="d-flex">
                    <p class="d-inline-flex">(a) Other HSRC Office(s) where similar application(s) was/were filled :</p>
                    <input id = "vw_loc_sa" type="text" class="d-inline-flex input-underline" style="width: 286px;">
                </div>
                <div class="d-flex">
                    <p class="d-inline-flex">(b) Date(s) filled :</p>
                    <input id = "vw_loc_sa_date" type="text" class="d-inline-flex input-underline" style="width:582px ;">
                </div>
                <div class="d-flex">
                    <p class="d-inline-flex">(c) Action(s) taken by office(s) mentioned in (a) :</p>
                    <input id = "vw_loc_sa_action" type="text" class="d-inline-flex input-underline" style="width:406px ;">
                </div>

                <!-- <input id = "vw_loc_" type="text" class="input-underline w-100"> -->

                <p>(17) PREPARED MODE OF LEASE OF DECISION:</p>

                <div class="d-flex row" style="position: relative; justify-content: space-around;padding-left: 55px;padding-right: 283px; ">
                    <p class="col"><span><input type="radio" name="pmld" id="pickup" value="pick-up"></span>Pick-up</p>
                    <p class="col"><span><input type="radio" name="pmld" id="mail" value="mail"></span>By mail, address to</p>
                </div>


                <div class="d-flex row" style="position: relative; justify-content: space-around;padding-left: 253px;width:723px;">
                    <p class="col-4"><span><input type="radio" name="pmld_mail" id = "mail_applicant"></span>Applicant</p>
                    <p class="col"><span><input type="radio" name="pmld_mail"id = "mail_rep" ></span>Authorized Representative</p>
                </div>

                <div class="row">
                    <div class="col">
                        <input id = "vw_loc_app_sign" type="text" class="input-underline w-100">
                        <p>(18) SIGNATURE OF APPLICANT</p>


                    </div>
                    <div class="col-1"></div>
                    <div class="col">
                        <input id = "vw_loc_rep_sign" type="text" class="input-underline w-100">
                        <p>SIGNATURE OF AUTHORIZED REPRESENTATIVE</p>

                    </div>
                </div>


                <p>
                    SUBSCRIBED AND SWORD to before me this <span><input id = "vw_loc_date" type="text" class="input-underline" style="width: 100px;"></span>
                    day of <span><input id = "vw_loc_month" type="text" class="input-underline" style="width: 179px;"></span>
                    ,20 <span><input id = "vw_loc_year" type="text" class="input-underline" style="width: 100px;"></span>
                    in the City/Municipality of <span><input id = "vw_loc_city" type="text" class="input-underline" style="width: 172px;" value = "Nasugbu"></span>
                    Province of <span><input id = "vw_loc_province" type="text" class="input-underline" style="width: 191px;" value = "Batangas"></span>
                    affiant exhibited to me his/her Residence Certificate No. <span><input id = "vw_loc_cert_no" type="text" class="input-underline"></span>
                    issued at <span><input id = "" type="text" class="input-underline" style="width: 135px;" value="Nasugbu Municipality"></span>
                    on <span><input id = "" type="text" class="input-underline" style="width: 90px;"></span> 2022.
                </p>


                <div class="row mt-3">
                    <div class="col"></div>
                    <div class="col text-center">
                        <p>NOTARY PUBLIC</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <div class="d-flex">
                            <p>Doc. No. :</p>
                            <input id = "vw_loc_" type="text" class="d-inline-flex input-underline w-75">
                        </div>
                        <div class="d-flex">
                            <p>Page No. :</p>
                            <input id = "vw_loc_" type="text" class="d-inline-flex input-underline w-75">
                        </div>
                        <div class="d-flex">
                            <p>Book No. :</p>
                            <input id = "vw_loc_" type="text" class="d-inline-flex input-underline w-75">
                        </div>



                    </div>
                    <div class="col"></div>
                </div>


            </div> <!-- end of locational_form body -->




</div> <!-- end of locational_form -->

<?php
    $vw_locational_form = select("vw_locational_form", "`project_id` = '$project_id'");

    if (mysqli_num_rows($vw_locational_form) > 0) {

        if ($row = mysqli_fetch_assoc($vw_locational_form)) {
            //   print_r($row);

   

        }
    }


?>




<script>

  

    $(document).ready(function() {

        // $("input").attr("readonly","readonly");

        $("#locational_form input").attr("disabled", "disabled");


        <?php
    $vw_locational_form = select("vw_locational_form", "`project_id` = '$project_id'");

    if (mysqli_num_rows($vw_locational_form) > 0) {

        if ($row = mysqli_fetch_assoc($vw_locational_form)) {
            //   print_r($row);

            //   text input
              echo '$("#vw_loc_annex").val("'.$row["annex_mem_no"].'");';
              echo '$("#vw_loc_app_no").val("'.$row["application_no"].'");';
              echo '$("#vw_loc_receipt_date").val("'.$row["receipt_date"].'");';
              echo '$("#vw_loc_or_no").val("'.$row["or_no"].'");';
              echo '$("#vw_loc_date_issued").val("'.$row["date_issued"].'");';

              $fullname = $row['lastname'].' '.$row['firstname'].' '.$row['middlename']; 

              echo '$("#vw_loc_app_name").val("'.$fullname.'");';
              echo '$("#vw_loc_corp_name").val("'.$row["corporation_name"].'");';
              echo '$("#vw_loc_corp_address").val("'.$row["corporation_address"].'");';
              echo '$("#vw_loc_proj_lot").val("'.$row["lot_area"].'");';
              echo '$("#vw_loc_blg_improvment").val("'.$row["building_improvement"].'");';
              echo '$("#vw_loc_czc_date").val("'.$row["czc_notice_date"].'");';
              echo '$("#vw_loc_czc_order_notice").val("'.$row["czc_notice_order"].'");';
              echo '$("#vw_loc_sa").val("'.$row["sa_other_office"].'");';
              echo '$("#vw_loc_sa_date").val("'.$row["sa_date_filled"].'");';
              echo '$("#vw_loc_sa_action").val("'.$row["sa_actions"].'");';
              echo '$("#vw_loc_auth_rep").val("'.$fullname.'");';
              echo '$("#vw_loc_proj_type").val("'.$row["existing_land_use"].'");';
              
              

              //radios

              //right over land
              echo '$(\'input[name="right_over_land"][value="' . $row['right_over_land'] . '"]\').prop(\'checked\', true);';

              //existing land use
              echo '$(\'input[name="elu"][value="' . $row['existing_land_use'] . '"]\').prop(\'checked\', true);';
              //project nature
              echo '$(\'input[name="proj_nature"][value="' . $row['project_nature'] . '"]\').prop(\'checked\', true);';
              //project tenure
              echo '$(\'input[name="proj_tenure"][value="' . $row['project_tenure'] . '"]\').prop(\'checked\', true);';
              //lease of decision
              echo '$(\'input[name="pmld"][value="' . $row['lease_of_decision'] . '"]\').prop(\'checked\', true);';
            //   echo '$(\'input[name="pmld_mail"][value="' . $row['lease_of_decision'] . '"]\').prop(\'checked\', true);';

              echo '$(\'input[name="written_notice"][value="' . $row['czc_notice_require'] . '"]\').prop(\'checked\', true);';
              echo '$(\'input[name="written_notice_sa"][value="' . $row['similar_application'] . '"]\').prop(\'checked\', true);';

        }
    }



// address applicant
$applicant_address = full_query("SELECT applicant.id, applicant.username, vw_address_full.id,vw_address_full.full_address
FROM applicant
JOIN vw_address_full
ON applicant.address = vw_address_full.id
WHERE applicant.id = '".$project_applicant."'");

if ($row = mysqli_fetch_assoc($applicant_address)) {
    // print_r($row);
    echo '$("#vw_loc_app_address").val("'.$row["full_address"].'");';
    echo '$("#vw_loc_auth_representative").val("'.$row["full_address"].'");';



}

// address project
$project_address = full_query("SELECT project.id, project.title, vw_address_full.id,vw_address_full.full_address
FROM project
JOIN vw_address_full
ON project.address = vw_address_full.id
WHERE project.id = '$project_id'");

if ($row = mysqli_fetch_assoc($project_address)) {
    // print_r($row);

    echo '$("#vw_loc_proj_loc").val("'.$row["full_address"].'");';

}





?>



    });
</script>