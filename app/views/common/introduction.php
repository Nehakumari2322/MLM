<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/homenavbar.php';?>

<div class="container-fluid px-0 " >
    <div class="row">
        <!-- Carousel wrapper -->
        <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselBasicExample"  data-mdb-slide-to="0"  class="active" aria-current="true"
                aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"  aria-label="Slide 2"></button>
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active">
                    <img src="<?php echo URLROOT.'/img/common/hooo.png';?>" class="d-block w-100" alt="Sunset Over the City"/>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <img src="<?php echo URLROOT.'/img/common/2222.png';?>" class="d-block w-100" alt="Canyon at Nigh"/>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <img src="<?php echo URLROOT.'/img/common/home22.png';?>" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
       
    </div>
    
</div>


<form action="<?php echo URLROOT ;?>commons/taketologin" method="post">
<div class="container">
    <div class="row mt-4 mb-4 text-center mt-2">
        <h1 style="font-family:jomol hari" class="mb-3">Services We Offers</h1>
            <div class="col-sm-4 mb-2">
              
                    <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn" type="submit" name="log" id="log">  <img src="<?php echo URLROOT.'/img/common/skil.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                        <h4 class="text-center  mt-1" style="font-family:jomolhari;">Skill development</h4></button>
                    </div> 
               
            </div>
            <div class="col-sm-4 mb-2"> 
              
                <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn" type="submit" name="log" id="log">  <img src="<?php echo URLROOT.'/img/common/ecom.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                        <h4 class="text-center  mt-1" style="font-family:jomolhari;">E- Commerce</h4></button>
                    </div>  
               
            </div>
            <div class="col-sm-4 mb-2">
           
            <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn" type="submit" name="log" id="log">  <img src="<?php echo URLROOT.'/img/common/shad.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                        <h4 class="text-center  mt-1" style="font-family:jomolhari"> Matrimonial</h4> </button>
                    </div>
               
            </div>
    </div>


    <div class="row mb-4">
        <div class="col-sm-4 mb-2">
            <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn" type="submit" name="log" id="log">   <img src="<?php echo URLROOT.'/img/common/travel.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                    <h4 class="text-center mt-1" style="font-family:jomolhari">Traveling Website</h4> </button>
                </div>
            </div>

        <div class="col-sm-4 mb-2">
            <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn" type="submit" name="log" id="log"> <img src="<?php echo URLROOT.'/img/common/bill.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                <h4 class="text-center mt-1" style="font-family:jomolhari"> Utitlity Payment</h4> </button>
            </div>
        </div>

        <div class="col-sm-4 mb-2">
            <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn" type="submit" name="log" id="log"> <img src="<?php echo URLROOT.'/img/common/insurence.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                <h4 class="text-center mt-1" style="font-family:jomolhari"> Insurence </h4></button>
            </div>
        </div>

    </div>

    <div class="row mb-4">
        <div class="col-sm-4 mb-2" style="display:block;margin:auto">
            <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn" type="submit" name="log" id="log"> <img src="<?php echo URLROOT.'/img/common/dmate.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                <h4 class="text-center mt-1" style="font-family:jomolhari"> Demat </h4></button>
            </div>
        </div>
    </div>
</div>
</form>

<div class="container">
			<form method="POST" action="<?php echo URLROOT ;?>commons/payform">
				<div class="form-group">
					<button type="submit" name="paypagebtn" id="paypagebtn" class="btn btn-primary btn-block" style="background-color: white; color: white; max-width: 400px;"> Pay </button>
				</div> <!-- form-group// -->
			</form>
</div>
<!-- <div class="container">
    <div class="row text-center mt-3">
        <h2 style="font-family:jomol hari">Our Services</h2>
        <div class="col-sm-4 mb-4">
            <img src="<?php echo URLROOT.'/img/common/about.jpg';?>" style="border-radius:30px"  class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
        </div> 
        <div class="col-sm-8 p-3">
            <p>Perfect Dream is the best app for your education , for finding life patner and for your skill development. We provide  this app to you with best security system,user-friendily,and with proper responsive. We will also help to integrated your 
            learing system by offering you complete knowledge and end-to-end learing solution. Finding best life patner can be a big mystey but not anymore because we gonna provide best opton for you "Happily ever after begins here".You can  also earn REAL money from here by refering to your Friends , Family , Business partners ,Colleagues etc..
            </p>
        </div>
    </div>
</div> -->

<?php require APPROOT . '/views/inc/common/footer.php';?>