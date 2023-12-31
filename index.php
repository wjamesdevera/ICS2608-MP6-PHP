<?php
require("./data.php");
include("./templates/header.php");
?>
    <div class="section sign-up">
        <div class="left-section">
            <div class="">
                <h1 class="hero-title">CICS Front-End Club</h1>
                <img src="./assets/1 SCENE.svg" alt="" class="sign-up-img">
            </div>
        </div>
        <div class="right-section">
            <form class="form" action="./register.php" method="POST">
                <h2 class="form-title">Let's Get to Know You</h2>
                <div class="form-content">
                    <div class="name form-section grid-span-2">
                        <h4>Full Name</h4>
                        <div class="name-fields">
                            <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="gender form-section">
                        <h4>Gender</h4>
                        <div class="gender-buttons">
                            <input type="radio" name="gender" id="male" value="male" checked>
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="student-id form-section">
                        <label for="student_id">Student No.</label>
                        <input type="text" name="student_id" id="student_id" placeholder="Student Number" required>
                    </div>
                    <div class="year-level form-section">
                        <label for="year_level">Year Level</label>
                        <select name="year_level" id="year" required>
                            <option value="" selected disabled>Select Year Level</option>
                            <?php
                            foreach ($yearLevel as $key => $year) {
                                $optionValue = $key + 1;
                                echo "<option value='$optionValue'>$year</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="degree form-section">
                        <label for="degree">Academic Program </label>
                        <select name="degree" id="degree" required>
                            <option value="" selected disabled>Select a Program</option>
                            <?php
                            foreach ($cicsDegreeProgam as $key => $program) {
                                $optionValue = $key;
                                echo "<option value='$optionValue'>$program</option>";
                            };
                            ?>
                        </select>
                    </div>
                    <div class="email form-section">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="dob form-section">
                        <h4>Birth Date</h4>
                        <div class="dob-select-section">
                            <select name="month" id="month" required>
                                <option value="" selected disabled>Month</option>
                                <?php
                                foreach ($months as $key => $month) {
                                    $optionValue = $key + 1;
                                    echo "<option value='$optionValue'>$month</option>";
                                }
                                ?>
                            </select>
                            <select name="day" id="day" required>
                                <option value="" selected disabled>Day</option>
                                <?php
                                for ($i = 1; $i <= 31; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                            <select name="year" id="year" required>
                                <option value="" selected disabled>Year</option>
                                <?php
                                    foreach($years as $year) {
                                        echo "<option value='$year'>$year</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="phone form-section grid-span-2">
                        <label for="phone">Mobile No.</label>
                        <input type="text" name="phone" id="phone" placeholder="Mobile Number" required>
                    </div>
                    <div class="address form-section grid-span-2">
                        <h4>Current Address</h4>
                        <div class="address-fields">
                            <input type="text" name="street" id="street" placeholder="Street Address" required>
                            <input type="text" name="city" id="city" placeholder="City or Locality" required>
                            <input type="text" name="state" id="state" placeholder="State, Region, or Province" required>
                            <input type="text" name="postal" id="postal" placeholder="Postal Code / ZIP Code" required>
                            <select name="country" id="country" required>
                                <option value="" selected disabled>Country</option>
                                <?php 
                                foreach($countries as $country) {
                                    echo "<option value='$country'>$country</option>";
                                }
                                ?>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="submit-button">
                    <input type="submit" value="Sign Up" name="submit">
                </div>
            </form>

        </div>
    </div>
<?php include("./templates/footer.php") ?>