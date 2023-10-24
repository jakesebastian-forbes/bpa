<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA Home</title>
    <link rel="stylesheet" href="js-css/general.css">
    </link>
    <link rel="stylesheet" href="bootstrap-5.3.0/css/bootstrap.css">
    <script src="bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
    <script src="js-css/jquery-3.6.4.js"></script>
    <!-- <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="492302794651-hu16blr2fvvqq5g0i73vf8dsi9vaes81"> -->

    <style>
        .nav-pills .nav-link.active {
            background-color: transparent !important;
            border-bottom: 1px solid #245A94;
            border-radius: 0;
            color: black;
        }
    </style>

</head>

<body>

    <div id="flex_container">
        <?php require "components/web_navbar.php" ?>
        <div id="flex_main" style="background-image: url(img/bg/28412494.jpg); background-repeat: no-repeat; background-size: cover;">

            <div class="row text-center shadow p-4 m-0" style="background-color:white">
                <h1>BuildNAS</h1>
                <h3>Online Building Permit Application System</h3>
                <p>By Nasugbu Municipal Hall</p>
            </div>

            <div name="card" class="my-4" id="login_signup" style="width: max-content;margin: auto;min-height:448px;">
         

                <div id="login_card" class="m-auto border p-4 shadow " style="background-color: var(--my_blue); width: 400px; height:100%;">
                <!-- <div class="row p-0 m-0 w-auto" style = "background-color:white">LOGIN</div> -->

                            <form action="php/session_login.php" method="post">
                                <div class="row">
                                    <label for="username" style="color:white">Username</label>
                                    <input type="text" id="username" name="username" required style="width:80%;margin:auto">
                                </div>
                                <div class="row">
                                    <label for="password" style="color:white">Password</label>
                                    <input type="password" id="password" name="password" required style="width:80%;margin:auto">
                                </div>
                                <div class="row">
                                    <a href="" style="color:white;text-decoration:none;width:auto">
                                        Forgot password?
                                    </a>

                                    <a href="pages/applicant_signup.php" style="color:white;text-decoration:none;width:auto">
                                        Signup
                                    </a>
                                </div>

                                <div class="row mt-2">
                                    <button type="submit" style="width:50%;margin:auto">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    

            </div>
        </div>
        <?php require "components/web_footer.php" ?>
    </div>
</body>


<script src="js-css/google_signin.js"></script>
<script>
    $("#navbar_logo")[0].setAttribute("src", "img/icon/Seal_of_Nasugbu.png");
    $("#nav_right").remove();
    console.clear();

</script>

</html>