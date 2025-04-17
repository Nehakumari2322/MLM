
  <?php require APPROOT . '/views/inc/matrimonial/header.php';?>
  <?php require APPROOT . '/views/inc/matrimonial/navbar.php';?>
  <?php if($additionalData['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom:0;margin-top:0">
        <?php echo $additionalData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
  <form action="<?php echo URLROOT ;?>matrimunalendusers/editprofile" method="post" class="sign-in-form" enctype="multipart/form-data">
    <section class="background">
       <!-- frist section start-->
          <div class="container py-3">
               <div class=" text-center mb-2"><h2> My Profile </h2></div>
                   <div class="card">
                          <div class="row gx-0">
                            <!-- frist column -->
                                  <div class="col-md-3 ">
                                        <div class="card h-100 mb-2"style="padding:2%">
                                               <img src="<?php echo URLROOT.'/matrimunaluserimg/'.$data->image;?>"  height="300px">
                                        </div>
                                  </div>
                                               <!-- secound column -->
                                   <div class="col-sm-1"></div>
                                  <div class="col-md-8 ">
                                      <div class="card h-100"style="padding:2%">

                                        <div class="row">
                                            <div class="col-6">
                                                 <h2></h2>
                                                 <p>Account</p>
                                            </div>
                                            <div class="col-6">
                                                 <div class="row">
                                                     <div class="col-12">
                                                      
                                                      <i class="fa fa-image"></i>
                                                      <i class="fa fa-play-circle"></i>
                                                      <i class="fa fa-star"></i>
                                                     </div>
                                                 </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                           <tr>
                                                               <th>Profile ID</th>
                                                               <td><?php echo $data->profile_id;?></td>
                                                               <input type="hidden" name="profileId" id="profileId" value="<?php echo $data->profile_id;?>">
                                                           </tr>
                                                           <tr>
                                                              <th>Date of Brith</th>
                                                              <td><?php echo $data->date_of_birth;?></td>
                                                          </tr> 
                                                          <tr>
                                                              <th>Work Phone</th>
                                                              <td><?php echo $data->number;?></td>
                                                          </tr>
                                                          <tr>
                                                              <th>Email</th>
                                                              <td><?php echo $data->email;?></td>
                                                          </tr>
                                                        </tbody>
                                                  </table>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                  </div>

                                  <!-- third column -->

                                  
                          </div>
                   </div>
          </div>
       <!-- frist section closed -->

       <!-- secound start -->
             <div class="container">
                    <div class="row">
                          <div class="col-md-6">
                             
                                   <div class="card">
                                        <div class="col-12 pt-5">
                                             <i class="fa fa-user-circle">&nbsp;Basic Details</i>
                                        </div>
                                        <table class="table table-bordered">
                                             <tbody>
                                                  <tr>
                                                       <th>Name</th>
                                                       <td><?php echo $data->first_name; ?>&nbsp;<?php echo $data->last_name;?></td>
                                                  </tr>
                                                  <tr>
                                                       <th>Martail Status</th>
                                                       <td><?php echo $data->marital_status;?></td>
                                                  </tr>
                                                  <tr>
                                                       <th>Nationality</th>
                                                       <td><?php echo $data->nationality; ?></td>
                                                  </tr>
                                                  <tr>
                                                       <th>State</th>
                                                       <td><?php echo $data->state; ?></td>
                                                  </tr>
                                                  <tr>
                                                       <th>Professional</th>
                                                       <td><?php echo $data->professional; ?></td>
                                                  </tr>
                                                                      
                                             </tbody>
                                        </table>
                                   </div>
                              </div>

                              <div class="col-md-6">
                                                    <!-- <div class="links text-center mb-2">Partner Reference</div> -->
                                   <div class="card pt-3">
                                        <div class="col-12 mb-2" style=" text-align: right;">
                                             <button class="btn btn-danger mx-2 " type="submit" name="edit" id="edit" >Edit Profile</button>
                                                            <!-- <i class="fa fa-pencil"style="padding:10px;">&nbsp;</i>
                                                            <i class="fa fa-minus" aria-hidden="true"></i> -->
                                        </div>
                                        <table class="table table-bordered">
                                             <tbody>
                                                  <tr>
                                                       <th>Status</th>
                                                       <td><?php echo $data->family_status; ?></td>
                                                  </tr>
                                                  <tr>
                                                       <th>Height</th>
                                                       <td><?php echo $data->height; ?> &nbsp;cm</td>
                                                  </tr>
                                                  <tr>
                                                       <th>Weight</th>
                                                       <td><?php echo $data->weight; ?>&nbsp;kg</td>
                                                  </tr>
                                                  <tr>
                                                       <th>Complexion</th>
                                                       <td><?php echo $data->complexion; ?></td>
                                                  </tr>
                                                  <tr>
                                                       <th>Body Type</th>
                                                       <td><?php echo $data->body_type; ?></td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                        </div>
             </div>
            </section>
</form>
<?php require APPROOT . '/views/inc/common/footer.php';?>
   