<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</head>

	<body>
		<?php include 'app\views\includes\userHeader.php'; ?>
		<?php include 'app\views\includes\error.php'; ?>


		

		<div class="container mb-4">
			<h2 class="h1-responsive font-weight-bold text-center my-4">Welcome</h2>

			<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				
				<?php 
				foreach($data as $item) {
					if ($item == $data[0]) {
						echo "<div class='carousel-item active'>
							<a href='Product/usedProductDetails/$item->product_id'><img style='width:100%; aspect-ratio:1/1; object-fit:contain;' src='/images/$item->product_image'  name='product_img_preview' id='product_img_preview' class='d-block w-100' alt='...'></a>
							<div class='carousel-caption d-none d-md-block'>
								<h5>$item->product_name</h5>
							</div>
						</div>";
					} else {
						echo "<div class='carousel-item'>
							<a href='/Product/userProductDetails/$item->product_id'><img style='width:100%; aspect-ratio:1/1; object-fit:contain;' src='/images/$item->product_image'  name='product_img_preview' id='product_img_preview' class='d-block w-100' alt='...'></a>
							<div class='carousel-caption d-none d-md-block'>
								<h5>$item->product_name</h5>
							</div>
						</div>";
					}
				}
				?>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>

			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
			
			<!-- <div id="homeCarousel" class="carousel slide" data-bs-ride="false">
				<div class="carousel-inner">

					<?php 
					//foreach($data as $item) {
	                    //echo 
						// "<div class='carousel-item'>
						// 	<img src='/images/$item->product_image' href='Product/usedProductDetails/$item->product_id' class='d-block w-100' alt='No work'>
						// <div class='carousel-caption d-none d-md-block'>
						// 	<h5>$item->product_name</h5>
						// </div>
						// </div>";
					// }
					?>

			</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button> -->
		</div>
	</body>

	<script>
		file = "" + "<?= $data->product_image ?>"
		if (file != "") {
			document.getElementById("product_img_preview").src = "/images/" + file;
		}
	</script>
</html>