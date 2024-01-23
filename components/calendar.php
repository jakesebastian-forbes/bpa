<!-- Google Font Link for Icons -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

<style>
    /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    #calendar_cont>* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    /* body {
    display: flex;
    align-items: center;
    padding: 0 10px;
    justify-content: center;
    min-height: 90vh;
    background: #9B59B6;
} */



    .wrapper {
        width: 450px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .wrapper header {
        display: flex;
        align-items: center;
        padding: 25px 30px 10px;
        justify-content: space-between;
    }

    header .icons {
        display: flex;
    }

    header .icons span {
        height: 38px;
        width: 38px;
        margin: 0 1px;
        cursor: pointer;
        color: #878787;
        text-align: center;
        line-height: 38px;
        font-size: 1.9rem;
        user-select: none;
        border-radius: 50%;
    }

    .icons span:last-child {
        margin-right: -10px;
    }

    header .icons span:hover {
        background: #f2f2f2;
    }

    header .current-date {
        font-size: 1.45rem;
        font-weight: 500;
    }

    .calendar {
        padding: 20px;
        padding-top: 0;
    }

    .calendar>* {
        padding: 0;
    }

    .calendar ul {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        text-align: center;
    }

    .calendar .days {
        margin-bottom: 20px;
    }

    .calendar li {
        color: #333;
        width: calc(100% / 7);
        font-size: 1.07rem;
    }

    .calendar .weeks li {
        font-weight: 500;
        cursor: default;
    }

    .calendar .days li {
        z-index: 1;
        cursor: pointer;
        position: relative;
        margin-top: 30px;
    }

    .days li.inactive {
        color: #aaa;
    }

    .days li.active {
        color: gold !important;
    }

    .days li::before {
        position: absolute;
        content: "";
        left: 50%;
        top: 50%;
        height: 40px;
        width: 40px;
        z-index: -1;
        border-radius: 50%;
        transform: translate(-50%, -50%);
    }

    .days li.active::before {
        background: #9B59B6;
    }

    .days li:not(.active):hover::before {
        background: #f2f2f2;
    }

    .days li.inactive :hover {
        pointer-events: none !important;
        background: none !important;
    }

    .days li.date-passed {
        color: gray;
    }

    .days li.weekend {
        color: red;
    }

    tr.time-slot {
        cursor: pointer;
    }
</style>

<div id="calendar_cont">
    <div class="wrapper m-auto">
        <header>
            <p class="current-date"></p>
            <div class="icons">
                <span id="btn-calendar-previous" class="material-symbols-rounded">chevron_left</span>
                <span id="btn-calendar-next" class="material-symbols-rounded">chevron_right</span>
            </div>
        </header>
        <div class="calendar">
            <ul class="weeks">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
            </ul>
            <ul class="days"></ul>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_schedule_confirm" tabindex="-1" aria-labelledby="modal_schedule_confirm_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_schedule_confirm_label">Request Signing Schedule</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../php/schedule_insert.php" method="post">
                <div class="modal-body">

                    <input type="text" id="sched_req_date_val" name="sched_req_date_val" hidden>
                    <input type="text" id="sched_req_time_val" name="sched_req_time_val" hidden>
                    <input type="text" name="project_id" value="<?php echo $project_id ?>" hidden>


                    <h4 class="text-center">Requesting schedule on
                        <span id="sched_req_date" name="sched_req_date">date</span>
                        at <span id="sched_req_time" name="sched_req_time">time</span>
                    </h4>
                    <br>
                    <h4 class="text-center">Confirm?</h4>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick='$("#timeslot_modal").modal("toggle")'>Cancel</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="timeslot_modal" tabindex="-1" aria-labelledby="timeslot_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="timeslot_modal_label">Request Signing Schedule</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="w-100">
                    <h4 id="picked_date" class="text-center">yyyy-mm-dd</h4>

                </div>



                <style>
                    #sched_time table {
                        border-collapse: collapse;
                        width: 100%;
                    }

                    #sched_time th,
                    td {
                        border: 1px solid #ddd;
                        padding: 8px;
                        text-align: center;
                    }

                    #sched_time th {
                        background-color: #f2f2f2;
                    }

                    .time-available {
                        color: green;
                    }

                    tr:has(.time-available):hover {
                        background-color: antiquewhite;
                    }
                </style>

                <!-- <h2>Timetable</h2> -->

                <table id="sched_time" class="w-75 m-auto">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Slot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Change the start and end times as needed -->
                        <?php
                        $startTime = strtotime('9:00 AM');
                        $endTime = strtotime('3:00 PM');

                        // Loop through 15-minute intervals
                        for ($time = $startTime; $time <= $endTime; $time += 1800) {
                            echo '<tr class = "time-slot">';
                            echo '<td>' . date('h:i A', $time) . '</td>';
                            echo '<td class= "time-available" data-time = "' . date('h:i A', $time) . '">Available</td>'; // You can add activity information here
                            echo '</tr>';
                        }
                        ?>


                    </tbody>
                </table>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<script>
    const daysTag = document.querySelector(".days"),
        currentDate = document.querySelector(".current-date"),
        prevNextIcon = document.querySelectorAll(".icons span");

    let date = new Date(),
        currYear = date.getFullYear(),
        currMonth = date.getMonth();

    // console.log(date)

    const months_lib = ["January", "February", "March", "April", "May", "June", "July",
        "August", "September", "October", "November", "December"
    ];


    function event_timeslots() {
        let time_boxes = document.querySelectorAll('#sched_time tr.time-slot > td.time-available');

        // time_boxes = time_boxes.parent();
        time_boxes.forEach(box => {
            box.parentNode.addEventListener('click', function handleClick(event) {



                console.log(box)
        
                $("#timeslot_modal").modal('toggle');

                $("#modal_schedule_confirm").modal('toggle');

                $("#sched_req_date").html($("#picked_date").html())
                $("#sched_req_date_val").val($("#picked_date").data("date-val"))

                $("#sched_req_time").html($(box).data('time'))
                $("#sched_req_time_val").val($(box).data('time'))



            });
        });

    }

    const renderCalendar = () => {
        let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(),
            lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
            lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
            lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();
        let liTag = "";

        // render the last date of last month

        for (let i = firstDayofMonth; i > 0; i--) {
            liTag += `<li class="inactive last-month">${lastDateofLastMonth - i + 1}</li>`;
        }


        for (let i = 1; i <= lastDateofMonth; i++) {


            // get today
            let isToday = i === date.getDate() &&
                currMonth === new Date().getMonth() && currYear === new Date().getFullYear() ? "active" : "";

            // isToday = i === date.getDay() === 5 ? weekend;  


            // !invalids 
            let date_invalid = new Date(currYear, currMonth, i);
            let isWeekend = date_invalid.getDay() === 0 || date_invalid.getDay() === 6; // 0 is Sunday, 6 is Saturday

            if (date_invalid < new Date()) {
                // console.log("true :", date_invalid)
                liTag += `<li class="date-passed ${isToday} ${isWeekend ? 'weekend' : 'weekday'}" 
                data-date ="${currYear+'-'+(currMonth+1)+'-'+i}">${i}</li>`;

            } else {
                // *valid dates

                liTag += `<li class="available ${isToday} ${isWeekend ? 'weekend' : 'weekday'}" 
                data-date ="${currYear+'-'+(currMonth+1)+'-'+i}">${i}</li>`;

            }

        }

        for (let i = lastDayofMonth; i < 6; i++) {
            liTag += `<li class="inactive next-month">${i - lastDayofMonth + 1}</li>`
        }



        currentDate.innerText = `${months_lib[currMonth]} ${currYear}`;
        // currentDate.setAttribute("data-current-month",curr)
        daysTag.innerHTML = liTag;






        //**event listener */

        let date_boxes = document.querySelectorAll('.days li.available.weekday');

        date_boxes.forEach(box => {
            box.addEventListener('click', function handleClick(event) {

                let date_val = $(this).data("date");

                // box.setAttribute('style', 'background-color: yellow;');

                $("#timeslot_modal").modal('toggle');

                let dateObj = new Date(date_val);

                let options = {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };
                let formattedDate = new Intl.DateTimeFormat('en-US', options).format(dateObj);

                // console.log(formattedDate); // Output: "January 22, 2024"

                $("#picked_date").data("date-val", date_val)

                $("#picked_date").html(formattedDate);

                //get available timeslots
                $.ajax({
                    url: "../php/appointment_slots.php",
                    type: "GET",
                    cache: false,
                    async: true,
                    data: {
                        "schedule_date": date_val
                    },
                    success: function(dataResult) {

                        var result = JSON.parse(dataResult);

                        console.log(result)

                        // if (Object.keys(result).length == 0) {
                        //     $("#timeslot_table tbody").append('<td colspan = "3" class = "p-4 mt-2">No scheduled appointments.</td>');

                        // } else if (Object.keys(result).length > 0) {
                        //     // console.log(result)
                        //     // console.log(Object.keys(result).length)

                        for (let x = 0; x < Object.keys(result).length; x++) {
                            $("tr.time-slot [data-time='" + result[x].schedule_time + "']").parent().css("background-color", "gray")
                            $("tr.time-slot [data-time='" + result[x].schedule_time + "']").html('Unavailable')
                            $("tr.time-slot [data-time='" + result[x].schedule_time + "']").css('color', 'red')
                            $("tr.time-slot [data-time='" + result[x].schedule_time + "']").parent().css('pointer-events', 'none')



                            // $("#timeslot_table tbody").append("<tr>" +
                            //     "<td>" + result[x].applicant_name + "</td>" +
                            //     "<td>" + result[x].project_title + "</td>" +
                            //     "<td>" + result[x].schedule_time + "</td>" +
                            //     "</tr>");

                            // console.log(result[x].project_title)

                        }

                        // }

                        // return "success";
                    },
                    error: function(dataResult) {
                        console.log(dataResult)
                    }
                });




            });
        });

        //   event timeslots
        event_timeslots();


    }


    let track_month = 0;


    renderCalendar();

    prevNextIcon.forEach(icon => {
        icon.addEventListener("click", () => {

            currMonth = icon.id === "btn-calendar-previous" ? currMonth - 1 : currMonth + 1;


            if (icon.id === "btn-calendar-previous") {
                track_month--;

            } else {
                track_month++;
            }

            if (track_month == 0) {
                // disable button to prevent going back to previous month
                $("#btn-calendar-previous").css("pointer-events", "none");
            } else if (track_month > 0) {
                // enable
                $("#btn-calendar-previous").css("pointer-events", "auto");
            }


            if (currMonth < 0 || currMonth > 11) {
                date = new Date(currYear, currMonth);
                currYear = date.getFullYear();
                currMonth = date.getMonth();
            } else {
                date = new Date();
            }
            renderCalendar();
        });
    });



    // check if modal is dismissed
    $('#timeslot_modal').on('hidden.bs.modal', function() {

        console.log("not true")
        refresh_element("sched_time")



    })
    // check if modal is shown

    $('#timeslot_modal').on('shown.bs.modal', function () {
  // will only come inside after the modal is shown
  event_timeslots();

});


    $(document).ready(function() {



        $(".date-passed").attr("readonly", "readonly");
        $(".date-passed").attr("title", "This date has already passed. You can only set schedule in the future.");

        $(".weekend").attr("readonly", "readonly");
        $(".weekend").attr("title", "This day is a non-working day.");


        // disable button to prevent going back to previous month
        $("#btn-calendar-previous").css("pointer-events", "none");


        $("li.active").on('click', function() {
            alert("You can't set an appoinment on the same day.")



        })


    })
</script>