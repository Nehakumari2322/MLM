<?php require APPROOT . '/views/inc/matrimonial/header.php';?>
<?php require APPROOT . '/views/inc/common/navbar.php';?>
<?php require APPROOT . '/views/inc/matrimonial/navbar.php';?>
<!-- section two start -->
  <section id="second-header">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      
      <img src="<?php echo URLROOT.'/img/matrimonial/nn.jpg';?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo URLROOT.'/img/matrimonial/pexels-photo.jpeg';?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo URLROOT.'/img/matrimonial/pexels-the-pine-photos.jpg';?>" class="d-block w-100" alt="...">
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



    <!-- <div class="container-fluid wedding img-fluid">
      <div class="row p-3">
        <div class="col-md-6 ">
          <h2>FIND YOUR PERFACT LIFE <br>PARTNER</h2> 
          <span>We Bring people together.</span><br>
          <span>Love until them..</span>
        </div>
        <div class="col-md-4">
          <div class="card text-center">
            <h3>Register</h3>
              <form action="<?php echo URLROOT; ?>MatrimunalEndUsers/userregister" method="post">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>

                <div class="row p-2">
                  <div class="col-6">
                    <input type="text"class="form-control"placeholder="First Name">
                  </div>
                  <div class="col-6">
                    <input type="text"class="form-control"placeholder="Last Nmae">
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-3">
                    <input type="text"placeholder="+91"class="form-control"readonly>
                  </div>
                  <div class="col-9">
                    <input type="text"class="form-control"placeholder="Enter Your Phone Number">
                  </div>
                </div>
                                                      
                <div class="row p-2">
                  <div class="col-12">
                    <input type="text"class="form-control"placeholder="Email">
                  </div>
                </div>
                <div class="row p-2">
                  <div class="col-12">
                    <input type="text"class="form-control"placeholder="Password">
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-4">
                    <div class="form-group">
                      <input type="number"class="form-control"placeholder="1">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <select id="inputState" class="form-control">
                        <option selected>January</option>
                        <option selected>February</option>
                        <option selected>March</option>
                        <option selected>April</option>
                        <option selected>May</option>
                        <option selected>June</option>
                        <option selected>July</option>
                        <option selected>August</option>
                        <option selected>September</option>
                        <option selected>October</option>
                        <option selected>November</option>
                        <option selected>December</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <input type="number" min="1900" max="2099" step="1" value="2023" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-12">
                    <div class="form-group">
                      <select id="inputState" class="form-control">
                        <option selected>Select Religion</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Christain">Christain</option>
                        <option value="Sikh">Sikh</option>
                      </select>
                    </div>  
                  </div>
                </div>
                <div class="row p-2">
                  <div class="col-12">
                    <div class="form-group">
                      <select id="inputState" class="form-control">
                        <option selected>Select Your Religion First</option>
                      </select>
                    </div>  
                  </div>
                </div>

                <div class="row p-2 form-group">
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        I agree to the <span class="text-danger">Terms and Condition</span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-6 Already">
                    Already a member?<span class="text-danger">Login</span>                                                       
                  </div>
                  <div class="col-6 just">
                    <button class="btn border me-2" type="submit" id="register" name="register">Register</button>
                  </div>
                </div>
              </form>
          </div> -->
        <!-- </div>col-md-4 -->
      <!-- </div>row -->
    <!-- </div>container-fluid -->
  </section>
<!-- section two closed -->

<!-- section third start -->

  <section class="section-third">
    <div class="container-fluid d-flex justify-content-center py-5">
      <div class="card"id="size"style="border-radius:25px">
        <nav class="navbar navbar-expand-lg "style="padding-top: 0;padding-bottom: 0;">
          <ul class="navbar-nav">
            <li class="nav-item  px-5">
         <!-- <a class="nav-link dropdown-toggle"href="#">Looking For a Bride</a> -->
                <div class="row" id="line"style="margin-left:0px">
                  <select name="gender"style="border:none;margin-top:7px" class="ui dropdown" id="select">
                    <option value="">Looking for Bride</option>
                    <option value="female">Hindi</option>
                    <option value="male">English</option>
                    <option value="female">Tamil</option>
                    <option value="female">Bengoali</option>
                  </select>
                </div>
            </li>
            <li class="nav-item  px-5">
              <!-- <a class="nav-link dropdown-toggle"href="#">18 Year</a> -->
              <div class="row"id="line" style="margin-left:0px">
                <select name="gender"style="border:none;margin-top:7px" class="ui dropdown" id="select">
                  <option value="">18 Years</option>
                  <option value="female">Hindi</option>
                  <option value="male">English</option>
                  <option value="female">Tamil</option>
                  <option value="female">Bengoli</option>
                </select>
              </div>
            </li>
            <li class="nav-item px-5">
            <!-- <a class="nav-link dropdown-toggle"href="#">30 Year</a> -->
              <div class="row"id="line" style="margin-left:0px">
                <select name="gender"style="border:none;margin-top:7px" class="ui dropdown" id="select">
                  <option value="">40 Years</option>
                  <option value="female">Hindi</option>
                  <option value="male">English</option>
                  <option value="female">Tamil</option>
                  <option value="female">Bengoli</option>
                </select>
              </div>
            </li>
            <li class="nav-item px-5">
              <!-- <a class="nav-link dropdown-toggle"href="#">Selecte Religion</a> -->
              <div class="row"id="line" style="margin-left:0px">
                <select name="gender"style="border:none;margin-top:7px" class="ui dropdown  mb-2" id="select">
                  <option value="">Search of Bride</option>
                  <option value="female">Hindi</option>
                  <option value="male">English</option>
                  <option value="female">Tamil</option>
                  <option value="female">Bengoli</option>
                </select>
              </div>
            </li>
          </ul>
          <button class="btn border">Search</button>
        </nav>
      </div>
    </div>
  </section>
<!-- section third closed -->

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
          <h3>Intract</h3>
          <p class="text-muted">lorem ipsum dolor sit amet,consetu<br>sadipscing elitr,seddiam nonumy.</p>
        </div>
      </div>
    </div>
  </section>
<!-- section four end -->

<h2 class="text-center">Happy Stories</h2>
<div id="carouselExampleInterval" class="carousel slide img-fluid" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="100">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
      <div class="row">
        <div class="col-sm-4"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div>
        <div class="col-sm-4"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div>
        <div class="col-sm-4"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="100">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
      <div class="row">
        <div class="col-sm-4"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div>
        <div class="col-sm-4"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div>
        <div class="col-sm-4"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="100">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
      <div class="row">
        <div class="col-sm-4"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div>
        <div class="col-sm-4"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div>
        <div class="col-sm-4"><img style="height:350px;" src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"></div>
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
<!-- section five start -->
  <div class="container-fluid text-center py-3">
    <h2>Happy Stories</h2>  
      <div class="row justify-content-center">
        <div class="col-md-4 mt-2">
          <div class="card">
            <img src="<?php echo URLROOT.'/img/matrimonial/card-one.jpg';?>"style="height:350px">
          </div>
        </div>
        <div class="col-md-4 mt-2">
          <div class="card">
            <img src="<?php echo URLROOT.'/img/matrimonial/card-two.jpg';?>" style="height:350px">
          </div>
        </div>
      </div> 
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>