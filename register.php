<?php 
    include("./student.php");
    include("./data.php");
    $student;
    $first_name = $last_name = '';
    if(isset($_POST['submit'])) {
        if(empty($_POST['first_name'])) {
            $errors['first_name'] = "Please fill in the text field before submitting the form.";
            header("Location: index.php");
            exit();
        } else {
            $first_name = sanitizeInput($_POST['first_name']);
        }

        if(empty($_POST['last_name'])) {
            $errors['last_name'] = "Please fill in the text field before submitting the form.";
            header("Location: index.php");
            exit();
        } else {
            $last_name = sanitizeInput($_POST['last_name']);
        }

        if(!empty($first_name) && !empty($last_name)) {
            $student = new Student($_POST['first_name'], $_POST['last_name']);
        }

        if(empty($_POST['gender'])) {
            $errors['gender'] = "Please fill in the text field before submitting the form.";
            header("Location: index.php");
            exit();
        } else {
            $student->setGender(sanitizeInput($_POST['gender']));
        }

        if(empty($_POST['student_id'])) {
            $errors['student_id'] = "Please fill in the text field before submitting the form.";
            header("Location: index.php");
            exit();
        } else {
            $student->setStudentID(sanitizeInput($_POST['student_id']));
        }

        if(empty($_POST['year_level'])) {
            $errors['year_level'] = "Please fill in the text field before submitting the form.";
            header("Location: index.php");
            exit();
        } else {
            $student->setYearLevel(sanitizeInput($_POST['year_level']));
        }

        if(empty($_POST['degree'])) {
            $errors['degree'] = "Please fill in the text field before submitting the form.";
            header("Location: index.php");
            exit();
        } else {
            $student->setDegree(sanitizeInput($_POST['degree']));
        }

        if(empty($_POST['email'])) {
            $errors['email'] = "Please fill in the text field before submitting the form.";
            header("Location: index.php");
            exit();
        } else {
            $student->setEmail(sanitizeInput($_POST['email']));
        }

        if(empty($_POST['year']) || empty($_POST['month']) || empty($_POST['day'])) {
            $errors['dob'] = "Please fill in the text field before submitting the form.";
            header("Location: index.php");
            exit();
        } else {
            $student->setBirthDate(sanitizeInput($_POST['year']), sanitizeInput($_POST['month']), sanitizeInput($_POST['day']));
        }

        if(empty($_POST['phone'])) {
            $errors['phone'] = "Please fill in the text field before submitting the form.";
            header("Location: index.php");
            exit();
        } else {
            $student->setPhone(sanitizeInput($_POST['phone']));
        }

        if(empty($_POST['street']) || empty($_POST['city']) || empty($_POST['state']) || empty($_POST['postal'] || empty($_POST['country']))) {
            $errors['address'] = "Please fill in the text field before submitting the form.";
            header("Location: index.php");
            exit();
        } else {
            $student->setAddress(sanitizeInput($_POST['street']), sanitizeInput($_POST['city']), sanitizeInput($_POST['state']), sanitizeInput($_POST['postal']), sanitizeInput($_POST['country']));
        }
    } else {
        $student = '';
    }

    function sanitizeInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    include("./templates/header.php");
?>
<div class="main-section">
    <div class="info-card">
        <h1>Account Information</h1>
        <div class="info-section">
            <h3>Full Name: </h3>
            <div class="info-field">
                <?php echo ucwords($student->getFirstName()) . " " . ucwords($student->getLastName()); ?>
            </div>
        </div>
        <div class="info-section">
            <h3>Gender: </h3>
            <div class="">
                <?php echo ucwords($student->getGender()); ?>
            </div>
        </div>
        <div class="info-section">
            <h3>Student No: </h3>
            <div class="">
                <?php echo strtoupper($student->getStudentID()); ?>
            </div>
        </div>
        <div class="info-section">
            <h3>Year Level: </h3>
            <div class="">
                <?php echo ucwords($student->getYearLevel()); ?>
            </div>
        </div>
        <div class="info-section">
            <h3>Academic Program: </h3>
            <div class="">
                <?php echo ucwords($student->getDegree()); ?>
            </div>
        </div>
        <div class="info-section">
            <h3>Email Address: </h3>
            <div class="">
                <?php echo $student->getEmail(); ?>
            </div>
        </div>
        <div class="info-section">
            <h3>Birth Date: </h3>
            <div class="">
                <?php echo $student->getBirthDate(); ?>
            </div>
        </div>
        <div class="info-section">
            <h3>Mobile No: </h3>
            <div class="">
                <?php echo $student->getPhone(); ?>
            </div>
        </div>
        <div class="info-section">
            <h3>Current Address: </h3>
            <div class="">
                <?php echo ucwords($student->getAddress()); ?>
            </div>
        </div>

        </div>
</div>
<?php include("./templates/footer.php") ?>
