<?php session_start(); ?>
<?php include('dbcon.php'); ?>

<?php

$link = mysqli_connect("localhost", "root", "", "academicsTracker2");

if($link === false)
{
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$connectDb = mysqli_select_db($link, 'academicsTracker2');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Not Successful</title>
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
                    <h2> User ID Not Found 😟 </h2>
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
                <div class="col-lg-4 course_box"><a href="SearchGuardian.php">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="card-title"></div>
                            <div class="card-text"></div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image"></div>
                            <div class="course_author_name"> Search Another Guardian<span></span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span></span></div>
                        </div>
                    </div></a>
                </div>

                <!-- Home -->
                <div class="col-lg-4 course_box"><a href="Guardian.html">
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

