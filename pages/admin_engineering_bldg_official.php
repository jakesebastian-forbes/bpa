<?php

session_start();
require "../php/db_func.php";

$privilege = "admin";
$department = "engineering";
require '../php/page_restriction.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    $page_title = "Admin | Engineering Department";
    require "page_header.php"
    ?>
</head>

<style>
    .nav-link.active {
        background-color: #245a94 !important;
        margin-top: 10px;
        color: #EBECF1;
    }



    .nav-link:hover {
        color: pink;
    }

    .upload-signing {
        background-color: #245a94;
        float: right;
        margin-top: -90px;
        font-weight: bold;

    }
</style>

<body style="background-color: #EBECF1;">

    <?php
    // print_r($_SESSION);

    ?>
    <div id="flex_container">

        <?php require "../components/web_navbar.php";
        require "../components/admin_signing_proof_card.php"; ?>

        <div id="flex_main">


            <div class="m-auto p-5 text-center">
                <h5>Current Active Building Official</h5>

                <?php
                $building_official = full_query("SELECT * FROM `building_official` WHERE `status` = 'active'");

                if (mysqli_num_rows($building_official) > 0) {
                    if ($row = mysqli_fetch_assoc($building_official)) {
                        echo '<h2>' . $row['full_name'] . '</h2>';

                        if ($row['retire_on'] == '' || $row['retire_on'] == null) {
                            $total = full_query("SELECT COUNT(vw_project_last_action.project_id) as `cnt`  FROM vw_project_last_action WHERE action = 'project completed' 
                            AND (vw_project_last_action.latest_timestamp >= '" . $row['active_since'] . "')");
                        } else {
                            $total = full_query("SELECT COUNT(vw_project_last_action.project_id) as `cnt`  FROM vw_project_last_action WHERE action = 'project completed' 
                            AND (vw_project_last_action.latest_timestamp >= '" . $row['active_since'] . "' AND vw_project_last_action.latest_timestamp <= '" . $row['retire_on'] . "')");
                        }

                        if (mysqli_num_rows($total) > 0) {
                            if ($row2 = mysqli_fetch_assoc($total)) {

                                $active_since = $row['active_since'];
                                $active_since =  DateTime::createFromFormat('Y-m-d H:i:s', $active_since)->format('F j, Y');


                                echo '<p>Active since : <b>' . $active_since . '</b> and has approved <b>' . $row2['cnt'] . '</b> building permits.</p>';
                            }
                        }
                    }
                }
                ?>
                <!-- Button trigger modal -->
                <button type="button" class="btn my-btn-blue" id="btn_update_official" data-bs-toggle="modal" data-bs-target="#modal_bld_official">
                    Click here to edit building official
                </button>

                <button type="button" class="btn my-btn-blue" id="btn_new_official" data-bs-toggle="modal" data-bs-target="#modal_bld_official">
                    Assign a new building official
                </button>

            </div>

            <div id="previous_officials" class = "m-auto text-center">
                <h6>Previous Building Officials</h6>


            </div>



        </div>
        <?php require "../components/web_footer.php" ?>

    </div>

    <?php require "../components/admin_menu.php" ?>



    <!-- Modal -->
    <div class="modal fade" id="modal_bld_official" tabindex="-1" aria-labelledby="modal_bld_official_Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_bld_official_Label">Building Official</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="edit_bldg_official_div" hidden>
                        <!-- <h3>Update Building Official</h3> -->

                        <div class="row">
                            <div class="col label">Building Official In-Charge</div>
                            <!-- <div class="col label">Status</div> -->
                        </div>

                        <div class="row">
                            <div class="input-wrapper col" id="">
                                <!-- <label for="edit_bldg_official_name" class="">Name</label> -->
                                <?php
                                $bldg_official = select('building_official', "`status` = 'active'");
                                if (mysqli_num_rows($bldg_official) > 0) {
                                    if ($row = mysqli_fetch_assoc($bldg_official)) {

                                        $bldg_official_name = $row['full_name'];

                                        echo '
                                    <input type="text" class=" w-100 form-control" name="edit_bldg_official_name" id="edit_bldg_official_name" 
                                    data-official-id = "' . $row['id'] . '" value = "' . $row['full_name'] . '"
                                    style="height: 45px;" placeholder="Update Building Official">';
                                    }
                                }

                                ?>


                            </div>

                            <div class="input-wrapper col" hidden>
                                <!-- <label for="edit_bldg_official_status" class="">Status<span class="required"></span></label> -->
                                <select class="form-select" id="edit_bldg_official_status" name="edit_bldg_official_status" data-column="right_over_land" required>
                                    <option value="" selected disabled hidden>Select an option</option>
                                    <option value="active">Active</option>
                                    <option value="retired">Retired</option>

                                </select>
                            </div>
                        </div>

                    </div>

                    <!--  -->


                    <div id="new_bldg_official_div" hidden>

                        <div class="input-wrapper row" id="">
                            <label for="new_bldg_official_name" class="">New Building Official</label>
                            <input type="text" class=" w-100" name="new_bldg_official_name" id="new_bldg_official_name" style="height: 45px;" placeholder="New Building Official">
                        </div>

                    </div>



                </div>
                <div class="modal-footer">
                    <div id="bldg_official_button_update" hidden>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" id="update_blg_official_btn">Update</button>
                    </div>

                    <div id="bldg_official_button_new" hidden>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="new_blg_official_btn">Confirm</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {

            $('a[href="admin_<?php echo strtolower($_SESSION['department']) ?>_bldg_official.php"] > li').addClass("my-active")

            // <?php
                // $bldg_official = select('building_official', "`status` = 'active'");
                // if (mysqli_num_rows($bldg_official) > 0) {
                //     if ($row = mysqli_fetch_assoc($bldg_official)) {
                //         echo "$('#edit_bldg_official_name').val('" . $row['full_name'] . "')";
                //     }
                // }

                // 
                ?>



            // edit bldg official
            $("#btn_update_official").on("click", function() {


                // show update div
                $('#edit_bldg_official_div').removeAttr('hidden');

                // show update footer
                $('#bldg_official_button_update').removeAttr('hidden');

                // hide new div
                $("#new_bldg_official_div").attr("hidden", "hidden");

                // hide new footer
                $("#bldg_official_button_new").attr("hidden", "hidden");


            })



            // new bldg official
            $("#btn_new_official").on("click", function() {

                // show new div
                $('#new_bldg_official_div').removeAttr('hidden');

                // show new footer
                $('#bldg_official_button_new').removeAttr('hidden');

                // hide update div
                $("#edit_bldg_official_div").attr("hidden", "hidden");

                // hide update footer
                $("#bldg_official_button_update").attr("hidden", "hidden");

            })

            var official_name_backup = '<?php echo $bldg_official_name ?>';

            $("#update_blg_official_btn").on("click", function() {


                let update_name_field = $("#edit_bldg_official_name");

                if (update_name_field.val() == '' || update_name_field.val() == undefined) {
                    alert('Name cannot be empty!');
                    update_name_field.val(official_name_backup)
                } else {

                    if (update_name_field.val() == official_name_backup) {
                        alert('No changes detected.')
                    } else {

                        let official_id = update_name_field.data('official-id');

                        // console.log(update_name_field.val())
                        // console.log(official_id)

                        update_ajax("building_official", "full_name", update_name_field.val(), "`id` ='" + official_id + "'")
                        alert('Building official updated successfully.')
                        window.location.reload();
                    }
                }

            })



            $("#new_blg_official_btn").on("click", function() {

                let insert_official_input = $("#new_bldg_official_name");
                let update_name_field = $("#edit_bldg_official_name");



                if (insert_official_input.val() == '' || insert_official_input.val() == undefined) {
                    alert('Name cannot be empty!');

                } else {

                    if (insert_official_input.val() == official_name_backup) {
                        alert('No change detected. New Building Official cannot be the current.')

                    }else{
                        let official_id = update_name_field.data('official-id');
                        update_ajax("building_official", "status", "retired", "`id` ='" + official_id + "'");

                        full_ajax("UPDATE `building_official` SET `status`='retired',`retire_on`= CURRENT_TIMESTAMP() WHERE id = '"+official_id+"'")

                        insert_ajax("building_official",'`id`, `full_name`, `created`, `status`, `active_since`',
                         "UUID(),'"+insert_official_input.val()+"',CURRENT_TIMESTAMP(),'active',CURRENT_TIMESTAMP()")
                        
                         alert('Building official updated successfully.')
                        window.location.reload();


                    }
                }




            })




        });
    </script>

</body>


</html>