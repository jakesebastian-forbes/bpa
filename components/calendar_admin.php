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
        left: 67%;
        top: 100%;
        height: 54px;
        width: 57px;
        z-index: -1;
        /* border-radius: 50%; */
        transform: translate(-50%, -50%);
        border: 1px solid black;
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

    .date-passed>span.appointment_count {
        color: transparent;

    }

    .appointment_count {
        color: red;
        position: relative;
        top: 18px;

    }

    li>span.date {
        font-size: 14px;
        position: relative;
        top: -6px;
        left: -2;
    }

    li.available.weekend span.appointment_count {
        /* font-size: 10px; */
        color: gray;
    }
</style>

<div class="row justify-content-center text-center ">

    <div class="mx-auto col ">

        <div id="view_day_timeslot">
            <div style="background-color: white;border-radius:10px; width:500px;padding:18px" class="m-auto">
                <div class="row">
                    <h3 id="selected_date"> YYYY-MM-D </h3>
                    <h4>Timeslots</h4>

                </div>

                <div class="table-responsive" id="timeslot_table">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Applicant</th>
                                <th scope="col">Project</th>
                                <th scope="col">Time</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:14px">

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


    <div class="m-auto col">
        <div id="calendar_cont">
            <div class="wrapper ml-0">
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
    </div>


</div>





<!-- //*schedule confirm -->
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick='$("#exampleModal").modal("toggle")'>Cancel</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
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


    let options = {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };

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

            // !invalids 
            let date_invalid = new Date(currYear, currMonth, i);
            let isWeekend = date_invalid.getDay() === 0 || date_invalid.getDay() === 6; // 0 is Sunday, 6 is Saturday


            if (date_invalid < new Date()) {
                console.log(isToday)

                if (isToday == 'active') {
                    liTag += `<li class="available ${isToday ? "active": ""} ${isWeekend ? 'weekend' : 'weekday'}" 
                data-date ="${currYear+'-'+(currMonth+1)+'-'+i}">
                <span class = "date">${i}</span>
                <span class = "appointment_count"></span>
                </li>`;
                } else {
                    // console.log("true :", date_invalid)+
                    liTag += `<li class="date-passed ${isWeekend ? 'weekend' : 'weekday'}" 
                data-date ="${currYear+'-'+(currMonth+1)+'-'+i}">
                <span class = "date">${i}</span>
                <span class = "appointment_count"></span>
                </li>`;

                }

            } else {
                // *valid dates


                liTag += `<li class="available ${isToday} ${isWeekend ? 'weekend' : 'weekday'}" 
                data-date ="${currYear+'-'+(currMonth+1)+'-'+i}">
                <span class = "date">${i}</span>
                <span class = "appointment_count"></span>
                </li>`;

            }

        }

        for (let i = lastDayofMonth; i < 6; i++) {
            liTag += `<li class="inactive next-month">${i - lastDayofMonth + 1}</li>`
        }

        currentDate.innerText = `${months_lib[currMonth]} ${currYear}`;
        // currentDate.setAttribute("data-current-month",curr)
        daysTag.innerHTML = liTag;

        //**event listener */

        let date_boxes = document.querySelectorAll('.days li.available');

        date_boxes.forEach(box => {
            box.addEventListener('click', function handleClick(event) {

                let date_val = $(this).data("date");
                // box.setAttribute('style', 'background-color: yellow;');
                // $("#exampleModal").modal('toggle');
                // $("#picked_date").val()


                // format date
                let dateObj = new Date(date_val);
               
                let formattedDate = new Intl.DateTimeFormat('en-US', options).format(dateObj);
                // console.log(formattedDate); // Output: "January 22, 2024"

                // expose the timeslot cont
                // $("#view_day_timeslot").css("left", "131px");

                //get scheduled timeslots
                $.ajax({
                    url: "../php/appointment_approved.php",
                    type: "GET",
                    cache: false,
                    async: true,
                    data: {
                        "schedule_date": date_val
                    },
                    success: function(dataResult) {

                        $("#timeslot_table tbody").html('');
                        $("#selected_date").html(formattedDate);


                        var result = JSON.parse(dataResult);
                        if (Object.keys(result).length == 0) {
                            $("#timeslot_table tbody").append('<td colspan = "3" class = "p-4 mt-2">No scheduled appointments.</td>');

                        } else if (Object.keys(result).length > 0) {
                            // console.log(result)
                            // console.log(Object.keys(result).length)

                            for (let x = 0; x < Object.keys(result).length; x++) {

                                $("#timeslot_table tbody").append("<tr>" +
                                    "<td>" + result[x].applicant_name + "</td>" +
                                    "<td>" + result[x].project_title + "</td>" +
                                    "<td>" + result[x].schedule_time + "</td>" +
                                    "</tr>");

                                console.log(result[x].project_title)

                            }

                        }

                        // return "success";
                    },
                    error: function(dataResult) {
                        console.log(dataResult)
                    }
                });




            });
        });

        let time_boxes = document.querySelectorAll('#sched_time tr.time-slot > td.time-available');

        // time_boxes = time_boxes.parent();
        time_boxes.forEach(box => {
            box.parentNode.addEventListener('click', function handleClick(event) {

                console.log(box)

                $("#exampleModal").modal('toggle');

                $("#modal_schedule_confirm").modal('toggle');

                $("#sched_req_date").html($("#picked_date").html())
                $("#sched_req_date_val").val($("#picked_date").data("date-val"))

                $("#sched_req_time").html($(box).data('time'))
                $("#sched_req_time_val").val($(box).data('time'))





            });
        });

        updateAppointments();
    }


    let track_month = 0;



    prevNextIcon.forEach(icon => {
        icon.addEventListener("click", () => {

            currMonth = icon.id === "btn-calendar-previous" ? currMonth - 1 : currMonth + 1;


            if (icon.id === "btn-calendar-previous") {
                track_month--;

            } else {
                track_month++;
            }

            // if (track_month == 0) {
            //     // disable button to prevent going back to previous month
            //     $("#btn-calendar-previous").css("pointer-events", "none");
            // } else if (track_month > 0) {
            //     // enable
            //     $("#btn-calendar-previous").css("pointer-events", "auto");
            // }


            if (currMonth < 0 || currMonth > 11) {
                date = new Date(currYear, currMonth);
                currYear = date.getFullYear();
                currMonth = date.getMonth();
            } else {
                date = new Date();
            }
            renderCalendar();
            updateAppointments();

        });
    });




    // Function to update appointment count for each day
    function updateAppointments() {
        // Loop through each day in your calendar
        // Assume you have an array of dates, replace it with your actual logic

        let dates = document.querySelectorAll('li.available.weekday');

        dates.forEach(box => {
            var dates = $(box).data("date");
            // console.log(dates)

            $.ajax({
                url: "../php/appointment_count.php",
                type: "GET",
                cache: false,
                async: true,
                data: {
                    "schedule_date": dates

                    // "condition": "id = '" + condition + "'"
                },
                success: function(dataResult) {

                    // console.log(dataResult);
                    var result = JSON.parse(dataResult);
                    //    console.log(result['0'])
                    //    console.log(result['count'])

                    // console.log(result)
                    if (result['count'] != '0') {
                        document.querySelector('[data-date="' + result['0'] + '"] .appointment_count').innerHTML = result['count'];

                    } else {
                        document.querySelector('[data-date="' + result['0'] + '"] .appointment_count').innerHTML = "0";

                    }

                    // return "success";
                },
                error: function(dataResult) {
                    console.log(dataResult)
                }
            });

        })

    }

    $(document).ready(function() {

        renderCalendar();


        $(".date-passed").attr("readonly", "readonly");
        $(".date-passed").attr("title", "This date has already passed.");


        // $(".weekend").attr("readonly", "readonly");
        $(".weekend").attr("title", "This day is a non-working day.");

        // disable button to prevent going back to previous month
        // $("#btn-calendar-previous").css("pointer-events", "none");

        $("#calendar_cont li.active").click();

        $("li.available.weekend span.appointment_count").html("0")

        // if ($('li.active').hasClass('weekend') == true) {
        //     let dateObj = new Date(date_val);


        //     $("#selected_date").html(new Intl.DateTimeFormat('en-US', options).format($('li.active').data('date')));
        // }



    })
</script>