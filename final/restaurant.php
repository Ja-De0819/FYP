<!doctype html>
<html lang="en">
<head>
<title>JavaJam Coffee House</title>
<meta charset="utf-8">
<link rel="stylesheet" href="page.css">
<link rel="stylesheet" href="menu.css">
</head>
<body> 
<div id="wrapper">


	<header>
		<a href="index.php" style="width:10%;">
			<img src="logo.png" width="60" height="62" alt="Logo" style="top: 50%;">
		</a>	

		<div class="right-section">
			<div class="search-bar">
				<input type="text" placeholder="Search">
				<button>Search</button>
			</div>
			<img src="user.png" width="60" height="62" alt="User">>
		</div>
	</header>
			<nav>
				<div class = "nav"><a href="index.php">Home</a></div>
				<div class = "nav"><a href="menu.html">Menu</a></div>
			</nav>
	<div class="secondrow">
		
		<?php
			// Connect to the database (you'll need to set your own database connection details)
			$db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

			// Check for database connection errors

			if ($db->connect_error) {
				die("Database connection failed: " . $db->connect_error);
			}

			if (isset($_GET['category'])) {
				$category = $_GET['category'];

				// Query the database to fetch the menu items for the selected restaurant
				$sql = "SELECT * FROM restaurant WHERE category = '$category'";
				$result = $db->query($sql);

				if ($result) {
				
					
					echo"";
					$db->close();
				} else {
					echo "123Error: " . $sql . "<br>" . $db->error;
				}
			}
		?>	
		
		<div class="offer-section py-4">
		<div class="container-menu position-relative">
			<img alt="#" src="<?php echo $category;?>.png" class="restaurant-pic">
			<div class="pt-3 text-white">
				<h2 class="fw-bold"><?php echo $category;?></h2>
			</div>
		</div>
		</div>
	
		
		<div class="container-menu position-relative">
			<div class="row">
				<div class="col-md-8 pt-3">
				<div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
					<div class="d-flex item-aligns-center">
					<p class="fw-bold h6 p-3 border-bottom mb-0 w-100">Restaurant</p>
					</div>
				<div class="row m-0">
					
					<div class="col-md-12 px-0 border-top">
					<div class="">
						<?php
							if ($result) { while ($row = $result->fetch_assoc()) {
								echo '<div class="d-flex gap-2 p-3 border-bottom gold-members">';
								echo '<div class="fw-bold text-danger non_veg">.</div>';
								echo '<div>';
								echo '<h6 class="mb-1"><p>' . $row['restaurant'] . '</p> </h6>';
								echo '</div>';		
								echo '<span class="ms-auto"><a href="#" class="btn btn-outline-secondary btn-sm">ADD</a></span>';
								echo '</div>';
							}}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
			


	

	
</div>	
<footer>
		<small><i>Copyright &copy;  2023 NTU Can</i></small> <br>
		<a href="mailto:Jadelu@Bohou.com">
			<em style="color:#573f29;"><u>Jadelu@Bohou.com</u></em></a>		

	</footer> 
</body>

</html>