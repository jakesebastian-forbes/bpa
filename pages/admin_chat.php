<?php

session_start();
// print_r($_SESSION);


$privilege = "admin";
  $department = strtolower($_SESSION['department']);
    $current_user = $_SESSION['admin_id'];

require '../php/page_restriction.php';
require "../php/db_func.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    $page_title = "Chats";
    require "page_header.php" ?>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #flex_container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #flex_main {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .message_user,
        .message_other {
            padding: 10px;
            color: white;
            line-height: 20px;
            max-width: 90%;
            display: inline-block;
            text-align: left;
            border-radius: 5px;
            clear: both;
            margin: 0 15px 15px 15px;


        }

        .message_user {
            float: right !important;
            background-color: #2999f9;
            word-wrap: break-word;
        }

        .message_other {
            float: left !important;
            background-color: #34cf5d;
            word-wrap: break-word;
        }

        .my-img {
            width: 150px;
            /* height: 150px; */
            aspect-ratio: 1/1;
            border-radius: 50%;
            object-fit: cover;
        }

        .nav-pills {
            flex-direction: column;
        }

        .nav-link {
            text-align: start;
            color: black;
            background-color: #245a94;
        }

        /* .nav-link.active {
            background: none;
        } */

        .nav-item {
            background-color: #eee;
            transition: background-color 0.3s ease;
        }

        .nav-item:hover {
            background-color: #ddd !important;
        }

        .tab-pane {
            margin-top: 10px;
            padding: 10px;
        }

        .left-tab {
            background-color: #F0F0F0;
        }

        .right-tab {
            margin: 0 auto;
            max-height: 568px;
        }

        .inner-div {
            list-style-type: none;
            position: relative;
            overflow: auto;
            min-height: 560px;
            max-height: 512.5px;
            background-image: url('../img/bg-2.jpg');
            /* background-color: #BFDCE5; */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .fixed-height-row {
            height: 568px;
            margin: 0;
        }

        /* Media query for smaller screens (e.g., mobile) */
        @media (max-width: 767px) {
            .fixed-height-row {
                height: auto;
                /* Let the height adjust based on content for smaller screens */
            }
        }

        .send-btn {
            width: 100%;
            border-radius: 3px;
            padding: 10px;
            font-size: 13px;
            margin-bottom: 13px;
            background-color: black;
            color: white;
            font-weight: bold;
            border-color: white;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: white;
            background-color: #245a94 !important;
        }
    </style>


</head>

<body>

    <div id="flex_container">

        <?php require "../components/web_navbar.php" ?>

        <div id="flex_main">



            <?php

            $query_message = full_query("SELECT 
            CASE 
                WHEN `from` = '$current_user' THEN `to`
                WHEN `to` = '$current_user' THEN `from`
            END AS `other_user_id`,
            COUNT(*) AS `message_count`
        FROM `chat_messages`
        WHERE `from` = '$current_user' OR `to` = '$current_user'
        GROUP BY `other_user_id`
        HAVING `other_user_id` IS NOT NULL
        ORDER BY `other_user_id`;
        ");


            $existing_conversation = array();

            if (mysqli_num_rows($query_message) > 0) {
                while ($row = mysqli_fetch_assoc($query_message)) {

                    // print_r($row);
                    // echo "<br>";
                    array_push($existing_conversation, $row['other_user_id']);
                }


            ?>

                <div class="row fixed-height-row">
                    <div class="col-lg-4 left-tab">
                        <!-- Navigation Tabs -->
                        <div class="row my-2 mx-1" style="border-bottom: 2px solid #000">
                            <div class="col my-2">
                                <h5 class="fw-bold text-uppercase">Chats</h5>
                            </div>
                            <div class="col text-end">
                                <!-- <button type="button" class="btn my-btn-blue"></button> -->
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary my-btn-blue" data-bs-toggle="modal" data-bs-target="#modal_new_chat">
                                    <span><i class="bi bi-plus-circle">+</i></span>
                                </button> -->

                            </div>
                        </div>
                        <ul class="nav nav-pills flex-column m-0 p-0">
                            <?php

                            // print_r($existing_conversation);

                            for ($i = 0; $i < count($existing_conversation); $i++) {

                                // get the info of other-user

                                $other_user = select("vw_applicant_basics", "`applicant_id` = '$existing_conversation[$i]'");
                                if (mysqli_num_rows($other_user) > 0) {
                                    while ($row = mysqli_fetch_assoc($other_user)) {

                                        echo "<li class='nav-item '>
                                                <a class='nav-link conversation-tab' id='conversation_tab_" . $row['applicant_id'] . "' data-bs-toggle='pill' href='#tab_$i'>
                                                "  . $row['full_name'] . "
                                                </a>
                                        </li>";
                                    }
                                }
                            }
                            echo "   </ul>

                        </div>";

                            ?>


                            <!-- Add more tabs as needed -->

                            <div class="col-lg-8 right-tab" style="margin: 0;">
                                <!-- Tab Content -->
                                <div class="tab-content p-4 pt-0">

                                    <?php

                                    // print_r($existing_conversation);



                                    for ($i = 0; $i < count($existing_conversation); $i++) {

                                        $other_user = select("vw_applicant_basics", "`applicant_id` = '$existing_conversation[$i]'");

                                        if (mysqli_num_rows($other_user) > 0) {
                                            while ($row = mysqli_fetch_assoc($other_user)) {
                                                // print_r($row);
                                                echo " <div class='tab-pane fade flex_container' id='tab_$i' style='position:relative;'>
                                                        <div class='row text-start'>
                                                            <h3>" . $row['full_name'] ."</h3>
                                                        </div>

                                                        ";


                                                echo '<div style="min-height: 200px; max-height: 427px ; list-style-type: none; position: relative; overflow: scroll;"
                                                id = "message_cont_' . $i . '" 
                                                data-current-user = "' . $current_user . '" data-other-user = "' . $existing_conversation[$i] . '">';

                                                $other_user = full_query("SELECT `id`, `from`, `to`, `message`, `timestamp`
                                                                    FROM `chat_messages`
                                                                    WHERE 
                                                                        (`from` = '$current_user' AND `to` = '$existing_conversation[$i]') OR
                                                                        (`from` = '$existing_conversation[$i]' AND `to` = '$current_user')
                                                                    ORDER BY `timestamp` ASC ");
                                                if (mysqli_num_rows($other_user) > 0) {
                                                    while ($row = mysqli_fetch_assoc($other_user)) {


                                                        $timestamp = '2024-01-16 16:37:08';
                                                        // Convert the timestamp to Unix timestamp
                                                        $timestamp = strtotime($timestamp);
                                                        // Format the date with the short month name
                                                        $timestamp = date('M/d/Y h:i:s A', $timestamp);

                                                        if ($row['from'] == $current_user) {

                                                            echo "   

                                                            <div class='message_user' title = 'You • " . $timestamp . "'>
                                                            " . $row['message'] . " 
                                                            </div>
                                                    
                                                        ";
                                                        } else {



                                                            echo "   
                <div class='message_other' title = 'You • " . $timestamp . "'>
                " . $row['message'] . " 
                </div>
           
               ";
                                                        }
                                                    }
                                                }

                                                echo '</div>';


                                                echo '
            <div class="text-center write-cont row w-100" id = "" style = "height:50px; position:absolute; margin-top: 25px">
    <div class="col">
        <!-- <input type="text" name="" id="" class = "w-100" style = "resize:both" placeholder="Write a message.."> -->
        <textarea name="" id="message_' . $existing_conversation[$i] . '" rows="1" class = "w-100" style = "resize: none; height: 45px; min-height:30px; background-color: #DDE6ED; 
        border: 3px solid #000;" placeholder="Write a message.."
        data-send-to = "' . $existing_conversation[$i] . '" data-send-by = "' . $current_user . '"
        data-cont = "message_cont_'.$i.'"
        onkeydown="send_message(\'message_' . $existing_conversation[$i] . '\')" 
        ></textarea>
    </div>
    <div class="col-lg-2 col-12">
        <input type="button" value="Send" class="send-btn" onclick="send_message(\'message_' . $existing_conversation[$i] . '\')">
    </div>

</div>';

                                                echo "</div>";
                                            }
                                        }
                                    }


                                    ?>


                                </div>
                            </div>
                    </div>

                <?php
            } else{
                echo "<div class = 'row text-center p-3 m-auto'>No messages from any applicant</div>";
            }
                ?>





                <?php

                ?>



                </div>

                <?php require "../components/admin_menu.php" ?>
                <?php require "../components/web_footer.php" ?>

        </div>





        <!-- Modal -->
        



</body>

<script>
    $('a[href="admin_chat.php"] > li').addClass("my-active") //highlight active page in offcanvas menu


  // Function to load messages for a specific sender and receiver
function loadMessages(containerId) {
    var receiverId = $("#" + containerId).data("current-user");
    var senderId = $("#" + containerId).data("other-user");

    $.ajax({
        type: "GET",
        url: "../php/chat_get_messages.php",
        data: {
            senderId: senderId,
            receiverId: receiverId
        },
        success: function (response) {
            var currentMessages = $("#" + containerId).html();
            console.log(currentMessages);
            console.log(response);

            if (response !== currentMessages) {
                console.log("Messages updated for sender " + senderId + " and receiver " + receiverId);

                response = JSON.parse(response);
                console.log(response.length);

                var chatHtml = ""; // Accumulate the messages in this variable

                for (let i = 0; i < response.length; i++) {
                    if (response[i].from == receiverId) {
                        console.log(response[i].from);
                        console.log(response[i].message);

                        chatHtml += "<div class='message_user' title='You • " + response[i].timestamp + "'>" + response[i].message + " </div>";
                    } else {
                        chatHtml += "<div class='message_other' title='You • " + response[i].timestamp + "'>" + response[i].message + " </div>";
                    }
                }

                $("#" + containerId).html(chatHtml); // Set the HTML content once after the loop
            }
        },
        error: function (error) {
            console.error("Error loading messages:", error);
        }
    });
}



    // Function to handle message polling
    function pollMessages() {
        var existing_convo = <?php echo json_encode($existing_conversation); ?>;

        for (var i = 0; i < existing_convo.length; i++) {
            var conversationId = existing_convo[i];
            var containerId = "message_cont_" + i;
            // console.log(containerId);

            loadMessages(containerId);
        }
    }

    // Initial load of messages when the page loads
    $(document).ready(function() {
        pollMessages();
    });

    // Poll for new messages every X seconds (adjust the interval as needed)
    setInterval(function() {
        pollMessages();
    }, 5000);


    function send_message(target_id) {
        // Get the message from the textarea

        if (event.key === "Enter") {
        // Call your function or perform an action here
        let message = $("#" + target_id).val();
        let send_to = $("#" + target_id).data("send-to")
        let send_by = $("#" + target_id).data("send-by")
        let cont = $("#" + target_id).data("cont")


        // Check if the message is not empty
        if (message.trim() !== "") {
            // Use AJAX to send the message to a PHP script
            $.ajax({
                type: "POST",
                url: "../php/chat_insert.php", // Replace with the actual PHP script URL
                data: {
                    message: message,
                    send_to: send_to,
                    send_by: send_by
                },
                success: function(response) {
                    // Do something with the response (if needed)
                    console.log("Message sent successfully");
                    console.log(response)
                    message_element = '<div class="message_user" title="You • Just now">'+message+'</div>';
                    $("#"+cont).append(message_element)

                    // Clear the textarea after sending the message
                    $("#" + target_id).val("");
                },
                error: function(error) {
                    console.error("Error sending message:", error);
                }
            });
        }

    }
        
    }

    document.addEventListener("DOMContentLoaded", () => {


      



        $(".nav-link.conversation-tab").first()[0].click()


    })
</script>

</html>