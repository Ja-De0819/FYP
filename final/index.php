<html lang="en">
<head>
<title>JavaJam Coffee House</title>
<meta charset="utf-8">
<link rel="stylesheet" href="page.css">
</head>
<style>

.name-container {
    width: 100%;
    margin: 0 auto;
    background-image:url(img/name-bar.png);
    overflow: hidden;
    background-size: cover; /* Adjusts the image size to cover the entire body */
    background-repeat: no-repeat; /* Prevents image repetition */
    background-attachment: fixed;

}
.slider-container {
    width:70%;
    margin: 10 auto;
    overflow: hidden;
    position: relative;
}

.slider {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide {
    flex: 0 0 9%; /* Display 4 images at a time */
    padding: 3%; /* Add padding for spacing between images */
    margin: 2.5%;
    border-radius: 50%; /* Apply border-radius for rounded corners */
    background-color: #fff; /* Set a background color for each slide */
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3); 

}

.slide img {
    width:100%;
    height: 70%;
    border-radius: 10px; /* Apply border-radius for rounded corners to images */
}
.slide p {
    text-align:center;
}
.slider-container1 {
    width: 100%;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
}

.slider1 {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide1 {
    flex: 0 0 23%; /* Display 4 images at a time */
    padding: 0%; /* Add padding for spacing between images */
    margin: 1%;
    border-radius: 10px; /* Apply border-radius for rounded corners */
    background-color: #fff; /* Set a background color for each slide */
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3); 
}

.slide1 img {
    width:100%;
    height: 90%;
    border-radius: 10px; /* Apply border-radius for rounded corners to images */
}

.prev-button, .next-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.2);
    color: #fff;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
}

.next-button {
    right: 0;
}

</style>	
<body> 
<div id="wrapper">


	<header>
        
		<a href="index.php" style="width:20%;">
			<img src="img/logo.png" width="60" height="62" alt="Logo" style="top: 50%;">
		</a>	
        <p style="text-align:center; font-family:Lobster, cursive; font-size: 60px; font-weight: bold; color:#af3618">NTU Can</p>
		<div class="right-section" >
        
            <div  >
                <?php
                session_start();

                if (isset($_SESSION['username'])) {
                    // User is logged in
                    echo '<p style="display: inline-block; font-size:20px; align-text:center">Welcome, ' . $_SESSION['username'] . '</p>';
                    echo '<button style="display:inline-block; border:0px; background-color:transparent " onclick="showLogoutAlert()">logout</button>';
                } else {
                    // User is not logged in
                    echo '<p style="display: inline-block; font-size:20px; float: right;"><a href="login.html">Login</a></p>';
                }
                ?>
            
            </div>
            <a href="profile.html" >
			    <img src="img/user.png" width="60" height="62" alt="User"  >
               
            </a>
            
		</div>
        
	</header>

    <br><div style="text-align:center;" ><p style="text-align:center; font-family:Lobster, cursive; font-size: 36px; font-weight: bold;">Category</p><br>  </div>

    <div class="slider-container">
		
        <div class="slider">
            <?php
                if (isset($_SESSION['username'])) {
                    // User is logged in
                    echo '<div class="slide">';
                    echo '<a href="restaurant.php?category=Chinese"><img src="img/Chinese.png" alt="Image 1" ></a><p>Chinese</p>';
                    echo '</div>';
                    echo '<div class="slide">';
                    echo '<a href="restaurant.php?category=Japanese"><img src="img/Japanese.png" alt="Image 2" ></a><p>Japanese</p>';
                    echo '</div>';
                    echo '<div class="slide">';
                    echo '<a href="restaurant.php?category=Western"><img src="img/Western.png" alt="Image 3" ></a><p>Western</p>';
                    echo '</div>';
                    echo '<div class="slide">';
                    echo '<a href="restaurant.php?category=Local"><img src="img/Local.png" alt="Image 4" ></a><p>Local</p>';
                    echo '</div>';
                    echo '<div class="slide">';
                    echo '<a href="restaurant.php?category=Korean"><img src="img/Korean.png" alt="Image 5" ></a><p>Korean</p>';
                    echo '</div>';
                    echo '<div class="slide">';
                    echo '<a href="restaurant.php?category=Chinese"><img src="img/Chinese.png" alt="Image 6" ></a><p>Chinese</p>';
                    echo '</div>';
                } else {
                    echo '<div class="slide">';
                    echo '<a href="login.html"><img src="img/Chinese.png" alt="Image 1" ></a><p>Chinese</p>';
                    echo '</div>';
                    echo '<div class="slide">';
                    echo '<a href="login.html"><img src="img/Japanese.png" alt="Image 2" ></a><p>Japanese</p>';
                    echo '</div>';
                    echo '<div class="slide">';
                    echo '<a href="login.html"><img src="img/Western.png" alt="Image 3" ></a><p>Western</p>';
                    echo '</div>';
                    echo '<div class="slide">';
                    echo '<a href="login.html"><img src="img/Local.png" alt="Image 4" ></a><p>Local</p>';
                    echo '</div>';
                    echo '<div class="slide">';
                    echo '<a href="login.html"><img src="img/Korean.png" alt="Image 5" ></a><p>Korean</p>';
                    echo '</div>';
                    echo '<div class="slide">';
                    echo '<a href="login.html"><img src="img/Japanese.png" alt="Image 6" ></a><p>Japanese</p>';
                    echo '</div>';
                }
            ?>
          
        </div>
        <button class="prev-button" onclick="changeSlide(-1)"><</button>
        <button class="next-button" onclick="changeSlide(1)">></button>
    </div> 
    <script src="slider.js"></script>

	<div class="slider-container1">
		
        <div class="slider1">
            <?php
                if (isset($_SESSION['username'])) {
                    // User is logged in
                    echo '<div class="slide1">';
                    echo '<a href="order1.html"><img src="img/Sichuan Dishes.png" alt="Image 1" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                    echo '<div class="slide1">';
                    echo '<a href="order2.html"><img src="img/Pizza Shop.png" alt="Image 2" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                    echo '<div class="slide1">';
                    echo '<a href="order3.html"><img src="img/Xian Mian.png" alt="Image 3" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                    echo '<div class="slide1">';
                    echo '<a href="order4.html"><img src="img/Sushi Go.png" alt="Image 4" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                    echo '<div class="slide1">';
                    echo '<a href="order5.html"><img src="img/Steak House.png" alt="Image 5" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                    echo '<div class="slide1">';
                    echo '<a href="order6.html"><img src="img/Chicken Rice.png" alt="Image 6" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                } else {
                    echo '<div class="slide1">';
                    echo '<a href="login.html"><img src="img/Sichuan Dishes.png" alt="Image 1" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                    echo '<div class="slide1">';
                    echo '<a href="login.html"><img src="img/Pizza Shop.png" alt="Image 2" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                    echo '<div class="slide1">';
                    echo '<a href="login.html"><img src="img/Xian Mian.png" alt="Image 3" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                    echo '<div class="slide1">';
                    echo '<a href="login.html"><img src="img/Sushi Go.png" alt="Image 4" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                    echo '<div class="slide1">';
                    echo '<a href="login.html"><img src="img/Steak House.png" alt="Image 5" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                    echo '<div class="slide1">';
                    echo '<a href="login.html"><img src="img/Chicken Rice.png" alt="Image 6" ></a><p>Text for Image 1</p>';
                    echo '</div>';
                }
            ?>
          
        </div>
        <button class="prev-button" onclick="changeSlide1(-1)"><</button>
        <button class="next-button" onclick="changeSlide1(1)">></button>
    </div>
    <script src="slider1.js"></script>

    <script>
        function showLogoutAlert() {
            var confirmLogout = confirm("Do you want to log out?");
            if (confirmLogout) {
                // Redirect to the logout script or perform any other logout actions
                window.location.href = 'logout.php';
            }
        }
    </script>

	<div class="secondrow">

		<p>54321 NANYANG<br>NTU<br>888-555-8888</p><br><br><br><br><br>
		<a href="menu.html">Menu</a>
		
			
	</div>
		


	<footer>
		<small><i>Copyright &copy;  2023 NTU Can</i></small> <br>
		<a href="mailto:Jadelu@Bohou.com">
			<em style="color:#573f29;"><u>Jadelu@Bohou.com</u></em></a>		

	</footer> 

	
</div>	
</body>

</html>