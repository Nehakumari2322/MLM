<?php require APPROOT . '/views/inc/skill/header.php';?>
<?php require APPROOT . '/views/inc/skill/navbar.php';?>
<?php if($moreData['message']){ ?>
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
      <h6>  <?php echo $moreData['message'];?></h6>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
    <!-- Product Details-->
    <form action="<?php echo URLROOT ;?>skillendusers/purchase" method="post" >
    <section style="background-color: #c7e8fd">
      <div class="container-fluid py-5">
        <div class="row justify-content-center mb-3">
          <div class="col-md-12 col-xl-10">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                    <div
                      class="bg-image hover-zoom ripple rounded ripple-surface"
                    >
                      <img src="<?php echo URLROOT.'/courses/'.$data->image;?>" class="w-100" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div
                            class="mask"
                            style="background-color: rgba(253, 253, 253, 0.15)"
                          ></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-6">
                    <h5>Skill development courses</h5>
                    <div class="d-flex flex-row">
                      <div class="text-danger mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>
                    <input type="hidden" name="course_id" id="course_id"  value="<?php echo $data->course_id ;?>">
                   
                    <div class="mt-1 mb-0 text-muted small">
                      <h5>Start Date - End Date</h5>
                      <h6><?php echo $data->start;?> - <?php echo $data->end;?></h6>
                      <br/>
                      <h5>Start time - End time</h5>
                      <h6><?php echo $data->start_time;?> - <?php echo $data->end_time;?></h6>
                      <br/>
                      <h5>Trainer Name</h5>
                      <h6><?php echo $data->name;?></h6>
                      <br/>
                      <h5>Language</h5>
                      <h6><?php echo $data->language;?></h6>
                      <br/>
                      <h5>Course Description</h5>
                      <h6>
                      <?php echo $data->description;?>
                      </h6>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1">₹<?php echo $data->price;?></h4>
                      <input type="hidden" name="price" id="price"  value="<?php echo $data->price ;?>">
                      <span class="text-danger"><s>$20.99</s></span>
                    </div>

                    <div class="d-flex flex-column mt-4">
                      <button class="btn btn-primary btn-sm" type="submit" name="home" id="home">See more Courses</button>
                      <button class="btn btn-outline-primary btn-sm mt-2" type="submit" name="cart" id="cart">Add to Cart</button>
                      <button class="btn btn-outline-primary btn-sm mt-2" type="submit" name="pay" id="pay">Proceed to Pay</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-10">
            <div class="card shadow-0 border rounded-3"></div>
          </div>
        </div>
      </div>
    </section>
</form>
    <!-- Our Experts -->
    <h1 class="text-center">Our Experts</h1>

    <div class="container-fluid" >
				<?php $count=0; foreach($additionalData as $dataline){
         		if($count%4 == 0){ echo '<div class="row "  >';}?>
      
    			<div class="col-sm-3 my-3 text-center">
       			 <!-- <div class="card" style="padding:10px; border:none;box-shadow: 0px 4px 20px rgba(5,57,94,.5);"> -->
              <img src="<?php echo URLROOT.'/trainer/'.$dataline->image;?>" height="200px" class="avatar card-img-top" alt="..." />
           			
        		 <!-- </div> -->
    			</div>
    		<?php '</div>' ?>
    		<?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           	<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				
			</div>
		</div>

    

    <!-- Footer Section-->
    <?php require APPROOT . '/views/inc/common/footer.php';?>
   
