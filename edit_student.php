<?php 
	include_once "./partials/header.php";
?>
</head>
<body>
	<h1>Wanbol U - Edit Student</h1>
	
	<div id ="editstudentApp">
		<form action="./controllers/edit_student.php" method="POST">
			<?php  
			$firstname = $_GET['firstname'];
			$lastname = $_GET['lastname'];
			$dob = $_GET['dob'];
			?>
			
			<input type="hidden" name="id" value = "<?php echo $_GET['id'] ?>">

			<h3><?php echo $firstname ?></h3>
			<input type="text" name="firstname" placeholder = "First Name" required>
			
			<h3><?php echo $lastname ?></h3>
			<input type="text" name="lastname" placeholder = "Last Name" required>

			<h3><?php echo $dob ?></h3>
			<input type="date" name="dob" min = "1970-01-01" max = "2018-12-12" required>

			<button type="submit">SUBMIT</button>
		</form>
	</div>
	<script src="./assets/js/submit_css_button.js"></script>
<?php 
	include_once "./partials/footer.php"
?>