<?php
require '../php/db_func.php';

session_start(); //start session

$link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// print_r($_SESSION);




?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    $page_title = "";

    require "page_header.php" ?>
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



<?php


$project_id = getSubstringBetween($link, "project_id=", "&");
// echo $project_id;
// echo "<br>";

$vw_project_ids = select("vw_project_ids", "project_id = '$project_id'");

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
}
?>

<body>


    <div id="flex_container">

        <?php require "../components/web_navbar.php" ?>

        <div id="flex_main " class="row m-0">

        <div class="row text-center">

            <?php
            $returned_once = full_query("SELECT `id`,`project_id`,`action`,`comment`,`timestamp` FROM `project_logs`
             WHERE `action` LIKE '%returned%' AND `project_id` = '" . $project_id . "'");
            if (mysqli_num_rows($returned_once) > 0) {
                if ($row = mysqli_fetch_assoc($returned_once)) {



                    $dept = preg_match('/Returned by (.+)/', $row['action'], $matches) ? $matches[1] : '';

                    echo "<p>This project has been returned to the applicant by " . $dept . " department for reason :
                    <i>&quot" . $row['comment'] . "&quot</i>. Please consider this when reviewing the application.</p>
                    ";
                }
            }
            ?>

</div>

            <!-- 
            //project action
            //approve, deny, return

            //approve
            //insert project_logs approved by {dept}
            //send to next dept


            //deny
            //insert project_logs denied by {dept}
            //return -->




            <div class="row p-4">
                <div id="main_left" class="col-3" style="background-color:beige;padding:30px;position:relative; min-height:420px">

                    <div class=" project_summary">
                        <?php
                        $vw_project_approval = full_query("SELECT 
                                        applicant.id AS applicant_id, 
                                        applicant.lastname, applicant.firstname, applicant.middlename, 
                                        applicant.contact_no,
                                        applicant.email,
                                        project.id AS project_id,
                                        project.title,
                                        f_locational.existing_land_use,
                                        vw_address_full.full_address
                                    FROM vw_project_ids
                                    JOIN applicant ON vw_project_ids.project_applicant = applicant.id
                                    JOIN project ON project.id = vw_project_ids.project_id
                                    JOIN f_locational ON f_locational.id = vw_project_ids.locational
                                    JOIN vw_address_full ON vw_address_full.id = vw_project_ids.project_address 
                                    WHERE vw_project_ids.project_id = '$project_id'
                                        ");

                        if (mysqli_num_rows($vw_project_approval) > 0) {
                            while ($row = mysqli_fetch_assoc($vw_project_approval)) {
                                // print_r($row)
                                $fullname = $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname'];
                                $name =  $row['firstname'] .' '. $row['lastname'];


                                $email = $row['email'] ;
                                $contact_no = $row['contact_no'] ;
                        ?>
                                <p>Applicant : <span id="review_applicant_name" name="review_applicant_name" class="fw-bold"><?php echo $fullname ?></span></p>
                                <p>Contact No. : <span id="review_contact_no" name="review_contact_no" class="fw-bold"><?php echo $row['contact_no'] ?></span></p>
                                <p>E-mail : <span id="review_email" name="review_email" class="fw-bold"><?php echo $row['email'] ?></span></p>
                                <p>Project : <span id="review_proj_name" name="review_proj_name" class="fw-bold"><?php echo $row['title'] ?></span></p>
                                <p>Type : <span id="review_proj_type" name="review_proj_type" class="fw-bold"><?php echo $row['existing_land_use'] ?></span></p>
                                <p>Project Location : <span id="review_proj_loc" name="review_proj_loc" class="fw-bold"><?php echo $row['full_address'] ?></span></p>
                        <?php
                            }
                        }
                        ?>




                    </div>

                </div>

                <div id="project_action" class="p-3" style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #f8f9fa; padding: 10px;">

                    <button type="button" class="btn btn-secondary white-text project-verdict" id="application_return" data-bs-toggle="modal" data-bs-target="#project_verdict" value="return">
                        Return
                    </button>


                    <!-- <button type="button" class="btn btn-danger white-text project-verdict" id="application_deny" data-bs-toggle="modal" data-bs-target="#project_verdict" value="deny">
                        Deny
                    </button> -->

                    <button type="button" class="btn btn-success white-text project-verdict" id="application_approve" data-bs-toggle="modal" data-bs-target="#project_verdict" value="approve">
                        Approve
                    </button>


                </div>


                <div class="col-9">
                    <?php require "../components/project_step_four.php" ?>
                </div>
            </div>






        </div>
        <?php require "../components/web_footer.php" ?>
    </div>
    <?php require "../components/admin_menu.php" ?>


    <!-- Modal submit_confirmation -->
    <div class="modal fade" id="project_verdict" tabindex="-1" aria-labelledby="project_verdictLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="submit_confirmationLabel">Confirm submission</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../php/project_insert_logs.php" method="post">
                    <div class="modal-body">

                        <input type="text" name="department" id="department" value="<?php echo $_SESSION['department'] ?>" hidden>
                        <input type="text" value="<?php echo $project_id ?>" name="project_id" id="project_id" hidden>
                        <input type="text" name="project_verdict_hidden" id="project_verdict_hidden" hidden>
                        <input type="text" name="applicant_name" id="applicant_name" value = "<?php echo $name?>" hidden>
                        <input type="text" name="applicant_email" id="applicant_email" value = "<?php echo $email?>" hidden>
                        <input type="text" name="project_title" id="project_title" value = "<?php echo $project_title?>" hidden>

                        <input type="text" name="applicant_contact_no" id="applicant_contact_no" value = "<?php echo $contact_no?>" hidden>



                        <p>You're about to <b><span id="project_verdict_value" name="project_verdict_value">{project_verdict}</span></b> <?php echo $project_title; ?>.
                            Confirm?
                        </p>

                        <div class="row">
                            <label for="log_comment">Comment</label>
                            <input type="text" id="log_comment" name="log_comment">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id = "proj_review_confirm">Confirm</button>

                </form>
            </div>
        </div>
    </div>
    </div>


    <script src="../js-css/db_operations_ajax.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            // $('a[href="admin_<?php //echo strtolower($_SESSION['department']) 
                                ?>_home.php"] > li').addClass("my-active") //highlight active page in offcanvas menu


            document.title = "<?php echo $project_title ?>"
            // remove center
            $("#nav_center > *").remove();



            // add center project name
            $("#nav_center").append('<div class="text-center" id ="project_title"><input class="text-center" ' +
                'style ="background-color:transparent;border:none;color:white" type="text" name="" id="inp_project_name" ' +
                'onchange = "update_title()" value="<?php echo $project_title; ?>" </div>')
                // disabled><br><small><?php //echo ucwords($project_status) ?></small>
            $("#nav_center").addClass("m-auto");


            //remove submit for review
            $("#submit_for_review_btn").remove()
            //format doc forms
            $("#step_four_forms").css("width", "fit-content");
            $("#step_four_forms").css("margin", "auto");
            $("#step_four_forms").css("height", "100%");

            //disable forms
            $("#locational_form input").attr("disabled", "disabled")

            //pass data to modal
            $(document).on("click", ".project-verdict", function() {
                var myproject_verdict = $(this).val();
                console.log(myproject_verdict)
                // var myproject_verdict = $(this).data('id');
                $(".modal-body #project_verdict_value").val(myproject_verdict);
                $(".modal-body #project_verdict_value").html(myproject_verdict);
                $("#project_verdict_hidden").val(myproject_verdict)


            });

            $('#proj_review_confirm').click(async function() {
                
                console.log("project confirm");

            
            })


            
    <?php
        try {
            $link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            // print_r($_SESSION);
            $project_id = getSubstringBetween($link, "project_id=", "&");
        } catch (\Throwable $th) {
            //throw $th;
        }
    
    
    ?>

    let link = '<?php echo $link;?>';

if (link.includes('approve=success')) {
    // console.log("The substring is present.");
    notifySuccess("Success", "Project Approval Success");
} else {
    console.log("The substring is not present.");
}






        });
        //PROJECT_APPROVAL_REVIEW
    </script>

</body>

</html>