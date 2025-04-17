<?php require APPROOT . '/views/inc/skill/header.php';?>
<?php require APPROOT . '/views/inc/skill/navbar.php';?>



    <!-- Header Section -->

    <div id="carouselExampleIndicators"  class="carousel slide" data-bs-ride="carousel" >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"  aria-current="true"  aria-label="Slide 1"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img 
            src="<?php echo URLROOT.'/img/skills/importance-of-skill-development-800x445.png';?>"
            class="d-block w-100 image-fluid" style="height:auto;max-width:100%" alt="..."/>
        </div>
        <div class="carousel-item">
          <img
            src="<?php echo URLROOT.'/img/skills/iStock-507009337-171002.png';?>"
            class="d-block w-100 image-fluid" style="height:auto;max-width:100%" alt="..."/>
        </div>
        <div class="carousel-item">
          <img
            src="<?php echo URLROOT.'/img/skills/skills.jpg';?>"
            class="d-block w-100 image-fluid"  alt="..." style="height:auto;max-width:100%" />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End  header Section-->
    <form action="<?php echo URLROOT ;?>skillendusers/main" method="post" >
    <!-- About Section -->
    <h2>About Us</h2>
    <div class="container about-section">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <img src="<?php echo URLROOT.'/img/skills/skills.jpg';?>" alt="" style="box-shadow: 0px 4px 20px rgba(5,57,94,.5);" />
          </div>
        </div>
        <div class="col-sm-6">
          <h5 style="text-align: justify">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio
            doloribus temporibus eveniet aliquam ipsum reiciendis iure quo sunt?
            Ab velit tempore vitae nulla. Corrupti repellendus eaque, inventore
            ab debitis officia. Lorem ipsum, dolor sit amet consectetur
            adipisicing elit. Officiis qui eaque ducimus id dignissimos
            perferendis quod obcaecati ab suscipit est sapiente sed optio, autem
            non quam necessitatibus neque dolor? Delectus! Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Adipisci consectetur dolor earum
            labore consequuntur debitis nesciunt ipsa rem assumenda temporibus
            voluptate accusantium maxime, corporis vitae mollitia. Quaerat
            corrupti a officia. Lorem, ipsum dolor sit amet consectetur
            adipisicing elit. Ullam qui debitis vitae accusantium, omnis odit
            consequuntur molestiae sint dolores architecto provident consectetur
            ratione vero sapiente inventore eius quod libero fuga.
          </h5>
        </div>
      </div>
    </div>
    <!-- End About Section-->
    <!-- Cources Section -->
    <h1 class="text-center mt-4">We Offers</h1>
    <div class="container-fluid" >
				<?php $count=0; foreach($data as $dataline){
         		if($count%4 == 0){ echo '<div class="row  "  >';}?>
            <?php if($count < 4){?>
            <input type="hidden" value="<?php echo $dataline->course_id;?>" name="<?php echo 'course_id'.$count;?>">
    			<div class="col-sm-3 my-3 ">
       			 <div class="card h-100" style="padding:10px; border:2px solid white;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
              <img src="<?php echo URLROOT.'/courses/'.$dataline->image;?>" height="200px" class="card-img-top" alt="..." />
           			 <div class="card-body">
                  <h5 class="card-title" style="font-weight:600"><?php echo $dataline->name;?></h5>
                  <p class="card-text"><?php echo $dataline->description;?></p>
                  <button href="#" class="btn btn-primary" name="<?php echo 'enroll'.$count;?>" id="<?php echo 'enroll'.$count;?>"  style="width:100%">See More</button>
                  
            		</div>
        		 </div>
    			</div>
          <?php } ?>
    		<?php '</div>' ?>
    		<?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           	<input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				
			</div>
		</div>
        </form>
    <!--Experts Section-->

    <h1 class="text-center mt-2">Our Experts</h1>

    <div class="container-fluid" >
				<?php $count=0; foreach($additionalData as $dataline){
         		if($count%4 == 0){ echo '<div class="row "  >';}?>
              <?php if($count < 4){?>
    			<div class="col-sm-3 my-3 text-center">
       			 <!-- <div class="card" style="padding:10px; border:none;box-shadow: 0px 4px 20px rgba(5,57,94,.5);"> -->
              <img src="<?php echo URLROOT.'/trainer/'.$dataline->image;?>" height="200px" class="avatar card-img-top" alt="..." />
           			
        		 <!-- </div> -->
    			</div>
          <?php } ?>
    		<?php '</div>' ?>
    		<?php $count++;} ?> 
        <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				
			</div>
		</div>
        </div>
              </div>
<?php require APPROOT . '/views/inc/common/footer.php';?>
 