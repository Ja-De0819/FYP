<!doctype html>
<html lang="en">
<head>
<title>JavaJam Coffee House</title>
<meta charset="utf-8">
<link rel="stylesheet" href="page.css">
<link rel="stylesheet" href="menu.css">
<script src="menu.js" type = "text/javascript"></script>
</head>
<body> 
<div id="wrapper">


	<header>
		<a href="index.php" style="width:20%;">
			<img src="img/logo.png" width="60" height="62" alt="Logo" style="top: 50%;">
		</a>
		<div class="right-section">
			<div class="search-bar">
				<input type="text" placeholder="Search">
				<button>Search</button>
			</div>
			<img src="img/user.png" width="60" height="62" alt="User">
		</div>
	</header>
			<nav>
				<div class = "nav"><a href="index.php">Home</a></div>
				<div class = "nav"><a href="menu.html">Menu</a></div>
			</nav>
	<div class="secondrow">

	<?php

			$db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');


			if ($db->connect_error) {
				die("Database connection failed: " . $db->connect_error);
			}

			if (isset($_GET['restaurant'])) {
				$restaurant = $_GET['restaurant'];

				$sql = "SELECT * FROM menu WHERE restaurant = '$restaurant'";
				$result = $db->query($sql);

				if ($result) {
				
					
					echo"";
					$db->close();
				} else {
					echo "123Error: " . $sql . "<br>" . $db->error;
				}
			}
		?>	
			
		<div class="offer-section py-4" id="content-to-replace1">
		<div class="container-menu position-relative">
			<img alt="#" src="img/<?php echo $restaurant;?>.png" class="restaurant-pic">
			<div class="pt-3 text-white">
			<h2 class="fw-bold"><?php echo $restaurant;?></h2>
			</div>
		<div class="pb-4 pt-3">
			<div class="row">
				<div class="col-6 col-md-2">
				<p class="text-white-50 fw-bold m-0 small">Delivery</p>
				<p class="text-white m-0">Free</p>
				</div>
				<div class="col-6 col-md-2">
				<p class="text-white-50 fw-bold m-0 small">Open time</p>
				<p class="text-white m-0">8:00 AM</p>
				</div>
			</div>
		</div>
		</div>
		</div>
		
		<div class="container-menu position-relative">
			<div class="row">
	
				<div class="col-md-8"  id="replacement-content" style="display: none;">
		<div>
		<div class="osahan-cart-item mb-3 rounded shadow-sm bg-white overflow-hidden">
		<div class="osahan-cart-item-profile bg-white p-3">
		<div class="d-flex flex-column">
		<h6 class="mb-3 fw-bold">Delivery Address</h6>
		<div class="row g-4 mb-3">
		<div class="col-lg-6">
		<div class="form-check position-relative border-custom-radio p-0">
		<input type="radio" id="customRadioInline1" name="customRadioInline1" class="form-check-input" checked="">
		<label class="form-check-label w-100 border rounded" for="customRadioInline1"></label>
		<div>
		<div class="p-3 bg-white rounded rounded-bottom-0 shadow-sm w-100">
		<div class="d-flex align-items-center mb-2">
		<h6 class="mb-0">Home</h6>
		</div>
		<p class="small text-muted m-0">1001 Veterans Blvd</p>
		<p class="small text-muted m-0">Redwood City, CA 94063</p>
		</div>
		<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-light border-top w-100 rounded-top-0">Edit</a>
		</div>
		</div>
		</div>
		<div class="col-lg-6">
		<div class="form-check position-relative border-custom-radio p-0">
		<input type="radio" id="customRadioInline2" name="customRadioInline1" class="form-check-input">
		<label class="form-check-label w-100 border rounded" for="customRadioInline2"></label>
		<div>
		<div class="p-3 rounded rounded-bottom-0 bg-white shadow-sm w-100">
		<div class="d-flex align-items-center mb-2">
		<h6 class="mb-0">Work</h6>
		</div>
		<p class="small text-muted m-0">Model Town, Ludhiana</p>
		<p class="small text-muted m-0">Punjab 141002, India</p>
		</div>
		<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-light border-top w-100 rounded-top-0">Edit</a>
		</div>
		</div>
		</div>
		</div>
		<a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"> ADD NEW ADDRESS </a>
		</div>
		</div>
		</div>
		<div class="accordion mb-3 rounded shadow-sm bg-white overflow-hidden" id="accordionExample">
		<div class="osahan-card bg-white border-bottom overflow-hidden">
		<div class="osahan-card-header" id="headingOne">
		<h2 class="mb-0">
		<button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		<i class="feather-credit-card me-3"></i> Credit/Debit Card
		<i class="feather-chevron-down ms-auto"></i>
		</button>
		</h2>
		</div>
		<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
		<div class="osahan-card-body border-top p-3">
		<h6 class="m-0">Add new card</h6>
		<p class="small">WE ACCEPT <span class="osahan-card ms-2 fw-bold">( Master Card
		/ Visa Card / Rupay )</span></p>
		<form>
		<div class="form-row">
		<div class="col-md-12 form-group mb-3">
		<label class="form-label fw-bold small">Card number</label>
		<div class="input-group">
		<input placeholder="Card number" type="number" class="form-control">
		<button class="btn btn-outline-secondary" type="button"><i class="feather-credit-card"></i></button>
		</div>
		</div>
		<div class="row mb-3">
		<div class="col-md-8 form-group"><label class="form-label fw-bold small">Valid
		through(MM/YY)</label><input placeholder="Enter Valid through(MM/YY)" type="number" class="form-control"></div>
		<div class="col-md-4 form-group"><label class="form-label fw-bold small">CVV</label><input placeholder="Enter CVV Number" type="number" class="form-control"></div>
		</div>
		<div class="col-md-12 form-group mb-3"><label class="form-label fw-bold small">Name on card</label><input placeholder="Enter Card number" type="text" class="form-control"></div>
		<div class="col-md-12 form-group mb-0">
		<div class="form-check custom-checkbox">
		<input class="form-check-input" type="checkbox" value="" id="custom-Check1">
		<label class="form-check-label small" for="custom-Check1">
		Securely save this card
		for a faster checkout next time.
		</label>
		</div>
		</div>
		</div>
		</form>
		</div>
		</div>
		</div>
		<div class="osahan-card bg-white border-bottom overflow-hidden">
		<div class="osahan-card-header" id="headingTwo">
		<h2 class="mb-0">
		<button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		<i class="feather-globe me-3"></i> Net Banking
		<i class="feather-chevron-down ms-auto"></i>
		</button>
		</h2>
		</div>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
		<div class="osahan-card-body border-top p-3">
		<form>
		<div class="btn-group w-100" role="group" aria-label="Basic radio toggle button group">
		<input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="">
		<label class="btn btn-outline-secondary" for="btnradio1">HDFC</label>
		<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
		<label class="btn btn-outline-secondary" for="btnradio2">ICICI</label>
		<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
		<label class="btn btn-outline-secondary" for="btnradio3">AXIS</label>
		</div>
		<hr>
		<div class="form-row">
		<div class="col-md-12 form-group mb-0">
		<label class="form-label small fw-bold">Select Bank</label><br>
		<select class="custom-select form-control">
		<option>Bank</option>
		<option>KOTAK</option>
		<option>SBI</option>
		<option>UCO</option>
		</select>
		</div>
		</div>
		</form>
		</div>
		</div>
		</div>
		<div class="osahan-card bg-white overflow-hidden">
		<div class="osahan-card-header" id="headingThree">
		<h2 class="mb-0">
		<button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		<i class="feather-dollar-sign me-3"></i> Cash on Delivery
		<i class="feather-chevron-down ms-auto"></i>
		</button>
		</h2>
		</div>
		<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
		<div class="card-body border-top p-3">
		<h6 class="mb-3 mt-0 fw-bold">Cash</h6>
		<p class="m-0">Please keep exact change handy to help us serve you better</p>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	
				<div class="col-md-8 pt-3" id="content-to-replace2">
				<div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
					<div class="d-flex item-aligns-center">
					<p class="fw-bold h6 p-3 border-bottom mb-0 w-100">Menu</p>
					</div>
				<div class="row m-0">

					<div class="col-md-12 px-0 border-top">
					<div class="">
					<?php
						if ($result) { while ($row = $result->fetch_assoc()) {
							echo '<div class="d-flex gap-2 p-3 border-bottom gold-members">';
							echo '<div class="fw-bold text-danger non_veg">.</div>';
							echo '<div>';
							echo '<h6 class="mb-1">'. $row['dish'] .'</h6>';
							echo '<p class="text-muted mb-0">$'. $row['price'] .'</p>';
							echo '</div>';
							echo '<span class="ms-auto">';
							echo '<a href="#" class="btn btn-outline-secondary btn-sm add-button"';
							echo 'data-dish-name="'. $row['dish'] .'" data-dish-price="'. $row['price'] .'">ADD</a>';
							echo '</span>';
							echo '</div>';
						}}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>

        
<div class="col-md-4 pt-3">
    <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar mb-3">
        <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
            <img alt="osahan" src="img/starter1.jpg" class="me-3 rounded-circle img-fluid">
            <div class="d-flex flex-column">
				<h6 class="mb-1 fw-bold" id="restaurant-name"></h6>
				<p class="mb-0 small text-muted"><i class="feather-map-pin"></i> <span id="restaurant-address"></span></p>
			</div>

        </div>

        <div class="bg-white border-bottom py-2 gold-members">
            <!-- JavaScript will populate this section -->
        </div>

        <div class="bg-white p-3 clearfix border-bottom">
            <p class="mb-1">Item Total <span class="float-end text-dark">$<span id="item-total">0.00</span></span></p>
			
             <p class="mb-1">Service Fee<span class="text-info ms-1">
			<i class="feather-info"></i></span>
			<span class="float-end text-dark">$10</span>
			</p>
			
            <hr>
            <h6 class="fw-bold mb-0">TO PAY <span class="float-end" id="to-pay">$0.00</span></h6>
        </div>
        <div class="p-3">
            <a class="btn btn-success w-100 btn-lg"  id="pay-button">PAY $0.00<i class="feather-arrow-right"></i></a>
        </div>
		<script src="pay.js" type = "text/javascript"></script>
		<script src="confirm_pay.js" type = "text/javascript"></script>
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

	
</div>	
</body>

</html>