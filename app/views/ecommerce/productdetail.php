<?php require APPROOT . '/views/inc/ecommerce/header.php';?>
<?php require APPROOT . '/views/inc/ecommerce/navbar.php';?>

<?php if($additionalData['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
      <h4>  <?php echo $additionalData['message'];?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<form action="<?php echo URLROOT ;?>ecommerceendusers/managecart" method="post" >
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-5">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img src="<?php echo URLROOT.'/productimage/'.$data->product_image1;?>" class="d-block w-100" height="400px" weight="300px" alt="...">
				<input type="hidden" value="<?php echo $data->product_image1;?>" name="<?php echo 'image';?>">
				</div>
				<div class="carousel-item">
				<img src="<?php echo URLROOT.'/productimage/'.$data->product_image2;?>" class="d-block w-100"  height="400px" weight="300px" alt="...">
				</div>
				<div class="carousel-item">
				<img src="<?php echo URLROOT.'/productimage/'.$data->product_image3;?>" class="d-block w-100"  height="400px" weight="300px" alt="...">
				</div>
				<div class="carousel-item">
				<img src="<?php echo URLROOT.'/productimage/'.$data->product_image4;?>" class="d-block w-100"  height="400px" weight="300px" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
 

		<div class="row" style="margin-top:8%">
			<div class="col-sm-6">
				<button class="btn" style="background:#FFD814; width:100%" type="submit" name="addtocart" id="addtocart">Add to Cart</button>
			</div>
			<div class="col-sm-6">
			<button class="btn" style="background:#FF8F00; width:100%" type="submit" name="buynow" id="buynow">Buy Now</button>
			</div>
		</div>
</div>

		<!-- <div class="col-sm-2">
			<div class="card p-2 mt-4">
					<p class="pt-4"><span style="color:red;font-size:2rem;"> - <?php echo $data->product_discount?> %</span>&nbsp;&nbsp; ₹ <span style="font-size:2rem;"><?php echo $data->discount_price;?></span> </p>
					<input type="hidden" value="<?php echo $data->discount_price;?>" name="<?php echo 'price';?>">
					<p style="font-size: 2vh" class="text-muted">M.R.P. <del> &nbsp;₹<?php echo $data->product_price;?></del></p>
					<button class="btn mb-3" style="background:#FFD814; width:100%" type="submit" name="addtocart" id="addtocart">Add to Cart</button>
					<button class="btn" style="background:#FF8F00; width:100%">Buy Now</button>
			</div>
		</div> -->
        <div class="col-sm-7 ">
          <div class="row mt-4">
            <!-- <h3 style="text-align: left;padding-bottom: 1%;">Product Details</h3> -->
			<h2 style="text-align: left;padding-bottom: 2%;"><?php echo $data->product_name;?></h2>
			<input type="hidden" value="<?php echo $data->product_name;?>" name="<?php echo 'product_name';?>">
			<input type="hidden" value="<?php echo $data->product_id;?>" name="<?php echo 'product_id';?>">
            <div class="col">
			<hr>
              <p><span style="color:red;font-size:2rem;"> - <?php echo $data->product_discount?> %</span>&nbsp;&nbsp; ₹ <span style="font-size:2rem;"><?php echo $data->discount_price;?></span> </p>
			  <input type="hidden" value="<?php echo $data->discount_price;?>" name="<?php echo 'price';?>">
              <p style="font-size: 2vh" class="text-muted">M.R.P. <del> &nbsp;₹<?php echo $data->product_price;?></del></p>
              <p>Inclusive of all taxes</p>
			<hr>
				<img src="<?php echo URLROOT.'/img/ecommerce/offer.png';?>" height="30px" width="30px" alt="..."> &nbsp; Offers
			  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  				<div class="carousel-inner">
    				<div class="carousel-item active" data-bs-interval="10000">
						<div class="row">
							<div class="col">
								<div class="card" style="width: 11rem;">
  									<div class="card-body p-4">
    									<h6 class="card-title">Bank Offer</h6>
    									<p class="card-text" style="margin-bottom:0">Upto ₹1,000.00 discount on select Credit Cards </p>
    									<a href="#" class="card-link">1 offer</a>
 
  									</div>
								</div>
							</div>

							<div class="col">
								<div class="card" style="width: 11rem;">
  									<div class="card-body p-4">
    									<h6 class="card-title">No cost EMI</h6>
    									<p class="card-text" style="margin-bottom:0">Avail No Cost EMI on select cards for orders above ₹3000</p>
    									<a href="#" class="card-link">1 offer</a>
 
  									</div>
								</div>
							</div>

							<div class="col">
								<div class="card" style="width: 11rem;">
  									<div class="card-body p-4">
    									<h6 class="card-title">Partner Offers</h6>
    									<p class="card-text" style="margin-bottom:0">Get GST invoice and save up to 28% on business purchases.</p>
    									<a href="#" class="card-link">1 offer</a>
 
  									</div>
								</div>
							</div>
						</div>
					
    				</div>
    				<div class="carousel-item" data-bs-interval="2000">
					<div class="row">
							

							<div class="col">
								<div class="card" style="width: 18rem;">
  									<div class="card-body">
    									<h5 class="card-title">No cost EMI</h5>
    									<p class="card-text">Avail No Cost EMI on select cards for orders above ₹3000</p>
    									<a href="#" class="card-link">1 offer</a>
 
  									</div>
								</div>
							</div>

							<div class="col">
								<div class="card" style="width: 18rem;">
  									<div class="card-body ">
    									<h5 class="card-title">Partner Offers</h5>
    									<p class="card-text">Get GST invoice and save up to 28% on business purchases.</p>
    									<a href="#" class="card-link">1 offer</a>
 
  									</div>
								</div>
							</div>
						</div>
    				</div>
   
  				</div>
  				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="visually-hidden">Previous</span>
  				</button>
  				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="visually-hidden">Next</span>
  				</button>
			 </div>
			<hr>

		
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
			<div class="carousel-inner">
    				<div class="carousel-item active" >
						<div class="row">
							<div class="col">
								<div class="card" style="width: 6rem;border:none">
  									<div class="card-body p-2">
									  <img src="<?php echo URLROOT.'/img/ecommerce/delivery.png';?>" height="40px" class="card-img-top" alt="...">
    									<p class="card-text" style="font-size:.5rem">Free Delivery</p>
  									</div>
								</div>
							</div>

							<div class="col">
								<div class="card" style="width: 6rem;border:none">
  									<div class="card-body p-2">
									  <img src="<?php echo URLROOT.'/img/ecommerce/pay.png';?>" height="40px" class="card-img-top" alt="...">
    									<p class="card-text" style="font-size:.5rem">Pay on Delivery</p>
  									</div>
								</div>
							</div>
							<div class="col">
								<div class="card" style="width: 6rem;border:none">
  									<div class="card-body p-2">
									  <img src="<?php echo URLROOT.'/img/ecommerce/return.png';?>" height="40px" class="card-img-top" alt="...">
    									<p class="card-text" style="font-size:.5rem">10 Days return </p>
  									</div>
								</div>
							</div>

							<div class="col">
								<div class="card" style="width: 6rem;border:none">
  									<div class="card-body p-2">
									  <img src="<?php echo URLROOT.'/img/ecommerce/top.png';?>" height="40px" class="card-img-top" alt="...">
    									<p class="card-text" style="font-size:.5rem">Top Brand</p>
  									</div>
								</div>
							</div>

							<div class="col">
								<div class="card" style="width: 6rem;border:none">
  									<div class="card-body p-2">
									  <img src="<?php echo URLROOT.'/img/ecommerce/secure.png';?>" height="40px" class="card-img-top" alt="...">
    									<p class="card-text" style="font-size:.5rem">Secure Transaction</p>
  									</div>
								</div>
							</div>
						</div>
					
    				</div>
    				<div class="carousel-item" data-bs-interval="2000">
						<div class="row">
							
							<div class="col">
								<div class="card" style="width: 6rem;border:none">
  									<div class="card-body p-2">
									  <img src="<?php echo URLROOT.'/img/ecommerce/top.png';?>" height="40px" class="card-img-top" alt="...">
    									<p class="card-text" style="font-size:.5rem">Top Brand</p>
  									</div>
								</div>
							</div>

							<div class="col">
								<div class="card" style="width: 6rem;border:none">
  									<div class="card-body p-2">
									  <img src="<?php echo URLROOT.'/img/ecommerce/secure.png';?>" height="40px" class="card-img-top" alt="...">
    									<p class="card-text" style="font-size:.5rem">Secure Transaction</p>
  									</div>
								</div>
							</div>
						</div>
    				</div>
					
  				</div>
  				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="visually-hidden">Previous</span>
  				</button>
  				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="visually-hidden">Next</span>
  				</button>
			</div>
			 <hr>
				<p><b> Size :</b> &nbsp; <?php echo $data->size;?></p>
				<input type="hidden" value="<?php echo $data->size;?>" name="<?php echo 'size';?>">
				<p><b>Color :</b> &nbsp; <?php echo $data->color?> </p>
				<input type="hidden" value="<?php echo $data->color;?>" name="<?php echo 'color';?>">
            </div>
           
           
            
             
        	</div>
      	</div>
		</div>
  <hr>
  <div class="container">
	<div class="row">
		<div class="col-sm-6">
			<h1>Product Details</h1>
			<p><b> Brand :</b> &nbsp; <?php echo $data->brand?></p>
			<input type="hidden" value="<?php echo $data->brand;?>" name="<?php echo 'brand';?>">
			<p><b>Name :</b> &nbsp; <?php echo $data->product_name?></p>
			<p><b>Color :</b> &nbsp; <?php echo $data->color?></p>
			<p><b>Size :</b>  &nbsp;<?php echo $data->size?></p>
			<p><b>Description :</b> &nbsp; <?php echo $data->product_description;?></p>
		
		</div>
	</div>
  </div>
</form>
	</body>
</html>

