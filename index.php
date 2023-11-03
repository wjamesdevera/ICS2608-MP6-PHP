<?php
require("./data.php");
include("./templates/header.php");
?>
    <div class="section sign-up">
        <div class="left-section">
            <img src="./assets/undraw_learning_re_32qv.svg" alt="" class="sign-up-img">
        </div>
        <div class="right-section">
            <form class="form" action="./register.php" method="POST">
                <h2 class="form-title">Let's Get to Know You</h2>
                <div class="form-content">
                    <div class="name form-section">
                        <h4>Full Name</h4>
                        <input type="text" name="first_name" id="first_name" placeholder="First Name">
                        <span><p><?php echo $errors['first_name'] ?></p></span>
                        <input type="text" name="last_name" id="last_name" placeholder="Last Name">
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
                        <select name="month" id="month">
                            <option value="" selected disabled>Month</option>
                            <?php
                            foreach ($months as $key => $month) {
                                $optionValue = $key + 1;
                                echo "<option value='$optionValue'>$month</option>";
                            }
                            ?>
                        </select>
                        <select name="day" id="day">
                            <option value="" selected disabled>Day</option>
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
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
                        <input type="text" name="street" id="street"placeholder="Street Address">
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