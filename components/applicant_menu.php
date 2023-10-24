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

    .link-hover:hover{
        /* background-color: #245A94; */
        /* color: white !important; */
        /* margin-left: 40px; */
        /* filter: hue-rotate(2) */
        border: 1px solid black;
        /* border-bottom: 1px solid #245A94; */
    }

    ul {
    list-style: none;
    }

   

</style>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas_applicant_menu" aria-labelledby="offcanvas_applicant_menuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvas_applicant_menuLabel">
            <?php require "web_date_time_display.php"?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">

        <div id="applicant" class="text-center border-bottom">
            <div class="row">
                <div class=" mx-auto mb-3 my-img-profile-cont" style = "width:30%">
                    <img src="../img/icon/Seal_of_Nasugbu.png" alt="profile" class="my-img-profile" >
                </div>

            </div>

            <?php
            
            $condition = "id = '" . $_SESSION['user_id'] . "' ";
            // echo $condition;
        
            $applicant_detail = select("applicant", $condition); //result
            if ($row = mysqli_fetch_assoc($applicant_detail)) {
        
              
                $fullname = ucwords($row['firstname'] . " ". $row['lastname']);
            
            ?>
            <div class="row">
                <p style="color:black;font-weight:bold;"><?php echo $fullname;?></p>
                <p ><?php echo $row["email"]?></p>
            </div>
            <div class="row">
                <p>Applicant</p>
            </div>
        </div>

        <?php
        }
        ?>
        <ul id="applicant_menu" class="mx-auto">
            <a href="applicant_home.php" title="Home" class="link-hover">
                <li>Home</li>
            </a>
            <a href="applicant_chat.php" title="Chat" class="link-hover">
                <li>Chat</li>
            </a>
            <!-- <a href="public_downloadables.php" title="Downloadables">
                <li>Downloadables</li>
            </a>
            <a href="public_faq.php" title="Frequently Asked Questions">
                <li>FAQ</li>
            </a>
            <a href="public_feedback.php" title="Give us Feedback">
                <li>Feedback</li>
            </a> -->
            <a href="applicant_account_setting.php" class="link-hover">
                <li>Account Settings</li>
            </a>

            <a href="../php/session_logout.php" class="link-hover">
                <li>Logout</li>
            </a>
        </ul>


    </div>
</div>

<script>

    
//add offcanvas button
  $("#nav_right").append('<button class="btn" type="button" data-bs-toggle="offcanvas" '+
  'data-bs-target="#offcanvas_applicant_menu" aria-controls="offcanvas_applicant_menu">'+
  '<img src="../img/icon/menu.png" alt="Menu" style = "height: 37px;filter: invert(1);"></button>')

    
</script>