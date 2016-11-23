<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />

<link rel="stylesheet" href="style.css">
</head>
<body  align="center">
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 2px;
    cursor: pointer;
	
}
h1{
color:#53A37B;
text-align:center;
font-size:50px;
}
</style>
<nav>
	<ul>
		<li><a href="home1.html">Home</a></li>
		<li><a href="#">Tutorials</a>
			<ul>
				<li><a href="JavaHome.html">Java</a></li>
				<li><a href="CHome.html">C</a></li>
				<li><a href="#">Python</a>
					
				</li>
			</ul>
		</li>
		<li><a href="ContactUs.html">Contact</a></li>
			
		
		<li><a href="index.php">Member Login</a>
		
</nav>

 <br>
 <br>
 <br>
 <br>
<h1>CODEFREAK </h1><br>
  
        
      
         <h1><span class="glyphicon glyphicon-user"></span>&nbsp;Hi <?php echo $userRow['userName']; ?>&nbsp;<span class="caret"></span></h1><br>
        <h2 style="color:#53A37B">Welcome! Begin your journey to becoming a successful programmer! </h2><br>
		<p style="color:#53A37B">To begin learning, click on TUTORIALS on the top of this page.</p><br>

 
              
   
              
                <a href="logout.php?logout"><button class="button">&nbsp;Sign Out</button></a>
              
     
        
     
    
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>