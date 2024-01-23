<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    $page_title = "Signup";
    require "page_header.php"; ?>



    <style>
        * {
            box-sizing: border-box;
        }


        #regForm {
            background-color: var(--my_blue);
            margin: 100px auto;
            /* font-family: Raleway; */
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            padding: 40px;
            width: 40%;
            min-width: 300px;
            align-items: center;
            justify-content: center;
        }

        h1 {
            text-align: center;
        }

        input,
        select {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            /* font-family: Raleway; */
            font-family: Arial, Helvetica, sans-serif;

            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }
    </style>
</head>

<body>

    <div id="flex_container">

        <?php require "../components/web_navbar.php"; ?>

        <div id="flex_main" style="background-image: url(../img/bg/construction_bg.webp); background-size: cover;">
            <div class="row m-0">



                <div class="col">


                    <form id="regForm" method="post" action="../php/signup.php">
                        <h1 class="fw-bold">Signup</h1>
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab">Name:
                            <p><input placeholder="First name" name="fname" id="fname"></p>
                            <p><input placeholder="Last name" name="lname" id="lname"></p>
                        </div>
                        <div class="tab">Contact Info:
                            <p><input placeholder="E-mail" name="email" id="email" minlength="6"></p>
                            <p><input placeholder="Phone" name="phone" id="phone" maxlength="12" type="tel"></p>
                        </div>
                        <div class="tab">Address:
                            <p>
                                <select placeholder="Barangay" name="barangay" id="barangay" placeholder="barangay">
                                    <!-- <option value="">Barangay</option> -->
                                    <option value="Aga">Aga</option>
                                    <option value="Balaytigui">Balaytigui</option>
                                    <option value="Banilad">Banilad</option>
                                    <option value="Barangay 1 (Pob.)">Barangay 1 (Pob.)</option>
                                    <option value="Barangay 2 (Pob.)">Barangay 2 (Pob.)</option>
                                    <option value="Barangay 3 (Pob.)">Barangay 3 (Pob.)</option>
                                    <option value="Barangay 4 (Pob.)">Barangay 4 (Pob.)</option>
                                    <option value="Barangay 5 (Pob.)">Barangay 5 (Pob.)</option>
                                    <option value="Barangay 6 (Pob.)">Barangay 6 (Pob.)</option>
                                    <option value="Barangay 7 (Pob.)">Barangay 7 (Pob.)</option>
                                    <option value="Barangay 8 (Pob.)">Barangay 8 (Pob.)</option>
                                    <option value="Barangay 9 (Pob.)">Barangay 9 (Pob.)</option>
                                    <option value="Barangay 10 (Pob.)">Barangay 10 (Pob.)</option>
                                    <option value="Barangay 11 (Pob.)">Barangay 11 (Pob.)</option>
                                    <option value="Barangay 12 (Pob.)">Barangay 12 (Pob.)</option>
                                    <option value="Bilaran">Bilaran</option>
                                    <option value="Bucana">Bucana</option>
                                    <option value="Bulihan">Bulihan</option>
                                    <option value="Bunducan">Bunducan</option>
                                    <option value="Butucan">Butucan</option>
                                    <option value="Calayo">Calayo</option>
                                    <option value="Catandaan">Catandaan</option>
                                    <option value="Cogunan">Cogunan</option>
                                    <option value="Dayap">Dayap</option>
                                    <option value="Kaylaway">Kaylaway</option>
                                    <option value="Kayrilaw">Kayrilaw</option>
                                    <option value="Latag">Latag</option>
                                    <option value="Looc">Looc</option>
                                    <option value="Lumbangan">Lumbangan</option>
                                    <option value="Malapad na Bato">Malapad na Bato</option>
                                    <option value="Mataas na Pulo">Mataas na Pulo</option>
                                    <option value="Maugat">Maugat</option>
                                    <option value="Munting Indan">Munting Indan</option>
                                    <option value="Natipuan">Natipuan</option>
                                    <option value="Pantalan">Pantalan</option>
                                    <option value="Papaya">Papaya</option>
                                    <option value="Putat">Putat</option>
                                    <option value="Reparo">Reparo</option>
                                    <option value="Talangan">Talangan</option>
                                    <option value="Tumalim">Tumalim</option>
                                    <option value="Utod">Utod</option>
                                    <option value="Wawa">Wawa</option>
                                </select>

                            </p>

                            <p>
                                <label for="">Municipality</label>
                                <select placeholder="Municipality" name="municipality">
                                    <!-- <option value="">Municipality</option> -->
                                    <option value="Nasugbu">Nasugbu</option>
                                </select>
                            </p>
                            <!-- <p><input placeholder="yyyy"  name="yyyy"></p> -->
                        </div>
                        <div class="tab">Login Info:
                            <p><input placeholder="Username" name="username" id="username"></p>
                            <p><input placeholder="Password" type="password" name="password" id="password"></p>
                            <p><input placeholder="Confirm" type="password" name="c_password" id="c_password"></p>

                        </div>
                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>
                </div>

            </div>




        </div>
        <?php require "../components/web_footer.php" ?>

    </div>

    <script src="../js-css/db_operations_ajax.js"></script>

    <script>
        $("#logo_href")[0].setAttribute("href", "../index.php");


        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }

        $('#email').change(function() { // update last opened
            console.log($(this).val())
            var username = $(this).val();
            $.ajax({
                type: 'POST',
                url: '../php/validate_availability.php',
                data: {
                    username: username
                },
                success: function(response) {
                    // $('#usernameMessage').html(response);
                    console.log(response);
                }
            });

        });


        $('#password').change(function() { // check password match

            
            if($("#password").val() == "" ||$("#password").val() == null){
                $("#nextBtn").attr("disabled", "disabled");

            }
            if ($("#password").val() != $("#c_password").val()) {
                $("#nextBtn").attr("disabled", "disabled");
            } else {
                $("#nextBtn").removeAttr("disabled");

            }

        })

        $('#c_password').change(function() { // check password match

            if($("#c_password").val() == "" ||$("#password").val() == null){
                $("#nextBtn").attr("disabled", "disabled");

            }

            if ($("#password").val() != $("#c_password").val()) {
                $("#nextBtn").attr("disabled", "disabled");
            } else {
                $("#nextBtn").removeAttr("disabled");

            }

        })
    </script>

</body>

</html>