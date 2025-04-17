<?php require APPROOT . '/views/inc/matrimonial/header.php';?>
<?php require APPROOT . '/views/inc/matrimonial/navbar.php';?>

<form action="<?php echo URLROOT ;?>matrimunalendusers/updateprofile" method="post" class="sign-in-form"  enctype="multipart/form-data">
<div class="container">
    <div class="row text-center mt-3">
        <h1 style="font-family:Agbalumo"><?php echo $data->first_name; ?></h1>
        <input type="hidden" name="profileId" id="profileId" value="<?php echo $data->profile_id;?>">
       
        <div class="col">
            <img src="<?php echo URLROOT.'/matrimunaluserimg/'.$data->image;?>" style="border-radius:50%" name="img1" id="img1"  height="220px" width="200px" value="<?php echo $data->image?>"> <br>
         
            <input type="file" class="form-control mt-2"  name="image[]" id="image[]" multiple="multiple" accept="image/jpeg,image/png,image/jpg"  style="width:30%;display:block;margin:auto">
        </div>
    </div>
</div>

<div class="container">
                    <div class="row">
                          <div class="col-md-6">
                              <div class="text-center mb-2">My Profile</div>
                                   <div class="card" >
                                       
                                        <table class="table table-bordered">
                                             <tbody>
                                                  <tr>
                                                       <th>Name</th>
                                                       <td><input type="text" name="name" id="name" value="<?php echo $data->first_name; ?>&nbsp;<?php echo $data->last_name;?>" class="form-control" readonly></td>
                                                  </tr>
                                                  <tr>
                                                       <th>Martail Status</th>
                                                       <td>
                                                            <select id="maritalStatus" name="maritalStatus" class="form-control  dropdown-toggle"  style="display:block;margin:auto">
                                                                <option value="<?php echo $data->marital_status;?>"><?php echo $data->marital_status;?></option>
                                                                <option value="Single">Single</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widowed">Widowed</option>
                                                                <option value="Awaiting Divorce">Awaiting Divorce</option>
                                                            </select>
                                                        </td>
                                                  </tr>
                                                  <tr>
                                                       <th>Nationality</th>
                                                       <td>
                                                            <select id="natinality" name="natinality" class="form-control dropdown-toggle"  style="display:block;margin:auto">
                                                                <option value="<?php echo $data->nationality; ?>"><?php echo $data->nationality; ?></option>
                                                                <?php $count=0; foreach($moreData as $dataline){ ?> 
                                                                <option value="<?php echo $dataline->name;?>"><?php echo $dataline->name;?></option>   
                                                                <?php $count++;} ?>
                                                            </select>
                                                        </td>
                                                  </tr>
                                                  <tr>
                                                       <th>State</th>
                                                       <td>
                                                            <select id="State" name="State" class="form-control   dropdown-toggle"  style="width:100%;display:block;margin:auto">
                                                                <option value="<?php echo $data->state; ?>"><?php echo $data->state; ?></option>
                                                                <?php $count=0; foreach($additionalData as $dataline){ ?> 
                                                                <option value="<?php echo $dataline->state;?>"><?php echo $dataline->state;?></option>   
                                                                <?php $count++;} ?>
                                                            </select>
                                                        </td>
                                                  </tr>
                                                  <tr>
                                                       <th>Professional</th>
                                                       <td>
                                                            <select id="Professional" name="Professional" class="form-control  dropdown-toggle"  style="display:block;margin:auto">
                                                                <option value="<?php echo $data->professional; ?>"><?php echo $data->professional; ?></option>
                                                                <option value="Medical ">Medical </option>
                                                                <option value="Merchant Navy">Merchant Navy</option>
                                                                <option value="Engineering">Engineering</option>
                                                                <option value="Teaching Jobs">Teaching Jobs </option>
                                                                <option value="Chartered Accountant ">Chartered Accountant </option>
                                                                <option value="Management Professional">Management Professional </option>
                                                                <option value="Business Man">Business Man</option>
                                                                <option value="Legal profession">Legal profession </option>
                                                                <option value="Management Consultant">Management Consultant </option>
                                                                <option value="Civil Service">Civil Service</option>
                                                                <option value="Law Enforcement">Law Enforcement</option>
                                                                <option value="Scientist">Scientist</option>
                                                                <option value="Entertainment Industry">Entertainment Industry</option>
                                                                <option value=" Designer"> Designer</option>
                                                                <option value="Hotel Management/ Culinary">Hotel Management/ Culinary</option>
                                                                <option value="Fashion Industry">Fashion Industry</option>
                                                                <option value="Technology Careers">Technology Careers</option>
                                                                <option value="NGO/ Charity Careers">NGO/ Charity Careers</option>
                                                                <option value="Hair or makeup or beauty artists">Hair or makeup or beauty artists</option>
                                                                <option value="Artist">Artist</option>
                                                            </select>
                                                        </td>
                                                  </tr>
                                                                      
                                             </tbody>
                                        </table>
                                   </div>
                              </div>

                              <div class="col-md-6">
                                                    <!-- <div class="links text-center mb-2">Partner Reference</div> -->
                                   <div class="card pt-3 mt-3">
                                        <table class="table table-bordered">
                                             <tbody>
                                                  <tr>
                                                       <th>Status</th>
                                                       <td>
                                                            <select id="familystatus" name="familystatus" class="form-control  dropdown-toggle"  style="display:block;margin:auto">
                                                                <option value="<?php echo $data->family_status; ?>"><?php echo $data->family_status; ?></option>
                                                                <option value="Rich/Affluent">Rich/Affluent</option>
                                                                <option value="UpperClass">Upper Class</option>
                                                                <option value="MiddleClass">Middle Class</option>
                                                            </select>
                                                        </td>
                                                  </tr>
                                                  <tr>
                                                       <th>Height</th>
                                                       <td><input type="text" value="<?php echo $data->height; ?> &nbsp;cm" name="height" id="height"  class="form-control"></td>
                                                  </tr>
                                                  <tr>
                                                       <th>Weight</th>
                                                       <td><input type="text" value="<?php echo $data->weight; ?>&nbsp;kg" name="weight" id="weight" class="form-control"></td>
                                                  </tr>
                                                  <tr>
                                                       <th>Complexion</th>
                                                       <td>
                                                            <select id="Complexion" name="Complexion" class="form-control dropdown-toggle"  style="display:block;margin:auto">
                                                                <option value="<?php echo $data->complexion; ?>"><?php echo $data->complexion; ?></option>
                                                                <option value="Fair">Fair</option>
                                                                <option value="Medium">Medium</option>
                                                                <option value="Dark">Dark</option>
                                                                <option value="Wheatish">Wheatish</option>
                                                            </select>
                                                        </td>
                                                  </tr>
                                                  <tr>
                                                       <th>Body Type</th>
                                                       <td>
                                                            <select id="BodyType" name="BodyType" class="form-control  dropdown-toggle"  style="display:block;margin:auto">
                                                                <option value="<?php echo $data->body_type; ?>"><?php echo $data->body_type; ?></option>
                                                                <option value="Slim">Slim</option>
                                                                <option value="Average">Average</option>
                                                                <option value="Athletic">Athletic</option>
                                                                <option value="Heavy">Heavy</option>
                                                                <option value="TellyouLater">Tell you Later</option>
                                                            </select>
                                                        </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                        </div>
                        <button  type="submit" name="UpdateProfile" id="UpdateProfile" style="width:60%;display:block;margin:auto; background-color:#f45858;color:white;padding: 10px;border-radius: 50px;" class="mb-4 mt-3">Submit</button>
             </div>
</form>
<?php require APPROOT . '/views/inc/common/footer.php';?>