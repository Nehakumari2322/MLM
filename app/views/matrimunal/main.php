<?php require APPROOT . '/views/inc/matrimonial/header.php';?>
<?php require APPROOT . '/views/inc/matrimonial/navbar.php';?>


<section id="second-header">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      
      <img src="<?php echo URLROOT.'/img/matrimonial/immg1.png';?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo URLROOT.'/img/matrimonial/img43.jpeg';?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo URLROOT.'/img/matrimonial/img23.jpg';?>" class="d-block w-100" alt="...">
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
</section>

<form action="<?php echo URLROOT ;?>matrimunalendusers/searchpartner" method="post" class="sign-in-form"  enctype="multipart/form-data">
<!-- section third start -->

<section class="section-third">
    <div class="container-fluid d-flex justify-content-center py-5">
      <div class="card"id="size"style="border-radius:25px">
        <nav class="navbar navbar-expand-lg "style="padding-top: 0;padding-bottom: 0;">
          <ul class="navbar-nav">
            <li class="nav-item  px-5">
         <!-- <a class="nav-link dropdown-toggle"href="#">Looking For a Bride</a> -->
                <div class="row" id="line"style="margin-left:0px">
                  <select name="gender"style="border:none;margin-top:7px" class="ui dropdown" id="gender">
                    <option value="" style="color:#888;">Looking for a Partner</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
            </li>
            <li class="nav-item px-5">
              <!-- <a class="nav-link dropdown-toggle"href="#">18 Year</a> -->
              <div class="row"id="line" style="margin-left:0px">
                <select name="age"style="border:none;margin-top:7px" class="ui dropdown" id="age">
                  <option value=" " style="color:#888;">Enter Years</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                </select>
              </div>
            </li>
            <li class="nav-item  px-5">
              <!-- <a class="nav-link dropdown-toggle"href="#">18 Year</a> -->
              <div class="row"id="line" style="margin-left:0px">
                <select name="religion"style="border:none;margin-top:7px" class="ui dropdown" id="religion">
                  <option value="" style="color:#888;">Religion</option>
                  <option value="3">Christianity</option>
                  <option value="1">Hindu</option>
                  <option value="2">Islam</option>
                  <option value="4">Sikh</option>
                  <!-- <option value="11-0">Nonreligious</option> -->
                </select>
              </div>
            </li>
            <li class="nav-item px-5">
            <!-- <a class="nav-link dropdown-toggle"href="#">30 Year</a> -->
              <div class="row"id="line" style="margin-left:0px">
                <select name="Country"style="border:none;margin-top:7px" class="ui dropdown" id="Country">
                <option value="" style="color:#888;">Country</option>
                <option value="1">USA</option>
                <option value="2">UK</option>
                <option value="4">Canada</option>
                <option value="3">India</option>
                <option value="5">Pakistan</option>
                <option value="6">Australia</option>
                <option value="7">New Zealand</option>
                <option value="8">UAE</option>
                </select>
              </div>
            </li>

          </ul>
          <button class="btn border" type="submit" name="submitbtn" id="submitbtn">Search</button>
        </nav>
      </div>
    </div>
  </section>
</form>
<!-- section third closed -->
<hr style="margin:0;color:black">
<!-- section four start -->
<section id="section-four">
    <div class="container-fluid text-center py-3">
      <h2>How Does it Work?</h2>
      <div class="row py-5">
        <div class="col-md-3 text-center">
          <i class="fa fa-user-circle "></i>
          <h3>Create Account</h3>
          <p class="text-muted">lorem ipsum dolor sit amet,consetu<br>sadipscing elitr,seddiam nonumy.</p>
        </div>
        <div class="col-md-3 text-center">
          <i class="fa fa-chrome  "></i>
          <h3>Browse Profile</h3>
          <p class="text-muted">lorem ipsum dolor sit amet,consetu<br>sadipscing elitr,seddiam nonumy.</p>
        </div>
        <div class="col-md-3 text-center">
          <i class="fa fa-heart"></i>
          <h3>Connect</h3>
          <p class="text-muted">lorem ipsum dolor sit amet,consetu<br>sadipscing elitr,seddiam nonumy.</p>
        </div>
        <div class="col-md-3 text-center">
          <i class="fa fa-phone "></i>
          <h3>Interact</h3>
          <p class="text-muted">lorem ipsum dolor sit amet,consetu<br>sadipscing elitr,seddiam nonumy.</p>
        </div>
      </div>
    </div>
  </section>
<!-- section four end -->



<div class="container" >
<h2 class="text-center mt-2">Happy Stories</h2>
<div id="carouselExampleInterval" class="carousel slide img-fluid" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="container">
      <div class="carousel-item active" data-bs-interval="10000">
        <!-- <img src="..." class="d-block w-100" alt="..."> -->
        <div class="row text-center">
          <div class="col-sm-4"><div class="card"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div></div>
          <div class="col-sm-4"><div class="card"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/st1.jpg';?>"></div></div>
          <div class="col-sm-4"><div class="card"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/st2.jpg';?>"></div></div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <!-- <img src="..." class="d-block w-100" alt="..."> -->
        <div class="row text-center">
          <div class="col-sm-4"><div class="card"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/st3.jpg';?>"></div></div>
          <div class="col-sm-4"><div class="card"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div></div>
          <div class="col-sm-4"><div class="card"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/st1.jpg';?>"></div></div>
        </div>
      </div>
      <div class="carousel-item" >
        <!-- <img src="..." class="d-block w-100" alt="..."> -->
        <div class="row text-center">
          <div class="col-sm-4"><div class="card"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/st2.jpg';?>"></div></div>
          <div class="col-sm-4"><div class="card"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div></div>
          <div class="col-sm-4"><div class="card"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/st3.jpg';?>"></div></div>
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
</div>
<div class="my-5"></div>


<?php require APPROOT . '/views/inc/common/footer.php';?>
