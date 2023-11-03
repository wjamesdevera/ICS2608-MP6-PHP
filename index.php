<?php
require("./data.php");
include("./templates/header.php");
?>
    <div class="section sign-up">
        <div class="left-section">
            <img src="./assets/undraw_sign_up_n6im.svg" alt="" class="sign-up-img">
        </div>
        <div class="">
            <form class="form" action="./register.php" method="POST">
                <h2 class="form-title">Student Registration Form</h2>
                <div class="form-content">
                    <div class="name form-section">
                        <input type="text" name="first_name" id="first_name" placeholder="First Name">
                        <span><p><?php echo $errors['first_name'] ?></p></span>
                        <input type="text" name="last_name" id="last_name" placeholder="Last Name">
                    </div>
                    <div class="gender form-section">
                        <h2>Gender</h2>
                        <label>
                            <input type="radio" name="gender" id="male" value="male"> Male
                        </label>
                        <label>
                            <input type="radio" name="gender" id="male" value="male"> Female
                        </label>
                    </div>
                    <div class="student-id form-section">
                        <input type="text" name="student_id" id="student_id" placeholder="Student Number">
                    </div>
                    <div class="year-level form-section">
                        <select name="year_level" id="year">
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
                        <select name="degree" id="degree">
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
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="dob form-section">
                        <select name="day" id="day">
                            <option value="" selected disabled>Day</option>
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <select name="month" id="month">
                            <option value="" selected disabled>Month</option>
                            <?php
                            foreach ($months as $key => $month) {
                                $optionValue = $key + 1;
                                echo "<option value='$optionValue'>$month</option>";
                            }
                            ?>
                        </select>
                        <select name="year" id="year">
                            <option value="" selected disabled>Year</option>
                            <?php
                                foreach($years as $year) {
                                    echo "<option value='$year'>$year</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="phone form-section">
                        <input type="text" name="phone" id="phone" placeholder="Mobile Number">
                    </div>
                    <div class="address form-section">
                        <input name="street" id="street"placeholder="Street Address">
                        <input type="text" name="city" id="city" placeholder="City or Locality">
                        <input type="text" name="state" id="state" placeholder="State, Region, or Province">
                        <input type="text" name="postal" id="postal" placeholder="Postal Code / ZIP Code">
                        <select name="country" id="country">
                            <option value="" selected disabled>Country</option>
                            <?php 
                            foreach($countries as $country) {
                                echo "<option value='$country'>$country</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="">
                    <input type="submit" value="Sign Up" name="submit">
                </div>
            </form>

        </div>
    </div>
<?php include("./templates/footer.php") ?>