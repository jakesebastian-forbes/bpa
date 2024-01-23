<?php
session_start();

print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>

<?php
$page_title = "Chat | BuildNAS";
require "page_header.php";
?>


    <style>
        /* body {
            background-color: #212A3E;
            font-family: Arial;
        } */

        #container {
            width: 100%;
            min-width: 300px;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 5px;
            overflow: hidden;
            
        }

        main {
            width: 100%;
            display: inline-block;
            vertical-align: center;
            
        }

        main header {
            padding: 1rem;
            background-color: #435585;
            text-align: center;
            color: #fff;
        }

        main .inner_div {
            list-style-type: none;
            position: relative;
            overflow: auto;
            min-height: 560px;
            max-height: 512.5px;
            background-image: url('image.jpg');
            /* background-color: #BFDCE5; */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* main .triangle,
        main .triangle1 {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 8px 8px 8px;
            margin-left: 20px;
        } */

        main .message,
        main .message1 {
            padding: 10px;
            color: #000;
            line-height: 20px;
            max-width: 90%;
            display: inline-block;
            text-align: left;
            border-radius: 5px;
            clear: both;
            margin: 0 15px 15px 15px;
            
        }

        main .message1 {
            float: right;
        }

        main .message {
            float: left;
        }

        main footer {
            padding: 1rem;
            background-color: #435585;
        }

        main footer .input1,
        main footer textarea,
        main footer .input2 {
            width: 100%;
            border-radius: 3px;
            padding: 10px;
            font-size: 13px;
            margin-bottom: 13px;
        }

        main footer .input2 {
            color: white;
            text-align: center;
            background-color: black;
            border: 2px solid white;
        }

        main footer textarea::placeholder {
            color: #ddd;
        }

        /* main .triangle,
        main .triangle1 {
            width: 0;
            height: 0;
            border-style: solid;
            margin-left: 20px;
        } */

        main .message,
        main .message1 {
            padding: 10px;
            color: #fff;
            line-height: 20px;
            max-width: 70%;
            display: inline-block;
            text-align: left;
            border-radius: 15px;
            clear: both;
            margin: 0 15px 15px 15px;
            word-wrap: break-word;
        }

        main .message1 {
            float: right;
            background-color: #007bff;
            word-wrap: break-word;
        }

        main .message {
            background-color: #28a745;
            word-wrap: break-word;
        }

        .nav-item {
        background-color: #eee;
        transition: background-color 0.3s ease;
        }

        .nav-item:hover {
            background-color: #ddd !important;
        }

    </style>
</head>



<body >

<div class="container-fluid" id="container my-3">

    <main>
        <div class="row">
            <div class="col-lg-4 d-flex" style="padding: 0; margin: 0;"> <!-- Added d-flex to the parent container -->
                <ul class="nav nav-pills flex-column" style="width: 100%;">
                <?php 
                    $host = "localhost"; 
                    $user = "root"; 
                    $pass = ""; 
                    $db_name = "bpa"; 

                    $conn = new mysqli($host, $user, $pass, $db_name);

                    $query = "SELECT * FROM chat_messages";

                    $run = $conn->query($query); 

                    while ($row = $run->fetch_array()) :
                        
                        print_r($row);
                    ?>

                        <li class="nav-item p-2 border-bottom">
                            <a href="#message<?php echo $row['user_id']; ?>" class="nav-link d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <div class="pt-1">
                                        <p class="fw-bold mb-0"><?php echo $row['user_id'] ?></p>
                                        <p class="small text-muted"><?php echo $row['message'] ?></p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1"><?php echo $row['timestamp'] ?></p>
                                    <!-- <span class="badge bg-danger float-end">1</span> -->
                                </div>
                            </a>
                        </li>
                    <?php 
                    endwhile;
                    ?>


                </ul>
            </div>
            <div class="col-lg-8 message-box" style="padding: 0; margin: 0;">
                <header>
                    <h2 class="text-start">USER NAME</h2>
                </heade>
                <form id="myform" action="Group_chat.php" method="POST">
                    <div class="inner_div" id="chathist">
                        <!-- Your PHP code for chat_messages here -->
                        <div class="inner_div" id="chathist">
                        <?php 

                        $host = "localhost"; 
                        $user = "root"; 
                        $pass = ""; 
                        $db_name = "bpa"; 

                        $conn = new mysqli($host, $user, $pass, $db_name);
                        
                        $query = "SELECT * FROM chat_messages";

                        $run = $conn->query($query); 

                        $i=0;


                        while($row = $run->fetch_array()) : 

                        if($i==0){

                        $i=5;

                        $first=$row;

                        ?>

                        <!-- <div id="triangle1" class="triangle1"></div> -->

                        <div id="message1" class="message1 my-2"> 

                            <span style="color:white;float:right;">
                                <?php echo $row['msg']; ?>
                            </span> <br/>

                            <div>
                                
                            </div>
                            
                        </div>
                        <span class="mx-3" style="color:black;float:right;

                                    font-size:10px;clear:both;">

                                    <?php echo $row['uname']; ?>, 

                                        <?php echo $row['dt']; ?>

                                </span>
                        <br/><br/>

                        <?php

                        }
                        else
                        {

                        if($row['uname']!=$first['uname'])
                        {
                        ?>

                        <div id="triangle" class="triangle"></div>

                        <div id="message" class="message my-2"> 

                            <span style="color:white;float:left;">

                            <?php echo $row['msg']; ?>

                            </span> <br/>

                            
                        </div>
                        <span class="mx-3" style="color:black;float:left;

                                        font-size:10px;clear:both; margin-top: -4px;">

                                <?php echo $row['uname']; ?>, 

                                        <?php echo $row['dt']; ?>

                                </span>
                        <br/><br/>
                        <?php
                        } 
                        else
                        {
                        ?>

                        <div id="triangle1" class="triangle1"></div>

                        <div id="message1" class="message1"> 

                            <span style="color:white;float:right;">

                            <?php echo $row['msg']; ?>

                            </span> <br/>

                            <div>
                                <span style="color:black;float:left;

                                        font-size:10px;clear:both;"> 

                                <?php echo $row['uname']; ?>, 

                                    <?php echo $row['dt']; ?>

                                </span>
                            </div>
                        </div>

                        <br/><br/>
                        <?php
                        }
                        }

                        endwhile;
                        ?>
                    </div>

                    </div>

                    <footer>
                        <div class="row gap-0">
                            <div class="col-lg-10 col-12">
                                <textarea id="msg" name="msg" rows='3' cols='50' placeholder="Type your message" style="resize: none; height: 45px"></textarea>
                            </div>
                            <div class="col-lg-2 col-12">
                                <input class="input2" type="submit" id="submit" name="submit" value="Send">
                            </div>
                        </div>
                    </footer>
                </form>
            </div>
        </div>
        
    </main>
</div>

<!-- <script>
    function show_func() {
        var element = document.getElementById("chathist");
        element.scrollTop = element.scrollHeight;
    }
</script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Add a click event listener to the nav-pills
        $('.nav-link').on('click', function(e) {
            e.preventDefault(); // Prevent default link behavior

            // Get the href attribute of the clicked nav-link
            var target = $(this).attr('href');

            // Update the content of the message-box using AJAX or other means
            $('#message-box').load(target); // Assuming the target is a valid URL that returns the content

            // Optionally, you can update the header with the user's name based on the clicked nav-pill
            var userName = $(this).find('.fw-bold').text();
            $('header h2').text(userName);
        });
    });

    function toggleMobileView(messageId) {
        var messageElement = document.querySelector(messageId);
        if (messageElement.style.display === "none") {
            messageElement.style.display = "block";
        } else {
            messageElement.style.display = "none";
        }
    }
</script>
</body>
</html>
