
<html>
<head>
	<title>LAUNDARY</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
	</script> 
</head>
	
<style type="text/css">
  .topnav {
overflow: hidden;
background-color: #333;
width: 18%;
align: right;
}
body{
  background-image: url("../m/se.jpg");
}
   

.topnav a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

.topnav a:hover {
background-color: #ddd;
color: black;
}

.active {
background-color: #4CAF50;
color: white;
}

.topnav .icon {
display: none;
}

@media screen and (max-width: 600px) {
.topnav a:not(:first-child) {display: none;}
.topnav a.icon {
float: right;
display: block;
}
}

@media screen and (max-width: 600px) {
.topnav.responsive {position: relative};}
.topnav.responsive .icon {
position: absolute;
right: 0;
top: 0;
}
.topnav.responsive a {
float: none;
display: block;
text-align: left;
}



table, th, td {
border: 1px solid black;
border-collapse: collapse;
}
th, td {
padding: 5px;
}
</style>

<body>
  <div class="topnav" id="myTopnav">
  <a href="../student/dashboard.php" class="active">Home</a>
            <a href="../student/facility.php">Back</a>
            \<a href="../student/about.php">About</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
	
		<h1 align="center"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LAUNDARY SERVICES</strong></h1>

	
	<img src="../photos/laundarry1.jpg" align="right" width="1200" height="600">
<div class="side">
<table><tr>
<td>
<img src="../photos/laundaryquotes.png" width="300" height="600">

</td></tr></table></div>

<h1 align="center">Why Us</h1>

<div class="flex-container">
  <div class="box"><img src="../photos/ioring.jpg"  id="pic" width="300"><br><h3><strong>IRONING</strong></h3>
<p>Your clothes are delivered at your doorstep with the perfect crease.We Make Lives Simpler by Giving You More Free Time </p></div>
  
<div class="box"><img src="../photos/bubbles.jpg" width="300"><h3><strong>WASHING</strong></h3>
<p>Our front loading machines consume 3 times less water than the conventional washing machines.We schedule pickup and drop as per your convenience.</p></div>

  
<div class="box"><img src="../photos/laundary.jpg" width="300" height="200"><h3><strong>CLEANING</strong></h3>
<p>We use products that revive your clothes and give a new feel to them.We collect your donated clothes and spread your love & care to the needy ones.</p>
</div>


	</div>	
</body>
</html>