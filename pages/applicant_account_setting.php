<?php

session_start();
// print_r($_SESSION);


if (isset($_SESSION["forms"])) {
    unset($_SESSION["forms"]);
};
require "../php/db_func.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php 
  $page_title = "Account Setting";
  require "page_header.php";?>



</head>

<style>
        .notification-button {
            display: none;
        }

        .sessions {
            display: none;
        }

        .nav-link.active {
            background-color: #245A94 !important;
            color: white !important;
        }

        .nav-pills .nav-link {
            color: black;
            font-size: 14px;
            border: 1px solid transparent;
            background-color: transparent;
            /* Set the default background to transparent */
        }

        .nav-pills .nav-link.active {
            background-color: transparent;
            /* Set the active background to transparent */
            color: black;
            /* Set the text color to black for the active state */
        }

        .nav-pills .nav-link:hover {
            background-color: #ddd;
            color: black;
        }

        .nav-link {
            margin-top: 10px;
        }

        /* #profile_info input{
            border:transparent !important;
            
        } */
</style>


<body>

    <div id="flex_container">

        <?php require "../components/web_navbar.php" ?>

        <div id="flex_main">


            <div class="container my-3">
                <div class="row gutters-sm">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex d-md-none justify-content-between align-items-center mb-3">
                                    <!-- Sidebar toggle button (hamburger icon) -->
                                    <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#v-pills-sidebar">
                                        <i class="bi bi-list"></i>
                                    </button>
                                </div>
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home-content" aria-selected="true">Profile Information</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile-content" aria-selected="false">Account Settings</button>
                                    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled-content" aria-selected="false">Security</button>
                                    <button class="nav-link notification-button" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages-content" aria-selected="false" hidden>Notification</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header border-bottom mb-3 d-flex d-md-none">
                                <button class="btn btn-primary ms-auto" data-bs-toggle="collapse" data-bs-target="#v-pills-sidebar">
                                    <i class="bi bi-list"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                        <h6 class="fw-bold">PROFILE INFORMATION</h6>
                                        <hr>
                                        <div id = "profile_info">
                                        <form>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="firstname" class="form-label">Lastname</label>
                                                        <input type="text" class="form-control form-control-sm" id="settings_lastname" name="settings_lastname" placeholder="lastname">
                                                    </div>
                                                    <div class="col">
                                                        <label for="lastname" class="form-label">Firstname</label>
                                                        <input type="text" class="form-control form-control-sm" id="settings_firstname" name="settings_firstname" placeholder="firstname">
                                                    </div>
                                                    <div class="col">
                                                        <label for="mi" class="form-label">M.I</label>
                                                        <input type="text" class="form-control form-control-sm" id="settings_mi" name="settings_mi" placeholder="middle initial">
                                                    </div>

                                                </div>

                                                <!-- <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small> -->
                                            </div>
                                            <div class="mb-5">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="location" class="form-label">No.</label>
                                                        <input type="text" class="form-control form-control-sm" id="settings_no" value="" name="settings_no" placeholder="no">
                                                    </div>
                                                    <div class="col">
                                                        <label for="location" class="form-label">Street</label>
                                                        <input type="text" class="form-control form-control-sm" id="settings_street" value="" name="settings_street" placeholder="street">
                                                    </div>
                                                    <div class="col">
                                                        <label for="location" class="form-label">Lot No.</label>
                                                        <input type="text" class="form-control form-control-sm" id="settings_lot_no" value="" name="settings_lot_no" placeholder="lot no">
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="location" class="form-label">Block No.</label>
                                                        <input type="text" class="form-control form-control-sm" id="settings_block_no" value="" name="settings_block_no" placeholder="block no">
                                                    </div>
                                                    <div class="col">
                                                        <label for="location" class="form-label">Barangay</label>
                                                        <input type="text" class="form-control form-control-sm" id="settings_barangay" value="" name="settings_barangay" placeholder="barangay">
                                                    </div>
                                                    <div class="col">
                                                        <label for="location" class="form-label">Municipality</label>
                                                        <input type="text" class="form-control form-control-sm" id="settings_municipality" value="Nasugbu" name="settings_municipality" placeholder="municipality">
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- <div class="form-group small text-muted">
                                        All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
                                    </div> -->
                                            <button type="button" class="btn btn-primary" style="background-color: #245A94;">Update Profile</button>
                                            <button type="reset" class="btn btn-light">Reset Changes</button>
                                        </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                        <h6 class="fw-bold">ACCOUNT SETTINGS</h6>
                                        <hr>
                                        <form>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control form-control-sm" id="username" placeholder="Enter your username" value="">
                                                <small id="usernameHelp" class="form-text text-muted">After changing your username, your old username becomes available for anyone else to claim.</small>
                                            </div>
                                            <hr>
                                            <div class="mb-3">
                                                <label class="d-block text-danger">Delete Account</label>
                                                <p class="text-muted font-size-sm">Once you delete your account, there is no going back. Please be certain.</p>
                                            </div>
                                            <button class="btn btn-danger" type="button">Delete Account</button>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                        <h6 class="fw-bold">SECURITY SETTINGS</h6>
                                        <hr>
                                        <form>
                                            <div class="mb-3">
                                                <label class="d-block my-2"><b>Change Password</b> </label>
                                                <input type="text" class="form-control form-control-sm" placeholder="Enter your old password">
                                                <input type="text" class="form-control mt-1 form-control-sm" placeholder="New password">
                                                <input type="text" class="form-control mt-1 form-control-sm" placeholder="Confirm new password">
                                            </div>

                                            <button type="button" class="btn btn-primary" style="background-color: #245A94;">Save</button>
                                            <button type="reset" class="btn btn-light">Cancel</button>
                                        </form>
                                        <hr>
                                        <form hidden>
                                            <div class="mb-3">
                                                <label class="d-block"><b>Two Factor Authentication</b> </label>
                                                <button class="btn btn-info my-2" type="button" style="background-color: #245A94; color: white">Enable two-factor authentication</button>
                                                <p class="small text-muted mt-2">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.</p>
                                            </div>
                                        </form>
                                        <!-- <hr> -->
                                        <form>
                                            <div class="mb-3 sessions" hidden>
                                                <label class="d-block"><b>Sessions</b> </label>
                                                <p class="font-size-sm text-secondary">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>
                                                <ul class="list-group list-group-sm">
                                                    <li class="list-group-item d-flex align-items-center">
                                                        <div>
                                                            <h6 class="mb-0">San Francisco City 190.24.335.55</h6>
                                                            <small class="text-muted">Your current session seen in the United States</small>
                                                        </div>
                                                        <button class="btn btn-light btn-sm ms-auto" type="button">More info</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                                        <h6 class="fw-bold">NOTIFICATION SETTINGS</h6>
                                        <hr>
                                        <form>
                                            <div class="mb-3">
                                                <label class="d-block mb-0">Security Alerts</label>
                                                <div class="small text-muted mb-3">Receive security alert notifications via email</div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1" checked="">
                                                    <label class="form-check-label" for="customCheck1">Email each time a vulnerability is found</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2" checked="">
                                                    <label class="form-check-label" for="customCheck2">Email a digest summary of vulnerability</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="d-block">SMS Notifications</label>
                                                <ul class="list-group list-group-sm">
                                                    <li class="list-group-item d-flex align-items-center">
                                                        <div>Comments</div>
                                                        <div class="form-check form-switch ms-auto">
                                                            <input class="form-check-input" type="checkbox" id="customSwitch1" checked="">
                                                            <label class="form-check-label" for="customSwitch1"></label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex align-items-center">
                                                        <div>Updates From People</div>
                                                        <div class="form-check form-switch ms-auto">
                                                            <input class="form-check-input" type="checkbox" id="customSwitch2">
                                                            <label class="form-check-label" for="customSwitch2"></label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex align-items-center">
                                                        <div>Reminders</div>
                                                        <div class="form-check form-switch ms-auto">
                                                            <input class="form-check-input" type="checkbox" id="customSwitch3" checked="">
                                                            <label class="form-check-label" for="customSwitch3"></label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex align-items-center">
                                                        <div>Events</div>
                                                        <div class="form-check form-switch ms-auto">
                                                            <input class="form-check-input" type="checkbox" id="customSwitch4" checked="">
                                                            <label class="form-check-label" for="customSwitch4"></label>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex align-items-center">
                                                        <div>Pages You Follow</div>
                                                        <div class="form-check form-switch ms-auto">
                                                            <input class="form-check-input" type="checkbox" id="customSwitch5">
                                                            <label class="form-check-label" for="customSwitch5"></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <?php require "../components/web_footer.php" ?>

    </div>

    <?php require "../components/applicant_menu.php" ?>

</body>

<script>
    

    <?php 
    
    $acc_settings_edit = select('vw_applicant_basics',"applicant_id = '".$_SESSION['user_id']."'");
    if (mysqli_num_rows($acc_settings_edit) > 0) {
        while ($row = mysqli_fetch_assoc($acc_settings_edit)) {

        echo "$('#settings_firstname')[0].value = '" . $row['firstname'] . "';";
        echo "$('#settings_mi')[0].value = '" . $row['middlename'] . "';";
        echo "$('#settings_lastname')[0].value = '" . $row['lastname'] . "';";
        echo "$('#settings_no')[0].value ='".$row['house_no'] . "';";
        echo "$('#settings_lot_no')[0].value ='".$row['lot_no'] . "';";
        echo "$('#settings_street')[0].value ='".$row['street_name'] . "';";
        echo "$('#settings_barangay')[0].value ='".$row['barangay'] . "';";
        echo "$('#settings_block_no')[0].value ='".$row['block_no'] . "';";
        echo "$('#username')[0].value ='".$row['username'] . "';";


        
        
    }
}

    ?>

$('a[href="applicant_account_setting.php"] > li').addClass("my-active") //highlight active page in offcanvas menu

// $("#profile_info input").attr("disabled","disabled")




</script>

</html>