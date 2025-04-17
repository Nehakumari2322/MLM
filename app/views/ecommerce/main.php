<?php require APPROOT . '/views/inc/ecommerce/header.php';?>
<!-- <?php require APPROOT . '/views/inc/common/navbar.php';?> -->
<?php require APPROOT . '/views/inc/ecommerce/navbar.php';?>
		
<!-- End Nav page-->
<!-- Header Section-->

<div id="ecommaincarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">
	  <div class="carousel-item active">
	   
		<img src="<?php echo URLROOT.'/img/ecommerce/swip1.jpeg';?>" class="d-block w-100" style="height: 450px;" alt="...">
	  </div>
	  <div class="carousel-item">
		<img src="<?php echo URLROOT.'/img/ecommerce/swip2.webp';?>" class="d-block w-100"style="height: 450px;" alt="...">
	  </div>
	  <div class="carousel-item">
		<img src="<?php echo URLROOT.'/img/ecommerce/swip3.jpg';?>" class="d-block w-100"style="height: 450px;" alt="...">
	  </div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#ecommaincarousel" data-bs-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#ecommaincarousel" data-bs-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Next</span>
	</button>
</div>
<!-- End Header Section-->
<br>

	
		<div class="container-fluid">
	
			<div class="row">
				<marquee width="80%" direction="left" height="50px" style="background:#C5DFF8; padding:10px;font-size:1.4rem">
					<b>!! Deal of the Day. !! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!! Deal of the Day. !!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!! Deal of the Day. !!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!! Deal of the Day. !! &nbsp;</b>
				</marquee>
				<form action="<?php echo URLROOT ;?>ecommerceendusers/main" method="post" >
			
				<?php $count=0; foreach($data as $dataline){
         		if($count%6 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
					<input type="hidden" value="<?php echo $dataline->subcategory_type_id;?>" name="<?php echo 'subcategory_type_id'.$count;?>">
					<input type="hidden" value="<?php echo $dataline->subcategory_type;?>" name="<?php echo 'subcategory_type'.$count;?>">
    			<div class="col-sm-2 mt-4 ">
					<div class="card h-100 text-center" style="padding:0px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
						<div class="card-body" style="padding-left:5px;padding-right:0px"><button type="submit" name="<?php echo 'product'.$count;?>" id="<?php echo 'product'.$count;?>" class="btn" style="padding:3px">
							<img src="<?php echo URLROOT.'/productimage/'.$dataline->product_image1;?>" height="230px" width="180px" alt="">
							</button>
						</div>
					</div>
    			</div>
    			<?php '</div>' ?>
    			<?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           		<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				</form>
			</div>
		</div>
		
				</div>


		<h2 class="mx-5"><b> Motorbike Accessories </b></h2>
		<div class="container-fluid" >
			<form action="<?php echo URLROOT ;?>ecommerceendusers/electronicproduct" method="post" >
			
				<?php $count=0; foreach($result as $dataline){
         		if($count%4 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
				<input type="hidden" value="<?php echo $dataline->subcategory_type_id;?>" name="<?php echo 'subcategory_type_id'.$count;?>">
				<input type="hidden" value="<?php echo $dataline->subcategory_type;?>" name="<?php echo 'subcategory_type'.$count;?>">
				<?php if($count < 4){?>
    			<div class="col-sm-3 my-3 ">
       			 	<div class="card h-100 text-center" style="padding:0px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
						<div class="card-body"><button class="btn" style="padding:3px" type="submit" name="<?php echo 'product'.$count;?>" id="<?php echo 'product'.$count;?>">
							<img src="<?php echo URLROOT.'/productimage/'.$dataline->product_image1;?>" class="image-fluid" height="230px" width="260px" alt="">
							</button>
            			</div>
        		 	</div>
				 
    			</div>
				<?php } ?>
    			<?php '</div>' ?>
    			<?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           		<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				
			</div>
					
			</form>
		</div>
	
		<h2 class="mx-5"><b> Electronics </b></h2>
			<div class="container-fluid" >
			<form action="<?php echo URLROOT ;?>ecommerceendusers/electronicproduct" method="post" >
			
				<?php $count=0; foreach($additionalData as $dataline){
         		if($count%4 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
				<input type="hidden" value="<?php echo $dataline->subcategory_type_id;?>" name="<?php echo 'subcategory_type_id'.$count;?>">
				<input type="hidden" value="<?php echo $dataline->subcategory_type;?>" name="<?php echo 'subcategory_type'.$count;?>">
				<?php if($count < 4){?>
    			<div class="col-sm-3 my-3 ">
       			 	<div class="card h-100 text-center" style="padding:0px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
						<div class="card-body"><button class="btn" style="padding:3px" type="submit" name="<?php echo 'product'.$count;?>" id="<?php echo 'product'.$count;?>">
							<img src="<?php echo URLROOT.'/productimage/'.$dataline->product_image1;?>" class="image-fluid" height="230px" width="260px" alt="">
							</button>
            			</div>
        		 	</div>
				 
    			</div>
				<?php } ?>
    			<?php '</div>' ?>
    			<?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           		<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				
			</div>
					
			</form>
		</div>
		
		<form action="<?php echo URLROOT ;?>ecommerceendusers/menproduct" method="post" >
		<h2 class="mx-5"><b> Fashion for Men's </b></h2>
		<div class="container-fluid" >
				<?php $count=0; foreach($moreData as $dataline){
         		if($count%6 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
				<input type="hidden" value="<?php echo $dataline->subcategory_type_id;?>" name="<?php echo 'subcategory_type_id'.$count;?>">
				<input type="hidden" value="<?php echo $dataline->subcategory_type;?>" name="<?php echo 'subcategory_type'.$count;?>">
					<?php if($count < 6){?>		
    			<div class="col-sm-2 mt-4 ">
       			 <div class="card h-100 text-center" style="padding:0px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
           			 <div class="card-body"><button class="btn" style="padding:3px" type="submit" name="<?php echo 'product'.$count;?>" id="<?php echo 'product'.$count;?>">
                		<img src="<?php echo URLROOT.'/productimage/'.$dataline->product_image1;?>" class="image-fluid" height="230px" width="170px" alt="" disabled ></button>
            		</div>
        		 </div>
				 <?php } ?>
    			</div>
    		<?php '</div>' ?>

    		<?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           	<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				
		</div>
		</form>
		<form action="<?php echo URLROOT ;?>ecommerceendusers/womenproduct" method="post" style="padding:0">
			<h2 class="mx-5"><b>Fashion for women </b></h2>
			<div class="container-fluid" >
					<?php $count=0; foreach($newData as $dataline){
					if($count%6 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
						<input type="hidden" value="<?php echo $dataline->subcategory_type_id;?>" name="<?php echo 'subcategory_type_id'.$count;?>">
					<input type="hidden" value="<?php echo $dataline->subcategory_type;?>" name="<?php echo 'subcategory_type'.$count;?>">
						<?php if($count < 6){?>
					<div class="col-sm-2 mt-4 ">
					<div class="card h-100 text-center" style="padding:0px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
						<div class="card-body"><button class="btn" style="padding:3px" type="submit" name="<?php echo 'product'.$count;?>" id="<?php echo 'product'.$count;?>">
							<img src="<?php echo URLROOT.'/productimage/'.$dataline->product_image1;?>" class="image-fluid" height="230px" width="170px" alt=""></button>
						</div>
					</div>
					<?php } ?>
					</div>
				<?php '</div>' ?>
				<?php $count++;} ?> 
				<!-- <?php echo "totalcount".$count;?> -->
				<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
					
			</div>
		</form>

		
	</div>
<section>
<?php require APPROOT . '/views/inc/ecommerce/footer.php';?>
</body>
</html>
	


