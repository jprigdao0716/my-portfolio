<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
    rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
    <script src="jquery-input-mask-phone-number.js"></script>
</head>
<body>

	<style>

.navbar-collapse{
	margin-left: -10rem;
}

.navbar-collapse li{
	margin-left: -10rem;

}

.navbar{
	background-color: #333;
}

nav .navbar-toggler{
	margin-left: 23rem;
}

.navbar-collapse li :hover{
   text-decoration: underline;
  -webkit-text-decoration-color: red; /* Safari */  
   text-decoration-thickness: 30%;
   text-decoration-color: whitesmoke;
}

.holder .fa{
	position: absolute;
	margin-left: -30rem;
	top: 2rem;
}

.rowcount{
	color: red;
	font-weight: bold;
	font-size: 20px;
	position: absolute;
	margin-left: -28rem;
	top: -1rem;
}

.holder .disabled{
	display: none;
}

div h3, h5{

	margin-left: 10px;
	color: white;
}

.img8{
	position: absolute;
	margin-top: 0rem;
}


@media screen and (max-width: 600px) {
	
	.avatar{
		margin-top: -1rem;
		width: 170px;
		height: 150px;
	}

		.navbar-collapse li :hover{
		 color: red;
		}
		

	
	.rowcount{
		
		color: red;
		font-weight: bold;
		font-size: 20px;
		position: absolute;
		left: 29rem;
		top: 8rem;

}

.holder .fa{
	position: absolute;
	margin-left: 24rem;
	top: 14rem;
}

.holder{
	display: none;
}

nav h3{
	margin-left: 8rem;
}

.titleholder{

	margin-left: -6rem;
	position: relative;
	color: white;
}

.titleholder h3{
	margin-left: 13rem;
	position: relative;
	color: white
}

.titleholder h5{
	font-size: 18px;
}


nav .menu-btn{
		margin-top: 1rem;
        margin-left: -10rem;
    }


.img8{
	position: absolute;
	margin-left: 4rem;
	margin-top: -1rem;
}

.navbar-toggler-icon{
	transition: 0.8s ease;
	transform: translate(-50%,-50%);
}

.menu-btn {
        position: absolute;
        z-index: 3;
        right: 35px;
        top: 35px;
        cursor: pointer;
        transition: all 0.8s ease-out;
    }
 
    /* Styling the hamburger lines */
    .menu-btn .btn-line {
        width: 28px;
        height: 3px;
        margin: 0 0 5px 0;
        background: black;
        transition: all 0.8s ease-out;
    }
 
    /* Adding transform to the X */
    .menu-btn.close {
        transform: rotate(180deg);
    }
 
    /* Styling the three lines 
        to make it an X */
    .menu-btn.close .btn-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }
 
    .menu-btn.close .btn-line:nth-child(2) {
        opacity: 0;
    }
 
    .menu-btn.close .btn-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }

	    /* Styling the position of the menu icon */
		nav {
        position: fixed;
        top: 0;
        width: 100%;
        opacity: 0.9;
        visibility: hidden;
    }
 
    nav {
        visibility: visible;
    }

    .navbar-collapse li{
        padding-top: 15px;
        transition: 0.8s ease;

    }

}

</style>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-black">
<div class="titleholder">
<img src="includes/Lightbearer Logo 3.png" class="img8" style="width: 130px">
	<h3>John Paul Rigdao</h3>
  <h5>Full Stack Developer|Multimedia Artist</h5></div>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  </button> -->

  <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
  </div>

  <!-- <span class="navbar-toggler-icon"></span> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="#home">Services</a></li>
                <li class="nav-item"><a href="#about">Portfolio</a></li>
                <li class="nav-item"><a href="#contact">Contact</a></li>
            </ul>


         </div>
  </div>
</nav>
        </nav>

    <section id="aboutme" style="background-color: #24262b;">
        <div class="container">
        <center>
            <h1 class="about"style="color: white">About Me</h1>
        </center>
            <a href="index.php"><img src="includes/jprigdao.jpg" class="avatar"></a><br><br><br>
            <p class="caption"><b>I am John Paul D. Rigdao</b></p><br> 
            <p class="caption2">Full Stack Developer & Multimedia Artist from Lubao, Pampanga.<br>
               I am a graduate of Bachelor of Science in Computer Science at Guagua National Colleges.<br>
               I am also a Guitarist, Song Writer, & Web Novel Author.<br><br> I believe everyone has the right to put together their own formula that makes them feel great. <br>All these values and faiths we have are supposed to be put together like a computer, so we can run efficiently and be happy. The bottom line is, "Life is a Game to be Enjoyed."</p>
  
        </div>
    </section>


    <section id="home" style="background-color: gainsboro; opacity: 80%">
        <div class="container">
        <center>
        <h1 style="color: white">Services</h1>
            <img src="includes/LB Systems.jpg" class="img1">
</center>
        </div>
    </section>
    
    <section id="about" style="background-color: #24262b;">
        <!-- <h1>Portfolio</h1> -->
        <div class="container">
    <h1 class="text-center mt-5 mb-4" style="color: white">Projects</h1>

    <div class="row">
      <div class="col-sm-4">
        <div class="testimonial">
        <div class="middle">
        <div class="text">With MySQL Database </div>
        </div>
        <h2>E-Commerce Music Store</h2>
        <img src="includes/LB Store.jpg" class="img2" style="width: 270px">
        </div>
      </div>
   
      <div class="col-sm-4">
        <div class="testimonial">
        <div class="middle">
        <div class="text">Website for Pianists</div>
        </div>
        <h2>Pianote</h2>  
        <img src="includes/sample3.jpg" class="img3" style="width: 270px">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="testimonial">
        <div class="middle">
        <div class="text">With Modal Popup</div>
        </div>
        <h2>Student Record System</h2>  
        <img src="includes/STRS.jpg" class="img4" style="width: 270px">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="testimonial">
        <div class="middle">
        <div class="text">Modeled in 3DS MAX & Blender</div>
        </div>
        <h2>3D Projects</h2>  
        <img src="includes/Copy of LBP Web Page(2).png" class="img5" style="width: 270px">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="testimonial">
        <div class="middle">
        <div class="text">With Side Bar Menu</div>
        </div>
        <h2>Landing Page</h2>  
        <img src="includes/Copy of Lightbearer SS.png" class="img6" style="width: 270px">
        </div>
        </div>
    <div class="col-sm-4">
        <div class="testimonial">
        <div class="middle">
        <div class="text">Front End Selling Site</div>
        </div>
        <h2>E-Commerce Website</h2>  
        <img src="includes/SSTask5.png" class="img7" style="width: 150px">
        </div>
  </div>
  
    </section>
    
    <!-- <section id="contact">
    <h1> Contact </h1>
    </section> -->
    
    <script src="script.js"></script>
<section id="home" style="background-color: gainsboro; opacity: 80%">
    <section id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <form id="contact-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>

    </section>
 </section>


    <footer>
    <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Legal Info</h4>
  	 			<ul>
  	 				<li><a href="#">Policy</a></li>
  	 				<li><a href="#">Refund And Return Policy</a></li>
  	 				<li><a href="#">Terms And Conditions</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Contact Us</h4>
  	 			<ul>
  	 				<li><a href="#">Lightbearer</a></li>
  	 				<li><a href="#">Address: 209 Sto. Tomas, Crossing<br>Lubao, Pampanga 2005</a></li>
  	 				<li><a href="#">Contact Numbers: (045)-966-1200</a></li>
                    <li><a href="#">+63928-536-2837</a></li>
  	 				<li><a href="#">lightbearer.home.blog</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>We Accept:</h4>
  	 			<ul>
  	 				<li><img src="includes/gcash.png" class="card-img img-fluid" style="width: 100%;
                 max-width: 314px;"></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 			</ul>
  	 		</div>
			<div class="container" id="follow">
			<center>
  	 		<div class="footer-col">			
  	 			<!-- <h5>Follow us</h5> -->
  	 			<div class="social-links">
  	 				<a href="#"><i class="fa fa-facebook"></i></a>
  	 				<a href="#"><i class="fa fa-twitter"></i></a>
  	 				<a href="#"><i class="fa fa-instagram"></i></a>
  	 				<a href="#"><i class="fa fa-linkedin"></i></a>
					
  	 			</div>
  	 		</div>
			</div>
  	 	</div>
  	 </div>
       </center>
        <div class="container">
            <p>&copy; 2024 My Portfolio. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
    
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAEcSva9GUQ1soSyVKNLIGQkgVajNgpJvA",
    authDomain: "my-portfolio-16-8853f.firebaseapp.com",
    projectId: "my-portfolio-16-8853f",
    storageBucket: "my-portfolio-16-8853f.appspot.com",
    messagingSenderId: "130822406962",
    appId: "1:130822406962:web:73f77139e2d4581a83cd2b",
    measurementId: "G-9QP9BX30E7"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
</body>
</html>
