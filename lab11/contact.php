<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"> 
	<title>Jack's PHP Include</title>
	<link rel="favicon" href="php.png">
	<link rel='stylesheet' href='css/lab11.css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
		<!--
			Author:			Jack Ramsey 
			Class:			CSCI 1710
			Date:			11/22/2015
			Assignment:		Lab 10 
			Purpose:		A little more PHP
		-->
</head>

<body>
	<div class="wrapper">
		<?php include 'header.php';?>
		<?php include 'nav.php';?>
		
		<section>
			<h1>Contact</h1>
			<form style="border: 1px solid black; padding:10px; width:400px; margin:0 auto;" action="lab11-process.php" method="get">
			  First name:&nbsp;&nbsp;
			  <input type="text" name="firstname" placeholder="First Name">
			  <br><br />
			  Last name:&nbsp;&nbsp;
			  <input type="text" name="lastname" placeholder="Last Name"><br /><br /><br />
			  Email:&nbsp;&nbsp;&nbsp;
			  <input type="email" name="email" placeholder="Email Address"><br /><br /><br />
			  Phone:&nbsp;&nbsp;&nbsp;
			  <input type="tel" name="phone" placeholder="Telephone"><br /><br /><br />
			  
			  Comments:<br />
			  <textarea name="comments" rows="10" cols="30" placeholder="Please add your comments"></textarea><br /><br />
			  <input type="submit" value="Submit">
			  <input type="reset" value="Reset">
			</form>
		</section>
		<?php include 'footer.php';?>
	</div>
	<?php include 'w3c.php';?>
</body>

</html>