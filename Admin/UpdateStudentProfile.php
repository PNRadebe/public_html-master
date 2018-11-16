<?php session_start(); ?>
<?php include('dbcon.php'); ?>

<?php

$link = mysqli_connect("localhost", "root", "", "academicsTracker2");

if(isset($_POST["student_id"]))
{
	$id = $_POST['student_id'];
}

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$connectDb = mysqli_select_db($link, 'academicsTracker2');

function test_input($data) //cleans user input
{
  $data = trim($data); //eliminates unnecessary whitespaces in a string
  $data = stripslashes($data); //eliminates backslashes
  $data = htmlspecialchars($data); //converts special characters to html entities
  return $data; //returns clean data
}

$query = $link->query("SELECT * FROM student WHERE student_id=$id");

//code below allows clean data to be saved
if(isset($_POST['Save']))
	{
		$student_first_name = test_input($_POST['student_first_name']);
		$student_middle_name = test_input($_POST['student_middle_name']);
		$student_last_name = test_input($_POST['student_last_name']);
		$gender = test_input($_POST['gender']);
		$ethnicity = test_input($_POST['ethnicity']);
		$date_of_birth = test_input($_POST['date_of_birth']);
		$contact_number = test_input($_POST['contact_number']);
		$house_number = test_input($_POST['house_number']);
		$street_name = test_input($_POST['street_name']);
		$suburb = test_input($_POST['suburb']);
		//$school_code = $_POST['school_code'];
		$post_code = test_input($_POST['post_code']);
		$password = $_POST['password'];
		$cPassword = $_POST['cPassword'];
		$user_type = test_input($_POST['user_type']);
		$id = test_input($_POST['student_id']);

		if ($password != $cPassword)
		{
			echo "Please Check Your Passwords!";
		}
		else
		{
			$password = md5($password); //Password Encrypted
			$sql = "UPDATE student SET student_first_name='$student_first_name', student_middle_name='$student_middle_name', student_last_name='$student_last_name', gender='$gender', ethnicity='$ethnicity', contact_number='$contact_number', house_number='$house_number', street_name='$street_name', suburb='$suburb', post_code='$post_code', user_type='$user_type', date_of_birth='$date_of_birth', password='$password' WHERE student_id=$id";
		    //$result = mysqli_query($link, $sql);
		}

		if(mysqli_query($link, $sql))
		{
			echo "";

		}
		else
		{
			echo "ERROR: Could Not Able To Execute" . mysqli_error($link);
		}

	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Successful</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/buttons.css">
<link rel="stylesheet" type="text/css" href="styles/menuDropDown.css">
</head>
<body>
<div class="super_container">

    <!-- Home -->
    <div class="home">
            <div class="home_background_container prlx_parent">
                    <div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
            </div>
            <div class="home_content">
                    <h1> ?? Successful</h1>
            </div>
    </div>

    <!-- Popular -->
    <div class="popular page_section">
        <!-- success -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="row course_boxes">
                <!-- Search -->
                <div class="col-lg-4 course_box"><a href="SearchStudent.php">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="card-title"></div>
                            <div class="card-text"></div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image"></div>
                            <div class="course_author_name"> Search Another Student<span></span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span></span></div>
                        </div>
                    </div></a>
                </div>

                <!-- Home -->
                <div class="col-lg-4 course_box"><a href="Student.html">
                        <div class="card">
                                <div class="card-body text-center">
                                    <div class="card-title"></div>
                                    <div class="card-text"></div>
                                </div>
                                <div class="price_box d-flex flex-row align-items-center">
                                    <div class="course_author_image"></div>
                                    <div class="course_author_name"> Dashboard <span></span></div>
                                    <div class="course_price d-flex flex-column align-items-center justify-content-center"><span></span></div>
                                </div>
                        </div></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>
<script src="js/dropDown.js"></script>

</body>
</html>


<?php
// Close connection
mysqli_close($link);
?>
