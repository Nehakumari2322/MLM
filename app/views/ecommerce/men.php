<?php require APPROOT . '/views/inc/ecommerce/header.php';?>
<?php require APPROOT . '/views/inc/ecommerce/navbar.php';?>
<?php if($additionalData['message']){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $additionalData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<form action="<?php echo URLROOT ;?>ecommerceendusers/fashion" method="post" >
<h1 class="mt-4 text-center">Men Fashion</h1>
			<div class="container-fluid " >
				<?php $count=0; foreach($data as $dataline){
         		if($count%4 == 0){ echo '<div class="row  mt-4  mb-5"  >';}?>
				<input type="hidden" value="<?php echo $dataline->subcategory_type_id;?>" name="<?php echo 'subcategory_type_id'.$count;?>">
    			<div class="col-sm-3 my-3 ">
       			 <div class="card h-100 text-center" style="padding:0px; border:2px solid white;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
           			 <div class="card-body">
                		<img src="<?php echo URLROOT.'/subcategory/'.$dataline->image;?>" class="image-fluid" height="250px" width="260px" alt="">
						<h3 style="text-align:center"><?php echo $dataline->subcategory_type;?></h3>
						<input type="hidden" value="<?php echo $dataline->subcategory_type;?>" name="<?php echo 'subcategory_type'.$count;?>">
						<button class="btn " style="color:white;background:#6c89b4;width:100%"  id="<?php echo 'shop'.$count;?>" name="<?php echo 'shop'.$count;?>">Shop Now</button>
            		</div>
        		 </div>
    			</div>
    		<?php '</div>' ?>
    		<?php $count++;} ?> 
             
           	<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				
			</div>
		
</form>
		

    
<!-- <div class="colorlib-partner mt-4 mb-4">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>Trusted Partners</h2>
					</div>
				</div>
				<div class="row">
					<div class="col partner-col text-center">
						<img src="<?php echo URLROOT.'/img/ecommerce/brand-1.jpg';?>" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="<?php echo URLROOT.'/img/ecommerce/brand-2.jpg';?>" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="<?php echo URLROOT.'/img/ecommerce/brand-3.jpg';?>" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="<?php echo URLROOT.'/img/ecommerce/brand-4.jpg';?>" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="<?php echo URLROOT.'/img/ecommerce/brand-5.jpg';?>" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
				</div>
			</div>
		</div> -->

		<?php require APPROOT . '/views/inc/ecommerce/footer.php';?>
</body>
</html>



