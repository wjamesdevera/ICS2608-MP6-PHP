<?php 

?>

<form class="form" method="post" action="./registration.php">
    <div class="fullname">
        <label for="name">Name: </label>
        <input type="text" name="first_name" id="name" required autocomplete="off" placeholder="First Name">
        <input type="text" name="last_name" id="name" required autocomplete="off" placeholder="Last Name">
    </div>
    <div class="student ID">
        <input type="text" name="student_id" id="student_id" required placeholder="Student No.">
    </div>
    <div class="mail">
        <input type="email" required placeholder="Email">
    </div>
    <div class="phone">
        <input type="text" name="phone_number" id="phone" required placeholder="Phone Number">
    </div>
    <div class="password">
        <input type="password" name="password" id="password" required placeholder="Password">
        <input type="password" name="confirm_password" id="confirm_password" required placeholder="Confirm Password">
    </div>
    <div class="gender">
        <label for="gender">Gender:</label>
        <label>
            <input type="radio" name="gender" id="male" value="male"> Male
        </label>
        <label>
            <input type="radio" name="gender" id="female" value="female"> Female
        </label>
        <label>
            <input type="radio" name="gender" id="other" value="other"> Other
        </label>
    </div>
</form>