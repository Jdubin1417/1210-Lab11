<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sample Form Processor</title>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<style type="text/css">
		<link rel="preconnect" href="https://fonts.googleapis.com"> 
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
		
		body {
			font-family: 'Raleway', sans-serif;
		}
		form {
			width: 600px;
			margin: 0 auto;
			background-color: white;
			padding: 5px;
			padding-top: 20px;
		}

		label, p {
			padding-left: 15px;
		}

		img.fixedPos {
			display: block;
			position: fixed;
			right: 150px;
			top: 50px;
			border: 3px white solid;
			box-shadow: 10px 10px 5px rgba(125,125,125,.8);
			
		}
		
		td {
			padding: 4px;
			vertical-align: top;
		}
			
		</style>
	</head>
	<body>
		<div class="wrapper">
		<section style="width:650px; margin:50px auto;">
				<h1>Got it!</h1>
				<hr />
				<p> 
					Thanks for your input, <?php if(isset($_GET['firstname'])){echo ($_GET['firstname']);} ?>!
				</p>
				<p>
					You entered:
				</p>
				<table style="width:600px; margin:0 auto; border:1px solid #00A;">
					<col style="width:75px;" />
					<col style="width: 325px;" />
					<tr>
						<td>First name: </td><td><span style="color:red;"><?php if(isset($_GET['firstname'])){echo ($_GET['firstname']);} ?></span></td>	
					</tr>
					<tr>
						<td>Last name: </td><td><span style="color:red;"><?php if(isset($_GET['lastname'])){echo $_GET['lastname'];} ?></span></td>
					</tr>
					<tr>
						<td>Email: </td><td><span style="color:red;"><?php if(isset($_GET['email'])){echo $_GET['email'];} ?> </span></td>
					</tr>
					<tr>
						<td>Telephone: </td><td><span style="color:red;"><?php if(isset($_GET['phone'])){echo $_GET['phone'];} ?> </span></td>
					</tr>
					<tr>
						<td>Comments:</td><td><span style="color:red;"><?php if(isset($_GET['comments'])){echo $_GET['comments'];} ?> </span></td>
					</tr>
					
				</table>				<br /><br /><br />				
				<p style="width: 150px; margin:0 auto;">
					<?php echo "<a style='text-decoration:none;' href='javascript:history.go(-1)'>&lArr; GO BACK</a>"; ?>	
				</p>
			 </form>
		</section>
	</body>
</html>