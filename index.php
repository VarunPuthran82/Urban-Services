<?php 
session_start();
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="shortcut icon" href="./images/png/logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Urban Services - Home</title>
</head>
<body>

    <header>
        <div class="toggleBtn">
            <img class="menu" src="./images/svg/burger-menu-left.svg" width="40px" height="40px">
        </div>
        <div class="logo-wrapper">
            <img src="./images/png/logo.jpeg" class="logo" />
            <!-- <div class="title">Urban Services</div> -->
        </div>
        <ul class="nav-items">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="./registerservice.php">Register a service</a></li>
        </ul>
        <div class="nav-buttons">
        <?php if (isset($_SESSION['user_id'])) { ?>
                
				<a style="margin:8px 12px;text-align:center;display:block;font-weight:600;font-size:1.25rem;color:#D80032;"><?php echo $_SESSION['user_name']; ?></a>
				<a style="margin:8px 6px;font-weight:500;font-size:1.2rem;color:gold;">Profile</a>
                <a style="margin:8px 6px;font-weight:500;font-size:1.2rem;color:gold;">Settings</a>
                <a href="./logout.php"class="loginBtn">Log Out</a>
				<?php } else { ?>
                    <a href="./login.php" class="loginBtn">Login</a>
                    <a href="./signup.php" class="signupBtn">Register</a>				
		        <?php } ?>

        </div>
    </header>

    <!--Redirect to customer home page-->
    <?php if(isset($_SESSION['customerID'])!="") {
	        header("Location: customer/index.php");
        }
        ?>
    <!--Redirect to serviceprovider home page-->

    <?php if(isset($_SESSION['serviceProviderID'])!="") {
	        header("Location: serviceprovider/index.php");
        }
        ?>
                
    

    <div class="hero-container">
        <div class="hero-text">
            <h2 class="hero-title" data-aos="fade-right" data-aos-duration="1000"
    data-aos-easing="ease-in-out">Hire Experts & Get Your Job Done</h2>
            <p class="hero-info">
                
            </p>
        </div>
        <div class="hero-image">
            <img src="./images/png/man.png" alt="hero image" data-aos="fade-left" data-aos-duration="1000"
    data-aos-easing="ease-in-out">
        </div>
    </div>

    <script src="./scripts/script.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>