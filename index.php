<?php 
include("connection.php");

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add your head content here -->
</head>

<body>

    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    <div class="wrap-appointment bg-white d-md-flex pl-md-4 pb-5 pb-md-0">
                        <form action="connection.php" method="POST" class="appointment w-100">
                            <input type="hidden" name="form_type" value="appointment_form">


                            <!-- Existing form content here -->
                            <div class="row justify-content-center">
                                <div class="col-12 col-md d-flex align-items-center pt-4 pt-md-0">
                                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class=" col-12 col-md d-flex align-items-center">
                                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                        <label for="name">Phone number</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-12 col-md d-flex align-items-center">
                                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                        <label for="name">Select Services</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="services" id="services" class="form-control">
                                                    <option value="">Select Services</option>
                                                    <option value="Spinal Manupulation">Spinal Manupulation</option>
                                                    <option value="Electrotherapy">Electrotherapy</option>
                                                    <option value="Manual Lymphatic">Manual Lymphatic</option>
                                                    <option value="Medical Acupuncture">Medical Acupuncture</option>
                                                    <option value="Therapeutic Exercise">Therapeutic Exercise</option>
                                                    <option value="Joint Mobilization">Joint Mobilization</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-12 col-md d-flex align-items-center pb-4 pb-md-0">
                                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                        <label for="name">Date and Time</label>
                                        <input type="datetime-local" name="date" class="box" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md d-flex align-items-center align-items-stretch">
                                    <div
                                        class="form-group py-md-4 py-2 px-4 px-md-0 d-flex align-items-stretch bg-primary">
                                        <input type="submit" value="Make an Appointment"
                                            class="btn btn-primary py-3 px-4">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>