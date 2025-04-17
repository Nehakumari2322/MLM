<?php require APPROOT . '/views/inc/skill/header.php';?>
<!-- <div class="container-fluid"></div> -->
<?php require APPROOT . '/views/inc/skill/navbar.php';?>

    <!--upload courses -->
    <form action="<?php echo URLROOT ;?>skillendusers/buycourses" method="post" >
    <div class="container-fluid" >
				<?php $count=0; foreach($data as $dataline){
         		if($count%20 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
            <input type="hidden" value="<?php echo $dataline->course_id;?>" name="<?php echo 'course_id'.$count;?>">
    			<div class="col-sm-3 my-3 ">
       			 <div class="card h-100" style="padding:10px; border:2px solid white;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                <img src="<?php echo URLROOT.'/courses/'.$dataline->image;?>" height="200px" class="card-img-top" alt="..." />
           			<div class="card-body">
                  <h5 class="card-title" style="font-weight:600"><?php echo $dataline->name;?></h5>
                  <p class="card-text"><?php echo $dataline->description;?></p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <!-- <button class="btn btn-primary me-md-2 rounded-pill" type="button"  name="<?php echo 'explore'.$count;?>" id="<?php echo 'explore'.$count;?>">Explore</button> -->
                      <button href="#" class="btn btn-success rounded-pill"  name="<?php echo 'buy'.$count;?>" id="<?php echo 'buy'.$count;?>">Buy now</button>
                    </div>
                  
            		</div>
        		 </div>
    			 </div>
    		<?php '</div>' ?>
    		<?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           	<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				
			</div>
		</div>
    </form> 

    <!-- Our Experts -->
    <h1 class="text-center">Our Experts</h1>

    <div class="container-fluid" >
				<?php $count=0; foreach($additionalData as $dataline){
         		if($count%4 == 0){ echo '<div class="row " >';}?>
      
    			<div class="col-sm-3 my-3 text-center">
       			 <!-- <div class="card" style="padding:10px; border:none;box-shadow: 0px 4px 20px rgba(5,57,94,.5);"> -->
              <img src="<?php echo URLROOT.'/trainer/'.$dataline->image;?>" height="200px" class="avatar card-img-top" alt="..." />
           			
        		 <!-- </div> -->
    			</div>
    		<?php '</div>' ?>
    		<?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           	<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				
		<!-- </div> -->
		</div>


    <!-- Footer Section-->
<?php require APPROOT . '/views/inc/common/footer.php';?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
  