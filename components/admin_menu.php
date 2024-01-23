<style>
    #applicant_menu {
        list-style: none;
        padding-left: 0px;
        margin-top: 1rem;
        display: flex;
        flex-direction: column;

    }

    #applicant_menu>a {
        text-decoration: none;
        color: black;
    }

    #applicant_menu>a>li {
        padding-top: 4px;
        padding-bottom: 4px;
        /* width: 50%; */
        text-align: center;
    }

    .my-active {
        background-color: var(--my_blue);
        border-radius: 8px;
        color: white;

    }
</style>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas_admin_menu" aria-labelledby="offcanvas_admin_menuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvas_admin_menuLabel">
            <?php require "web_date_time_display.php" ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">

        <div id="applicant" class="text-center border-bottom">
            <div class="row">
                <div class=" mx-auto mb-3" style="border: 2px solid;width: 30%;aspect-ratio: 1/1;padding: 0;border-radius: 50%;">
                    <img src="../img/icon/Seal_of_Nasugbu.png" alt="profile" class="" style="object-fit: cover;height: 100%;width: 100%;">
                </div>

            </div>

            <?php

            $condition = "id = '" . $_SESSION['admin_id'] . "' ";
            // echo $condition;

            $applicant_detail = select("admin", $condition); //result
            if ($row = mysqli_fetch_assoc($applicant_detail)) {



            ?>
                <div class="row">
                    <p style="color:black;font-weight:bold;"><?php echo $_SESSION['name']; ?></p>
                    <p><?php echo ucwords($row["department"] . " " . "Department") ?></p>
                </div>
                <!-- <div class="row">
                <p>Applicant</p>
            </div> -->
        </div>


        <ul id="applicant_menu" class="mx-auto">
            <a href="admin_<?php echo strtolower($_SESSION['department']) ?>_home.php" title="Home">
                <li>Home</li>
            </a>

            <?php if ($_SESSION['department'] == "Engineering") {
                    echo '      
                <a href="admin_engineering_approvals.php" title="Pending Approvals">
                <li>Pendings</li>
                </a>
         
                <a href="admin_engineering_appointments.php" title="Appointments">
                    <li>Scheduled Appointments</li>
                </a> 
                <a href="admin_engineering_proof.php" title="Signing Proof">
                <li>Signing Proof</li>
            </a> 
      ';
                } ?>

            <a href="project_archive.php" title="Project Archive" hidden>
                <li>Project Archive</li>
            </a>

            <a href="admin_chat.php" title="Chat">
                <li>Chat</li>
            </a>

            <!-- <a href="public_downloadables.php" title="Downloadables">
                <li>Downloadables</li>
            </a>
            <a href="public_faq.php" title="Frequently Asked Questions">
                <li>FAQ</li>
            </a>-->

            <a href="../php/session_logout.php">
                <li>Logout</li>
            </a>
        </ul>
    <?php
            }
    ?>

    </div>
</div>

<script>
    //add offcanvas button
    $("#nav_right").append('<button class="btn" type="button" data-bs-toggle="offcanvas" ' +
        'data-bs-target="#offcanvas_admin_menu" aria-controls="offcanvas_admin_menu">' +
        '<img src="../img/icon/menu.png" alt="Menu" style = "height: 37px;filter: invert(1);"></button>')


    //add banner
    $("#nav_center").append("<h4 class = 'text-center'><?php echo ucwords($row["department"] . " " . "Department") ?></h4>")

    if (window.location.href.indexOf("home") !== -1) {
        // console.log("Substring found in the string.");
        $("#nav_center").append("<p class = 'text-center'>Admin Dashboard</p>")

    } else {
        // console.log("Substring not found in the string.");

        <?php
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        // Parse the URL to get the path
        $path = parse_url($url, PHP_URL_PATH);
        // Extract the filename without extension
        $filenameWithoutExtension = pathinfo($path, PATHINFO_FILENAME);
        // Replace underscores with spaces
        $cleanedString = str_replace("_", " ", $filenameWithoutExtension);
        echo '
        $("#nav_center").append("<p class = \'text-center\'>' . ucwords($cleanedString) . '</p>")
        
        ';

        ?>

    }
</script>