<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/day7.css">
</head>
<body>

<div class="header">
  <div class="header-left">
    <img src="icons/logo.png" class="logo-img" >
    <h2 class="logo-title">Golden Bird Event Planner</h2>
  </div>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>

<center>
<div class="gal-head" style="padding-left:20px">
  <h1 >Gallery</h1>

  <script>
    for(var i = 1 ; i<=14 ; i++){
      document.write("<img src='imgs/"+i+"-min.jpg' class='gall'>");
    }
  </script>
</div>
</center>

<center>
<div class="form" id="contact">
  <h3 class="t-head">Contact us</h3>
  <form action="#">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="fullname" placeholder="Your full name...">
    <label for="femail">Eamil</label>
    <input type="email" id="femail" name="email" placeholder="Email address...">
    <label for="cmt">Comments</label>
    <textarea id="cmt" name="comments" placeholder="Write something..." style="height:170px"></textarea>
    <input type="submit" value="Submit">
  </form>
</div>
</center>


<footer>
  <h1></h1>
</footer>


</body>
</html>