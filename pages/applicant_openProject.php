<?php
require '../php/db_func.php';
session_start(); //start session
// print_r($_SESSION);
$link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$project_id = substr($link, strpos($link, "project_id=") + 11);
// echo $project_id;
// echo "<br>";

$ids = select("vw_ids", "project_id = '$project_id'");
if (mysqli_num_rows($ids) > 0) {

    if ($row = mysqli_fetch_assoc($ids)) {
        $user_id = $row['user_id'];
        $applicant_address = $row['applicant_address'];
        $project_id = $row['project_id'];
        $proj_address = $row['proj_address'];
        $land_property = $row['land_property'];
        $plans_details = $row['plans_details'];
        $plan_form = $row['plan_form'];
        $plan_document = $row['plan_document'];
        $sanitary = $row['sanitary'];
        $electrical = $row['electrical'];
        $locational = $row['locational'];
        $unified = $row['unified'];
    }
}

$project = select("vw_project_basics", "id = '$project_id'");
if ($project = mysqli_fetch_assoc($project)) {

    $project_title = $project['title'];
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $project_title?></title>
    <link rel="stylesheet" href="../js-css/general.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.css">
    <script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
    <script src="../js-css/jquery-3.6.4.js"></script>
    <script src="../js-css/validate_data_input.js"></script>
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

        <?php require "../components/web_navbar.php" ?>

        <div id="flex_main" class="row m-0">
            <div id="main_left" class="col-lg-3" style="background-color:beige;padding:30px;position:relative; min-height:420px">

                <h4>Building Permit Application</h4>
                <div id="steps_tab">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="step_tab_nav" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="step_one_tab" data-bs-toggle="pill" data-bs-target="#step_one" type="button" role="tab" aria-controls="step_one" aria-selected="true">Step 1 : Common Information</button>
                            <button class="nav-link" id="step_two_tab" data-bs-toggle="pill" data-bs-target="#step_two" type="button" role="tab" aria-controls="step_two" aria-selected="false">Step 2 : Filling up Forms</button>
                            <button class="nav-link" id="step_three_tab" data-bs-toggle="pill" data-bs-target="#step_three" type="button" role="tab" aria-controls="step_three" aria-selected="false">Step 3 : Uploading Documents</button>
                            <button class="nav-link" id="step_four_tab" data-bs-toggle="pill" data-bs-target="#step_four" type="button" role="tab" aria-controls="step_four" aria-selected="false">Step 4 : Review your application</button>
                            <button class="nav-link" id="step_five_tab" data-bs-toggle="pill" data-bs-target="#step_five" type="button" role="tab" aria-controls="step_five" aria-selected="false" >Step 5 : Assessment</button>
                            <button class="nav-link" id="step_six_tab" data-bs-toggle="pill" data-bs-target="#step_six" type="button" role="tab" aria-controls="step_six" aria-selected="false" >Step 6 : Set Schedule for signing</button>
                            <button class="nav-link" id="step_seven_tab" data-bs-toggle="pill" data-bs-target="#step_seven" type="button" role="tab" aria-controls="step_seven" aria-selected="false" >Step 7 : Issuing Building Permit</button>
                        </div>
                    </div>
                </div>
                <p style="position:absolute;bottom:0px">Progress 0%</p>

            </div>

            <div class="col" id="main_right" style="max-height: 90vh; overflow: auto;">
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
                        <?php require "../components/project_step_five.php"?>

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
        <?php require "../components/web_footer.php" ?>
    </div>



    <button id="off_panel_steps_btn" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#off_panel_steps" aria-controls="off_panel_steps" style="font-size: xxx-large;width: 60px;height: 38px;padding: 0;position: absolute;
     top: 50%;left: -27px;text-align: end; background-image:url()">

        >

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




    <?php require "../components/applicant_menu.php" ?>



    <script src="../js-css/db_operations_ajax.js"></script>

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




        document.addEventListener("DOMContentLoaded", () => {


            // add center project name
            $("#nav_center").append('<div class="text-center" id ="project_title"><input class="text-center" style ="background-color:transparent;border:none;color:white" type="text" name="" id="inp_project_name" onchange = "update_title()" value="<?php echo $project_title; ?>"></div>')
            $("#nav_center").addClass("m-auto");

            //add title/tooltip to required fields
            // $(".required").attr("title", "This field is required")

        
        });


        width_cap();

            function width_cap() {

                const mql = window.matchMedia('screen and (max-width: 529px)');

                checkMedia(mql);
                mql.addListener(checkMedia);

                function checkMedia(mql) {

                    if (mql.matches) {

                        console.log('cap');
                        $("#main_right").css("max-height", "");
                    }
                }
            }

            mobile();

            function mobile() { //min support large mobile w-425px

                const mql = window.matchMedia('screen and (min-width: 530px) and (max-width: 575px)');

                checkMedia(mql);
                mql.addListener(checkMedia);

                function checkMedia(mql) {

                    if (mql.matches) {

                        console.log('Mobile');
                    }
                }
            }

            tablet();

            function tablet() {

                const mql = window.matchMedia('screen and (min-width: 576px) and (max-width: 991px)');

                checkMedia(mql);
                mql.addListener(checkMedia);

                function checkMedia(mql) {

                    if (mql.matches) {

                        console.log('tablet');




                        // resize form
                        // $("#form").css("transform", "scale(78%)")
                        // $("#form").css("-webkit-transform-origin-x", "left")
                        // $("#form").css("-webkit-transform-origin-y", "top")
                        // $("#locational_clearance").css("height", "calc(39*0.8cm);")




                    }
                }
            }


            desktop();

            function desktop() {

                const mql = window.matchMedia('screen and (min-width: 992px)');

                checkMedia(mql);
                mql.addListener(checkMedia);

                function checkMedia(mql) {

                    if (mql.matches) {

                        console.log('desktop');
                        $("#off_panel_steps_btn").css("display", "none") //hide btn
                        $("#main_left").prependTo("#flex_main") // move to normal
                        $("main_left").addClass("col-lg-3")
                        $(".document-upload > .row").addClass("col")
                        $(".document-upload > .row").removeClass("row")

                    } else {


                        $("#off_panel_steps_btn").css("display", "block") //show off-panel bttn
                        $("#main_left").appendTo("#off_panel_steps .offcanvas-body") //move steps to off panel
                        $("main_left").removeClass("col-lg-3")
                        $(".document-upload > .col").addClass("row")
                        $(".document-upload > .col").removeClass("col")
                    }
                }
            }

        window.addEventListener('resize', function() {
            // viewport and full window dimensions will change
            var viewport_width = window.innerWidth;
            var viewport_height = window.innerHeight;
            // console.log(viewport_width)
        });
    </script>

</body>

</html>