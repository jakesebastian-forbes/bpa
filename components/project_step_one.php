<style>
    #step_one_common_info .input-wrapper {
        position: relative;
    }

    #step_one_common_info  select, #step_one_common_info  input {
        border: 1px solid gray;
        border-radius: 6px;
        position: relative;
        width: 100%;
        margin: 10px;
        line-height: 6ex;
    }

    #step_one_common_info select {
        height: 6ex;
    }

    #step_one_common_info label {
        position: absolute;
        top: -0.2ex;
        z-index: 1;
        left: 2em;
        background-color: white;
        padding: 0 5px;
        font-size: 80%;

    }
</style>


<h2>Common Information</h2>
<div id="step_one_common_info">
    <ul class="nav nav-pills mb-0 nav-fill border border-bottom-0 m-2 p-3 " id="common_info" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="applicant_information_tab" data-bs-toggle="pill" data-bs-target="#applicant_information" type="button" role="tab" aria-controls="applicant_information" aria-selected="true">Applicant/Owner Information</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="project_information_tab" data-bs-toggle="pill" data-bs-target="#project_information" type="button" role="tab" aria-controls="project_information" aria-selected="false">Project Information</button>
        </li>

    </ul>
    <div class="tab-content border border-top-0 mt-0 m-2 p-3" id="common_info_content">
        <div class="tab-pane fade show active p-4 pt-0" id="applicant_information" role="tabpanel" aria-labelledby="applicant_information_tab" tabindex="0">


            <h4 class="row">Basic Information</h4>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">First Name <span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Middle Name</label>
                    <input type="text">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Last Name <span class="required">*</span></label>
                    <input type="text">
                </div>
                <!-- <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Suffix</label>

                    <select name="" id="">
                        <option value=""></option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Ms">Ms</option>
                        <option value="Dr">Dr</option>
                    </select>
                </div> -->

                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Tax Identification Number<span class="required">*</span></label>
                    <input type="text">
                </div>
            </div>


          
            <h4 class="row">Contact Information</h4>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Email <span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Contact Number<span class="required">*</span></label>
                    <input type="tel" id="contact_number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" maxlength="11" onkeyup="valContactNumber(this.id)">
                </div>
            </div>

            <h4 class="row">Address</h4>
            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">House Number</label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Unit Number</label>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Floor Number</label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Street Name</label>
                    <input type="text">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Lot Number</label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Block Number</label>
                    <input type="text">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Purok</label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Subdivision</label>
                    <input type="text">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper col-lg-6 col-11">
                    <label for="first">Barangay<span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-6 col-11">
                    <!-- <label for="first">Middle Name</label>
                    <input type="text"> -->
                </div>
            </div>


            <div id="applicant_information_summary">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <p><b>Applicant Complete Name</b></p>
                        <p id="applicant_compelte_name" class="text-muted">First Middle Last Suffix</p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <p><b>Applicant Tax Indentification Number</b></p>
                        <p id="applicant_compelte_name" class="text-muted">87000-4321</p>
                        <p><b>Applicant Contact Information</b></p>
                        <p id="applicant_compelte_name" class="text-muted">(09)12-3456-789</p>

                    </div>
                </div>
            </div>




        </div>
        <div class="tab-pane fade p-4 pt-0" id="project_information" role="tabpanel" aria-labelledby="project_information_tab" tabindex="0">


            <h4 class="row">Project Information</h4>

            <div class="row">
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">House Number<span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Lot Number</label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Block Number<span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Unit Number</label>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Street<span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Purok</label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Subdivision<span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Barangay</label>
                    <!-- change to dropdown -->
                    <input type="text">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Number of Units<span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Number of Storey</label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Number of Basement<span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Project Cost</label>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Lot area<span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Total Floor Area/Building Area</label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">TCT Number<span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-3 col-md-5 col-11">
                    <label for="first">Tax Declaration Number</label>
                    <input type="text">
                </div>
            </div>

            <div class="row">
                <div class="input-wrapper">
                    <label for="first">Project Title</label>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="input-wrapper">
                    <label for="first">Landmark</label>
                    <input type="text">
                </div>
            </div>

            <h4>Full-time Inspector/Supervisor</h4>
            <div class="row">
                <div class="input-wrapper col-lg-4 col-11">
                    <label for="first">Name<span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-4 col-11">
                    <label for="first">Profession</label>
                    <input type="text">
                </div>
                <div class="input-wrapper col-lg-4 col-11">
                    <label for="first">PRC Registered Number<span class="required">*</span></label>
                    <input type="text">
                </div>

            </div>




        </div>
    </div>
</div>