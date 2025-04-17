<?php require APPROOT . '/views/inc/matrimonial/header.php';?>
<?php require APPROOT . '/views/inc/matrimonial/navbar.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container pt-5" >
        <div class="card border-danger mb-3 card-body" style="max-width: auto;  box-shadow: 0px 8px 32px 0px rgb(245, 245, 33);">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo URLROOT.'/matrimunaluserimg/'.$data->image?>" height="350px" width="350px" alt="">
                
              </div>
              <div class="col-md-8">
                <div class="card px-4" style="border: none;">
                    <h2 style="color: rgb(231, 89, 23);">Name of user</h2>
                    <div class="row">
                        <div class="col-sm-4">
                          
                            <p><img src="<?php echo URLROOT.'/img/matrimonial/age-group.png'?>" style="height: 30px; width: 30px;"/><?php echo $data->age ?> yrs</p>
                        </div>
                        <!-- <div class="col-sm-4">
                            <p><img src="<?php echo URLROOT.'/img/matrimonial/equality.png'?>" style="height: 30px; width: 30px;"/>He/Him</p>
                        </div>
                        <div class="col-sm-4">
                            <p><img src="<?php echo URLROOT.'/img/matrimonial/planet.png'?>" style="height: 30px; width: 30px;"/>Zodiac Sign</p>
                        </div> -->
                    </div><hr>

                    <!-- 1st row -->

                    <div class="row px-4">
                        <div class="col-sm-12">
                            <h5 style="color: rgb(231, 89, 23);"><img src="<?php echo URLROOT.'/img/matrimonial/privacy.png'?>" style="height: 40px; width: 40px;"/> Personal Information</h5>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-sm-6">
                        <?php
                            $inches = ceil($data->height/2.54);
                            $feet = floor(($inches/12));
                            $measurement = $feet."' ".($inches%12).'"';
                            
                        ?>
                            <small>Height : <?php echo $measurement?> | weight : <?php echo $data->weight?> Kg</small>
                        </div>
                        <div class="col-sm-6">
                            <small>Complextion : <?php echo $data->complexion?></small>
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-sm-6">
                            <small>Complextion : <?php echo $data->complexion ?></small>
                        </div>
                        <div class="col-sm-6">
                            <small>Diet : <?php echo $data->diet?></small>
                        </div>
                    </div>

                    <!-- 2nd row -->

                    <div class="row pt-3 px-4">
                        <div class="col-sm-12">
                            <h5 style="color: rgb(231, 89, 23); "><img src="<?php echo URLROOT.'/img/matrimonial/education.png'?>" style="height: 40px; width: 40px;"/>Highest Education Background</h5>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-sm-6">
                            <small>Current Occupation  : <?php echo $data->professional?></small>
                        </div>
                        <div class="col-sm-6">
                            <!-- <small>Job Title</small> -->
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-sm-6">
                            <small>Income (Optional) : <?php echo $data->income?></small>
                        </div>
                        <!-- <div class="col-sm-6">
                            <small>Mother Tongue</small>
                        </div> -->
                    </div>

                    <!-- 3rd row -->

                    <div class="row pt-3 px-4">
                        <div class="col-sm-12">
                            <h5 style="color: rgb(231, 89, 23); "><img src="<?php echo URLROOT.'/img/matrimonial/relationship.png'?>" style="height: 40px; width: 40px;"/> Family  Background</h5>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-sm-6">
                            <small>Family Status  : <?php echo $data->family_status?></small>
                        </div>
                        <div class="col-sm-6">
                            <small>Living with Family: <?php echo $data->living_with_family?></small>
                        </div>
                    </div>

                   
                    

                    <!-- 4th row -->

                    <!-- <div class="row pt-3 px-4">
                        <div class="col-sm-12">
                            <h5 style="color: rgb(231, 89, 23); "><img src="<?php echo URLROOT.'/img/matrimonial/puzzle.png'?>" style="height: 40px; width: 40px;"/>Hobbie </h5>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-sm-6">
                            <small>Interest</small>
                        </div>
                    </div> -->

                    <!-- 5th row -->

                    <div class="row pt-3 px-4">
                        <div class="col-sm-12">
                            <h5 style="color: rgb(231, 89, 23); "><img src="<?php echo URLROOT.'/img/matrimonial/rings.png'?>" style="height: 40px; width: 40px;"/>Partner Preferences</h5>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-sm-6">
                            <small>Age Range :<?php echo $data->partner_age_from?> - <?php echo $data->partner_age_to?></small>
                        </div>
                        <div class="col-sm-6">
                            <!-- <small>Height Preference</small> -->
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-sm-6">
                            <small>Education Qualification : <?php echo $data->partner_eduction?></small>
                        </div>
                        <div class="col-sm-6">
                            <small>Religion/ Cast Preference : <?php echo $data->partner_religion?></small>
                        </div>
                    </div>

                    <div class="row px-4 mb-3">
                        <div class="col-sm-6">
                            <small>Loaction <?php echo $data->partner_citizen?></small>
                        </div>
                        <div class="col-sm-6">
                            <small>Diet <?php echo $data->partner_diet?></small>
                        </div>
                    </div>

                    

                </div>
                
                  <small>Any specific requirements or preferences
                    A brief description of yourself, your personality, and what you're looking for in a partner</small>
                
              </div>
            </div>
          </div>
    </div>
    
<?php require APPROOT . '/views/inc/common/footer.php';?>