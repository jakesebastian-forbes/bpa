<?php
require '../php/db_func.php';
session_start(); //start session

$privilege = "applicant";
require '../php/page_restriction.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    $page_title = "";

    require "page_header.php" ?>
 <script src="https://unpkg.com/pdfjs-dist@2.10.377/build/pdf.min.js"></script>


</head>

<style>
    #step_tab_nav button {
        text-align: start;
        color: black
    }

    #step_tab_nav button.active {
        color: white;
        background-color: var(--my_blue);
    }

    #step_tab_nav_Content>div.tab-pane {
        padding: 1.5rem;
    }

    /* button .nav-link.active{
        background-color: red !important;
    } */


    @media screen and (max-width: 320px) {
        body {
            background-color: #ffabab;
        }

        #form {
            transform: scale(1) !important;
            transform: translate(auto, auto) !important;
        }
    }

    

</style>


<body>


    <div id="flex_container">

        <?php


        $link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        // print_r($_SESSION);
        $project_id = getSubstringBetween($link, "project_id=", "&");

        
        // $project_id = substr($link, strpos($link, "project_id=") + 11);
        // echo $project_id;
        // echo "<br>";

        $vw_project_ids = select("vw_project_ids", "project_id = '$project_id' AND project_applicant = '" . $_SESSION['user_id'] . "'");

        if (mysqli_num_rows($vw_project_ids) > 0) {

            if ($row = mysqli_fetch_assoc($vw_project_ids)) {
                $project_applicant = $row['project_applicant'];
                $project_title = $row['project_title'];
                $project_status = $row['project_status'];
                $project_address = $row['project_address'];
                $project_supervisor = $row['project_supervisor'];
                $project_documents = $row['documents'];
                $project_forms = $row['project_forms'];
                $project_unified = $row['unified'];
                $project_locational = $row['locational'];
                $project_sanitary = $row['sanitary'];
                $project_electrical = $row['electrical'];
            }
        } else {
            echo '
    <script>
    document.addEventListener("DOMContentLoaded", async () => {
        notifyError("An error occurred", "Resolving issue..");
        await sleep_time(5000);
        window.location.href = "applicant_home.php?message=error_invalid_project_access";
    });
    </script>
    ';

            // sleep(5000);
            // header('Location: applicant_home.php?message=error_invalid_project_access');
        }

        ?>

        <?php require "../components/web_navbar.php" ?>

        <div id="flex_main" class="row m-0">
            <div id="main_left" class="col-lg-3" style="background-color:beige;padding:30px;position:relative; min-height:420px">

                <h4 class="fw-bold text-uppercase" style="font-size: 25px;">Building Permit Application</h4>
                <div id="steps_tab">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="step_tab_nav" role="tablist" aria-orientation="vertical">
                            <h5 id="part_1" class="fw-bold">Step 1 : Fill up </h5>
                            <button class="nav-link active" id="step_one_tab" data-bs-toggle="pill" data-bs-target="#step_one" type="button" role="tab" aria-controls="step_one" aria-selected="true">Common Information</button>
                            <button class="nav-link" id="step_two_tab" data-bs-toggle="pill" data-bs-target="#step_two" type="button" role="tab" aria-controls="step_two" aria-selected="false">Fill up Forms</button>
                            <button class="nav-link" id="step_three_tab" data-bs-toggle="pill" data-bs-target="#step_three" type="button" role="tab" aria-controls="step_three" aria-selected="false">Upload Documents</button>
                            <button class="nav-link" id="step_four_tab" data-bs-toggle="pill" data-bs-target="#step_four" type="button" role="tab" aria-controls="step_four" aria-selected="false">Review your application</button>
                            <h5 class="locked fw-bold" id="part_2">Step 2 : Assessment</h5>
                            <button class="nav-link " id="step_five_tab" data-bs-toggle="pill" data-bs-target="#step_five" type="button" role="tab" aria-controls="step_five" aria-selected="false" disabled>Assessment</button>
                            <h5 class="locked fw-bold" id="part_3">Step 3 : Request for Schedule</h5>
                            <button class="nav-link" id="step_six_tab" data-bs-toggle="pill" data-bs-target="#step_six" type="button" role="tab" aria-controls="step_six" aria-selected="false" disabled>Apply for schedule of signing</button>
                            <h5 class="locked fw-bold" id="part_4">Step 4 : Claim your Building Permit</h5>
                            <button class="nav-link" id="step_seven_tab" data-bs-toggle="pill" data-bs-target="#step_seven" type="button" role="tab" aria-controls="step_seven" aria-selected="false" disabled>Claim Building Permit</button>
                        </div>
                    </div>
                </div>
                <p style="position:absolute;bottom:0px"></p>

            </div>

            <div class="col" id="main_right" style="max-height: 500px; min-height:100vh;overflow: auto;">
                <div class="tab-content" id="step_tab_nav_Content">
                    <div class="tab-pane fade show active" id="step_one" role="tabpanel" aria-labelledby="step_one_tab" tabindex="0">
                        <?php require "../components/project_step_one.php" ?>
                    </div>

                    <div class="tab-pane fade" id="step_two" role="tabpanel" aria-labelledby="step_two_tab" tabindex="0">
                        <?php require "../components/project_step_two.php" ?>

                    </div>
                    <div class="tab-pane fade" id="step_three" role="tabpanel" aria-labelledby="step_three_tab" tabindex="0">
                        <?php require "../components/project_step_three.php" ?>

                    </div>
                    <div class="tab-pane fade" id="step_four" role="tabpanel" aria-labelledby="step_four_tab" tabindex="0">
                        <?php require "../components/project_step_four.php" ?>

                    </div>
                    <div class="tab-pane fade" id="step_five" role="tabpanel" aria-labelledby="step_five_tab" tabindex="0">
                        <?php require "../components/project_step_five.php" ?>

                    </div>
                    <div class="tab-pane fade" id="step_six" role="tabpanel" aria-labelledby="step_six_tab" tabindex="0">
                        <?php require "../components/project_step_six.php" ?>

                    </div>
                    <div class="tab-pane fade" id="step_seven" role="tabpanel" aria-labelledby="step_seven_tab" tabindex="0">
                        <?php require "../components/project_step_seven.php" ?>

                    </div>

                </div>
            </div>
        </div>
        <?php //require "../components/web_footer.php"; 
        ?>
    </div>



    <!-- mobile view left panel-->

    <button id="off_panel_steps_btn" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#off_panel_steps" aria-controls="off_panel_steps" style="width: 78px;height: 73px;position: absolute;top: 50%;left: -39px;
    background-image:url(../img/icon/side-menu.png);    background-repeat: no-repeat; background-size: contain;">



    </button>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="off_panel_steps" aria-labelledby="off_panel_stepsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel">Building Permit Application</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>

            </div>
        </div>
    </div>

    <!-- mobile view left panel END-->




    <?php require "../components/applicant_menu.php" ?> <!-- add applicant_menu -->




    <script>
        function update_title() {

            // get project title and page
            var project_title = $("#inp_project_name")[0];
            var page_title = $("title")[0];

            // if left empty, set to UNtitled
            if (project_title.value == "" || project_title.value == null) {
                // project_title = "Untitled";
                project_title.value = "Untitled";
                page_title.text = "Untitled";
            } else {
                //reflect page title
                page_title.text = project_title.value;

            }

            //update value in db
            $.ajax({
                url: "../php/db_func.php",
                type: "POST",
                cache: false,
                async: true,
                data: {
                    "action": "update",
                    "table": "project",
                    "to_update": "`title` = '" + project_title.value + "'",
                    "condition": "`id` = '<?php echo "$project_id" ?>'"

                },
                success: function(dataResult) {
                    // console.log(dataResult);

                }
            });

        }


        function width_cap() {

            const mql = window.matchMedia('screen and (max-width: 530px)');

            checkMedia(mql);
            mql.addListener(checkMedia);

            function checkMedia(mql) {

                if (mql.matches) {

                    // console.log('cap');
                    $("#main_right").css("max-height", "");
                }
            }
        }

        // mobile();

        function mobile() { //min support large mobile w-425px

            const mql = window.matchMedia('screen and (min-width: 530px) and (max-width: 575px)');

            checkMedia(mql);
            mql.addListener(checkMedia);

            function checkMedia(mql) {

                if (mql.matches) {

                    // console.log('Mobile');
                    $("#navbar_title").remove()

                }

            }
        }

        // tablet();

        function tablet() {

            const mql = window.matchMedia('screen and (min-width: 576px) and (max-width: 991px)');

            checkMedia(mql);
            mql.addListener(checkMedia);

            function checkMedia(mql) {

                if (mql.matches) {

                    // console.log('tablet');
                    // add center project name

                    if ($("#navbar_title").length !== 1) {
                        $("#nav_left").append('<h1 id = "navbar_title"class="my-auto" style="margin-left:2%;">BuildNAS</h1>');

                    }


                    // resize form
                    // $("#form").css("transform", "scale(78%)")
                    // $("#form").css("-webkit-transform-origin-x", "left")
                    // $("#form").css("-webkit-transform-origin-y", "top")
                    // $("#locational_clearance").css("height", "calc(39*0.8cm);")




                }
            }
        }



        function desktop() {

            const mql = window.matchMedia('screen and (min-width: 1280px)');

            checkMedia(mql);
            mql.addListener(checkMedia);

            function checkMedia(mql) {

                if (mql.matches) {

                    // console.log('desktop');
                    $("#off_panel_steps_btn").css("display", "none") //hide btn
                    $("#main_left").prependTo("#flex_main") // move to normal
                    $("main_left").addClass("col-lg-3")
                    $(".document-upload > .row").addClass("col")
                    $(".document-upload > .row").removeClass("row")

                } else {


                    $("#off_panel_steps_btn").css("display", "block") //show off-panel bttn
                    $("#main_left").appendTo("#off_panel_steps .offcanvas-body") //move steps to off panel
                    $("#main_left").removeClass("col-lg-3")
                    $(".document-upload > .col").addClass("row")
                    $(".document-upload > .col").removeClass("col")
                }
            }
        }




        document.addEventListener("DOMContentLoaded", () => {

            // console.log("doc loaded");

            document.title = "<?php echo $project_title ?>"
            // add center project name
            $("#nav_center").append('<div class="text-center" id ="project_title"><input class="text-center" ' +
                'style ="background-color:transparent;border:none;color:white" type="text" name="" id="inp_project_name" ' +
                'onchange = "update_title()" value="<?php echo $project_title; ?>"><br><small><?php echo ucwords($project_status) ?></small></div>')
            $("#nav_center").addClass("m-auto");

            //add title/tooltip to required fields
            $('.required').attr('title', 'This field is required');



            //check project status
            var project_status = '<?php echo $project_status ?>';
            // console.log(project_status);
            if (project_status.toLowerCase() != "open") {
                // disable progress bar
                $("#progress_bar_cont").hide()

                //disable title input
                $("#inp_project_name").attr("disabled", "disabled")
                //disable step 1 input
                $("#step_one_common_info input").attr("disabled", "disabled")
                //disable step 2 input
                $("#step_two_wrapper input,select").attr("disabled", "disabled")
                $("#step_two_wrapper > button").attr("disabled", "disabled")
                //disable step 3 input
                $("#step_three_documents button:not(.nav-link)").attr("disabled", "disabled")
                $("#step_three_documents input").attr("disabled", "disabled")

                //disable step 4 input
                $("#step_four_forms input:not(.nav-link)").attr("disabled", "disabled")
                $(".print-set").removeAttr("disabled", "");
                $("#submit_for_review_btn").css("display", "none")
                //remove step 5 disabled
                $("#step_five_tab").removeAttr("disabled", "")
                $("#step_five_tab").removeClass("locked", "")

                $("#step_five_tab").click()
            }

            if (project_status.toLowerCase() == "open") {
                $('.locked').attr('title', 'This part is locked. Complete the previous step to unlock.');
            }

            if (project_status.toLowerCase() == "returned") {
                $('#part_2').removeClass('locked', '');
                $('#project_trail').hide();
                $('#project_returned_cont').show();



            }

            if (project_status.toLowerCase() == "pending") {
                $('#part_2').removeClass('locked', '');
                $('#part_1').addClass('checked');

                // $('#part_2').addClass('checked');


            }
            if (project_status.toLowerCase() == "approved") {
                
                $('#part_2').removeClass('locked', '');
                $('#part_1').addClass('checked');

                $('#part_2').addClass('checked');

                $('#part_3').removeClass('locked', '');
                $("#step_six_tab").removeAttr("disabled", "")
                $("#step_six_tab").removeClass("locked", "")
                $("#step_six_tab").click()

            }
            if (project_status.toLowerCase() == "denied") {
                //lock everything

            }
            if (project_status.toLowerCase() == "for appointment") {
                $("#step_six_tab").click()
                console.log("step_six")

            }
            if (project_status.toLowerCase() == "for signing") {

            }
            if (project_status.toLowerCase() == "signed") {

            }
            if (project_status.toLowerCase() == "completed") {
                $('#part_2').removeClass('locked', '');
                $('#part_3').removeClass('locked', '');
                $("#step_six_tab").removeAttr("disabled", "")
                $('#part_4').removeClass('locked', '');
                $("#step_seven_tab").removeAttr("disabled", "")

                $('#part_1').addClass('checked');
                $('#part_2').addClass('checked');
                $('#part_3').addClass('checked');
                $('#part_4').addClass('checked');


                $("#step_seven_tab").click()

            }
            if (project_status.toLowerCase() == "deleted") {

            }


            // console.log(project_status.toLowerCase())






            desktop();

            window.addEventListener('resize', function() {
                // viewport and full window dimensions will change
                var viewport_width = window.innerWidth;
                var viewport_height = window.innerHeight;
                // console.log(viewport_width)
            });



            // *LOAD SAVED POSITION 

            try {

                let previous_left = sessionStorage.getItem("previous_left");
                let previous_right = sessionStorage.getItem("previous_right");
                let previous_screen = sessionStorage.getItem("previous_offset");

                $("#" + previous_left).click();
                $("#" + previous_right).click();
                $("#main_right").scrollTop(previous_screen);

                sessionStorage.clear();
                // console.log("session cleared")
                // console.log(sessionStorage)

            } catch (error) {
                console.log(error)

            }



            <?php
                // try {
                //     //code...
                // $submit_status = getSubstringBetween($link, "project_submit=", "&");
                // // echo "$submit_status";
                // if(strtolower($submit_status) == 'success'){
                //     echo "notifySuccess('Success', 'Project Submitted Successfully');";
                //     echo "notifyInfo('Project Status Updated', 'Project Status Updated to ".$project_status."');";
                //     $new_link = getSubstringBetween($link, "http", "&message");

                //     echo "history.pushState(null, null, '".$new_link."');";

                // }
        
                // } catch (\Throwable $th) {
                //     throw $th;
                // }
            
            ?>



        }); // *doc load END


        // *LISTEN FOR RELOAD TO RESTORE LAST POSITION IN DOM
        $(window).on('beforeunload', function() {

            try {

                // check which tab on left is active
                let left_active = $("#steps_tab .nav-link.active")[0].id;
                // check which tab on right is active
                let right_active = $("#step_tab_nav_Content .tab-pane.fade.active.show .nav-link.active")[0];
                //check right portion top offset
                let screen_offset = $("#main_right").scrollTop();

                //save to session storage
                sessionStorage.setItem("previous_left", left_active);
                if (right_active != undefined || right_active == "") {
                    sessionStorage.setItem("previous_right", right_active.id);

                }
                sessionStorage.setItem("previous_offset", screen_offset);


                // console.log(sessionStorage);

            } catch (error) {
                console.log(error)

            }



            return 'Are you sure you want to leave?';

        });




        window.oncontextmenu = function() {
            //  console.log("right click yarn?")
            // showCustomMenu();
            // return false;     // cancel default menu
        }


    </script>

</body>

</html>