<style>
        #locational_form {
            border: 1px solid black;
            padding: 4.5rem;
            width: 22cm;
            height: 39cm;
            font-style: Arial, Helvetica, sans-serif;

        }

        

        div#locational_form_header>p {
            margin-bottom: -7px;

        }

        #locational_form_body{
            font-size: 12px;
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


    </style>


        <div id="locational_form" class ="m-auto">
            <div id="locational_form_header" style='font-family: "Times New Roman", Times, serif; text-align: center;'>
                <p>REPUBLIC OF THE PHILIPPINES</p>
                <p style="font-weight: bold;font-size: larger;">MUNICIPALITY OF NASUGBU </p>
                <p style="font-weight: bold;font-size: larger;">PROVINCE OF BATANGAS</p>
                <p class="my-4">DEPARTMENT OF MUNICIPAL PLANNING AND <br> DEVELOPMENT COORDINATOR/ZONING ADMINISTRATOR
                </p>
                <p class="mb-4" style='font-weight: bold;font-size:1.5rem; font-family: "Bernard MT Condensed";'>
                    APPLICATION FOR LOCATIONAL CLEARANCE</p>
            </div>
            <div id="locational_form_body" class="row gx-5">

                <div class="col-6 right-portion" >
                    <div id="application_basic">
                        <p>ANNEX A of HSRC Memorandum Circular No.<span><input type="text" class="input-underline"
                                    style="width: 50px; float: right;"></span></p>
                        <p>Application No. : <span><input type="text" class="input-underline"></span></p>
                        <p>Date of Receipt : <span><input type="text" class="input-underline"></span></p>
                        <p>PMO No./O.R No. : <span><input type="text" class="input-underline"></span></p>
                        <p>ADate Issued : <span><input type="text" class="input-underline"></span></p>
                        <p>Amount Paid : <span><input type="text" class="input-underline"></span></p>
                    </div>

                    <input type="text" name="" id="" class="input-underline w-100">
                    <p>(1) NAME OF APPLICANT(Last, First, Middle)</p>

                    <input type="text" name="" id="" class="input-underline w-100">
                    <p>(2) ADDRESS OF APPLICANT</p>

                    <input type="text" name="" id="" class="input-underline w-100">
                    <p>(5) NAME OF AUTHORIZED REPRESENTATIVE</p>


                    <input type="text" name="" id="" class="input-underline w-100">
                    <p>(7) PROJECT TYPE <br>(Residential,Commercial,Institutional,Industrial Others Specify)</p>

                    <input type="text" name="" id="" class="input-underline w-100">
                    <p>(9) PROJECT LOCATION <br> (Number, Street, Barangay City/Mun.Provinces)</p>
                    <input type="text" name="" id="" class="input-underline w-100">
                    <input type="text" name="" id="" class="input-underline w-100">

                    <p>(11) RIGHT OVER LAND</p>
                    <div class="row p-0 m-0" id="rol_radios">

                        <div class="col">
                            <p><span><input type="radio" name="right_over_land" id=""></span>Owner</p>
                            <p><span><input type="radio" name="right_over_land" id=""></span>Lease</p>

                        </div>
                        <div class="col">
                            <p><span><input type="radio" name="right_over_land" id="rol_others"></span> Other Specify
                            </p>

                        </div>
                    </div>

                    <p>(13) EXISTING LAND USE OF PROJECT SITE</p>
                    <div class="row p-0 m-0" id="elu_radios">

                        <div class="col">
                            <p><span><input type="radio" name="elu" id=""></span> Residential</p>
                            <p><span><input type="radio" name="elu" id=""></span> Institutional</p>
                            <p><span><input type="radio" name="elu" id=""></span> Commercial</p>

                        </div>
                        <div class="col">
                            <p><span><input type="radio" name="elu" id=""></span> Industrial</p>
                            <p><span><input type="radio" name="elu" id="elu_others"></span> Other Specify</p>

                        </div>
                    </div>


                </div> <!-- end of left portion -->

                <!-- <div class="" style="width: 10px;"></div> -->


                <div class="col-6 left-portion">
                    <br> <br><br><br><br>

                    <p>Municipality of Nasugbu, Batangas</p>
                    <input type="text" name="" id="" class="input-underline w-100">
                    <p class="text-center">(Office and Address)</p>
                    <input type="text" name="" id="" class="input-underline w-100">
                    <p>NAME OF CORPORATION</p>
                    <input type="text" name="" id="" class="input-underline w-100">
                    <p>(4) ADDRESS OF CORPORATION</p>
                    <input type="text" name="" id="" class="input-underline w-100">
                    <p>(6) ADDRESS OF CORPORATION</p>
                    <br>
                    <p>(8) PROJECT NATURE</p>
                    <div class="row p-0 m-0" id="proj_nature_radios">

                        <div class="col">
                            <p><span><input type="radio" name="proj_nature" id=""></span>New Development</p>
                            <p><span><input type="radio" name="proj_nature" id=""></span>Improvement</p>

                        </div>
                        <div class="col">
                            <p><span><input type="radio" name="proj_nature" id="proj_nature_others"></span> Other
                                Specify</p>

                        </div>
                    </div>

                    <input type="text" name="" id="" class="input-underline w-100">
                    <p>(10) PROJECT AREA (in square meters)</p>
                    <div class="d-flex">
                        <p class="d-inline-flex">Lot</p>
                        <input type="text" class="d-inline-flex input-underline w-100">
                    </div>
                    <div class="d-flex">
                        <p class="d-inline-flex">Building(s) Improvement:</p>
                        <input type="text" class="d-inline-flex input-underline w-auto">
                    </div>
                    <p>(12) PROJECT TENURE</p>
                    <div id="proj_tenure_radios">
                        <p><span><input type="radio" name="proj_tenure" id=""></span>New Development</p>
                        <div class="d-flex">
                            <p class="d-inline-flex"><span><input type="radio" name="proj_tenure" id=""></span>Temporary
                                (specify years)</p>
                            <input type="text" class="d-inline-flex input-underline">
                        </div>
                        <p><span><input type="radio" name="proj_tenure" id=""></span>Vacant/Idle</p>
                        <div class="d-flex">
                            <p class="d-inline-flex"><span><input type="radio" name="proj_tenure"
                                        id=""></span>Agricultural (specify crop)</p>
                            <input type="text" class="d-inline-flex input-underline">
                        </div>
                        <div class="row">
                            <p class="col"><span><input type="radio" name="proj_tenure" id=""></span>Tenanted</p>
                            <p class="col"><span><input type="radio" name="proj_tenure" id=""></span>Not Tenanted</p>

                        </div>
                    </div>
                </div> <!--end of right-portion  -->


                <p>(14) PROJECT COST/CAPITALIZATION(in pesos, write in words and figures)</p>
                <input type="text" class="input-underline">
                <p>(15) IF THE PROJECT APPLIED FOR THE SUBJECT OF WRITTEN NOTICE(S) FROM THIS COMMISION AND ITS
                    DEPUTIZED ZONING
                    ADMINISTRATORS TO THE EFFECT REQUIRING FOR PRESENTATION OF LOCATIONAL CLEARANCE/CERTIFICATE OF
                    ZONING COMPLIANCE/CZC.
                </p>
                <div class="row w-75">
                    <p class="col"><span><input type="radio" name="written_notice" id=""></span>Yes</p>
                    <p class="col"><span><input type="radio" name="written_notice" id=""></span>No</p>

                </div>
                <p><span><input type="radio" name="written_notice" id=""></span> Other HSRC Officer of Zoning
                    Adminsitrator who issued the notice(s)</p>
                <div class="row">
                    <div class="col-7">
                        <input type="text" class="input-underline w-100">
                        <input type="text" class="input-underline w-100">
                    </div>
                    <div class="col">
                        <p>(15)[b] Date(s) of notice(s)</p>
                        <p>(15)[c] Order/request indicated in the notice(s)</p>

                    </div>
                </div>

                <input type="text" class="input-underline w-100">


                <p class="">(16) IS THE PROJECT APPLIED FOR THE SUBJECT SIMILAR APPLICATION(S) WITH OTHER OFFICES OF THE
                    COMMISSION
                    AND/OR DEPUTIZED ZONING ADMINISTATOR?
                </p>

                <div class="d-flex" style="position: relative; justify-content: space-around; margin-top: -20px;padding-left:304px; padding-right: 300px;">
                    <p class ="d-inline-flex"><span><input type="radio" name="" id=""></span>Yes</p>
                    <p class ="d-inline-flex"><span><input type="radio" name="" id=""></span>No</p>
                    
                </div>
                <p>If yes, please answer the following:</p>
                <div class="d-flex">
                    <p class="d-inline-flex">(a) Other HSRC Office(s) where similar application(s) was/were filled :</p>
                    <input type="text" class="d-inline-flex input-underline" style = "width: 286px;">
                </div>
                <div class="d-flex">
                    <p class="d-inline-flex">(b) Date(s) filled :</p>
                    <input type="text" class="d-inline-flex input-underline" style = "width:582px ;">
                </div>
                <div class="d-flex">
                    <p class="d-inline-flex">(c) Action(s) taken by office(s) mentioned in (a) :</p>
                    <input type="text" class="d-inline-flex input-underline" style = "width:406px ;">
                </div>

                <input type="text" class="input-underline w-100">

                <p>(17) PREPARED MODE OF LEASE OF DECISION:</p>

                <div class="d-flex row" style="position: relative; justify-content: space-around;padding-left: 55px;padding-right: 283px; ">
                    <p class ="col"><span><input type="radio" name="" id=""></span>Pick-up</p>
                    <p class ="col"><span><input type="radio" name="" id=""></span>By mail, address to</p>
                </div>

                
                <div class="d-flex row" style="position: relative; justify-content: space-around;padding-left: 253px;width:723px;">
                    <p class ="col-4"><span><input type="radio" name="" id=""></span>Applicant</p>
                    <p class ="col"><span><input type="radio" name="" id=""></span>Autorized Representative</p>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="text" class="input-underline w-100">
                        <p>(18) SIGNATURE OF APPLICANT</p>


                    </div>
                    <div class="col-1"></div>
                    <div class="col">
                        <input type="text" class="input-underline w-100">
                        <p>SIGNATURE OF AUTHORIZED REPRESENTATIVE</p>

                    </div>
                </div>


                <p>
                    SUBSCRIBED AND SWORD to before me this <span><input type="text" class ="input-underline" style ="width: 100px;"></span>
                    day of <span><input type="text" class ="input-underline" style ="width: 179px;"></span>
                    ,20 <span><input type="text" class ="input-underline" style ="width: 100px;"></span>
                    in the City/Municipality of <span><input type="text" class ="input-underline" style ="width: 172px;"></span>
                     Province of <span><input type="text" class ="input-underline" style ="width: 191px;"></span>
                    affiant exhibited to me his/her Residence Certificate No. <span><input type="text" class ="input-underline"></span>
                    issued at <span><input type="text" class ="input-underline" style ="width: 127px;"></span>
                     on <span><input type="text" class ="input-underline" style ="width: 100px;"></span> 2022.
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
                            <input type="text" class ="d-inline-flex input-underline w-75">
                        </div>
                        <div class="d-flex">
                            <p>Page No. :</p>
                            <input type="text" class ="d-inline-flex input-underline w-75">
                        </div>
                        <div class="d-flex">
                            <p>Book No. :</p>
                            <input type="text" class ="d-inline-flex input-underline w-75">
                        </div>



                    </div>
                    <div class="col"></div>
                </div>


            </div> <!-- end of locational_form body -->




        </div> <!-- end of locational_form -->


    <script>

        rol_others.addEventListener("change", function () {
            console.log("others");

            if (this.checked == true) {
                console.log("true")
            } else {
                console.log("false")
            }
        });


    </script>