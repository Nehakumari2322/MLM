
<?php require APPROOT . '/views/inc/matrimonial/header.php';?>
<?php require APPROOT . '/views/inc/matrimonial/navbar.php';?>
<?php if($result['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom:0;margin-top:0">
        <?php echo $result['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>

<form action="<?php echo URLROOT ;?>matrimunalendusers/userregisteration" method="post" class="sign-in-form">
<div class="container-fluid wedding img-fluid" >
      <div class="row p-3">
        <div class="col-md-6 ">
          <h2>FIND YOUR PERFECT LIFE PARTNER</h2> 
          <span>We Bring people together.</span><br>
          <!-- <span>Love until them..</span> -->
        </div>
        <input type="hidden"  value="<?php echo $newData['id'];?>" id="userid" name="userid">
        <div class="col-md-4">
          <div class="card">
            <h3 class=" text-center">Register</h3>
        
              <center>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name="gender" id="gender" value="male" Required>
                  <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name="gender" id="gender" value="female" Required>
                  <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
              </center>
                <div class="row p-2">
                  <div class="col-6">
                    <input type="text"class="form-control" name="fname" id="fname" placeholder="First Name" Required>
                  </div>
                  <div class="col-6">
                    <input type="text"class="form-control" name="lname" id="lname" placeholder="Last Name" Required>
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-3">
                    <input type="text"placeholder="+91"class="form-control"readonly>
                  </div>
                  <div class="col-9">
                    <input type="number" class="form-control" placeholder="Enter Your Phone Number" name="number" id="number" Required>
                  </div>
                </div>
                                                      
                <div class="row p-2">
                  <div class="col-12">
                    <input type="email"class="form-control" placeholder="Email" name="email" id="email" Required>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="col-12">
                    <input type="password"class="form-control" placeholder="Password" name="password" id="password" Required>
                  </div>
                </div>

                <div class="row p-2">
                <label for="birth" class="form-label">Date of Birth</label>
                  <div class="col-12">
                    <div class="form-group"> 
                      <input type="date" class="form-control"  name="date" id="date" Required>
                    </div>
                  </div>           
                </div>

                <div class="row p-2">
                  <div class="col-12">
                    <div class="form-group">
                      <select name="religion" id="religion" class="form-control" Required >
                        <option selected>Religion</option>
                        <?php $count=0; foreach($data as $dataline){ ?> 
                        <option value="<?php echo $dataline->id;?>"><?php echo $dataline->religion_tpye;?></option>   
                        <?php $count++;} ?>
                        
                      </select>
                    </div>  
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-12">
                    <div class="form-group">
                      <select id="education" name="education" class="form-control" Required>
                        <option selected>Education</option>
                        <?php $count=0; foreach($additionalData as $dataline){ ?> 
                        <option value="<?php echo $dataline->id;?>"><?php echo $dataline->eduction_type;?></option>   
                        <?php $count++;} ?>
                      </select>
                    </div>  
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-12">
                    <div class="form-group">
                      <select id="country" name="country" class="form-control" Required>
                      <option  style="color:#888;">Country</option>
                      <?php $count=0; foreach($moreData as $dataline){ ?> 
                      <option value="<?php echo $dataline->id;?>"><?php echo $dataline->name;?></option>   
                      <?php $count++;} ?>
                      </select>
                    </div>  
                  </div>
                </div>

                <div class="row p-2 form-group">
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1" Required>
                      <label class="form-check-label" for="gridCheck1">
                        I agree to the <span class="text-danger" Required>Terms and Condition</span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-6 Already">
                    <!-- Already a member?<span class="text-danger">Login</span>                                                        -->
                  </div>
                  <div class="col-6 just">
                    <button class="btn border me-2" type="submit" id="registernow" name="registernow" onclick="document.getElementById('id01').style.display='block'" >Register</button>
                  </div>
                </div>
              </form>
          </div>
        </div><!--col-md-4-->
      </div><!--row-->
    </div><!--container-fluid-->
    <?php require APPROOT . '/views/inc/common/footer.php';?>
