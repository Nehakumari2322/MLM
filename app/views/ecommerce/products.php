<?php require APPROOT . '/views/inc/ecommerce/header.php';?>
<?php require APPROOT . '/views/inc/ecommerce/navbar.php';?>
<?php if($moreData['message']){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size:1.5rem">
        <?php echo $moreData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<form action="<?php echo URLROOT ;?>ecommerceendusers/details" method="post" >
<h1 class="mt-4 text-center"><?php echo $additionalData?></h1>
			<div class="container-fluid" >
				<?php $count=0; foreach($data as $dataline){

         		if($count%4 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
                <input type="hidden" value="<?php echo $dataline->product_id;?>" name="<?php echo 'product_id'.$count;?>">
				<!-- <?php echo $dataline->product_id;?> -->
    			<div class="col-sm-3 my-3 ">
       			 <div class="card h-100" style="padding:0px; border:2px solid white;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
           			 <div class="card-body">
                		<img src="<?php echo URLROOT.'/productimage/'.$dataline->product_image1;?>" class="image-fluid" height="250px" width="280px" alt="">
						<h5 style="text-align:center"><?php echo $dataline->product_name;?></h5>
                        <h6 class="text-center"><span style="color:red">₹</span> &nbsp;<?php echo $dataline->discount_price;?></h6>
						<button class="btn " style="color:white;background:#6c89b4;width:100%"  id="<?php echo 'detail'.$count;?>" name="<?php echo 'detail'.$count;?>">Shop Now</button>
            		</div>
        		 </div>
    			</div>
    		<?php '</div>' ?>
    		<?php $count++;} ?> 
             
           	<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				
			</div>
		
			</form>
			</div>

		

			<?php require APPROOT . '/views/inc/ecommerce/footer.php';?>
	</body>
</html>

