<?php require APPROOT . '/views/inc/matrimonial/header.php';?>
<?php require APPROOT . '/views/inc/matrimonial/navbar.php';?>
<center>
<form action="<?php echo URLROOT ;?>matrimunalendusers/completeprofile" method="post" class="sign-in-form" enctype="multipart/form-data">
<h1 class="mt-3" style="font-family:Agbalumo">Welcome <?php echo $result->first_name;?></h1>
<input type="hidden" name="profileId" id="profileId" value="<?php echo $result->profile_id;?>">
  <h3 class="mb-4">Great to see you Today</h3>
  </center>
  <div class="container">
    <div class="row text-center mb-4">
        <h3 style="font-family:Agbalumo">Please Complete your Profile For  Perfect Match </h3>
    </div>
  </div>
  <div class="container">
    <div class="row mb-3 ">
        <div class="col-sm-4 ">
            <div class="card w3-hover-shadow text-center pb-3 p-2" >
                <h5>You are creating profile for</h5>
                <select id="profile" name="profile" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Self">Self</option>
                    <option value="Sister">Sister</option>
                    <option value="Brother">Brother</option>
                    <option value="Child">Child</option>
                </select>
            </div>
        </div>

        <div class="col-sm-4 ">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Marital Status</h5>
                <select id="maritalStatus" name="maritalStatus" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Single">Single</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Awaiting Divorce">Awaiting Divorce</option>
                </select>
            </div>
        </div>

        <div class="col-sm-4 ">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Living in India Since?</h5>
                <select id="livingInIndia" name="livingInIndia" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="1 year">1 year</option>
                    <option value="2 years">2 years</option>
                    <option value="3 year">3 years</option>
                    <option value="4 year">4 years</option>
                    <option value="5 year">5 years</option>
                    <option value="6 year">6 years</option>
                    <option value="10+ year">10+ years</option>
                    <option value="20+ year">20+ years</option>
                    <option value="30+ year">30+ years</option>
                    <option value="since birth">since birth</option>
                </select>
            </div>
        </div>

    </div>

    <div class="row mb-4">
        <div class="col-sm-4 ">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>place of birth</h5>
                <select id="birthplace" name="birthplace" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <?php $count=0; foreach($data as $dataline){ ?> 
                    <option value="<?php echo $dataline->name;?>"><?php echo $dataline->name;?></option>   
                    <?php $count++;} ?>
                </select>
            </div>
        </div>

        <div class="col-sm-4 ">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Nationality</h5>
                <select id="natinality" name="natinality" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <?php $count=0; foreach($data as $dataline){ ?> 
                    <option value="<?php echo $dataline->name;?>"><?php echo $dataline->name;?></option>   
                    <?php $count++;} ?>
                </select>
            </div>
        </div>

        <div class="col-sm-4 ">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Your Visa Status</h5>
                <select id="visastatus" name="visastatus" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Citizenship">Citizenship</option>
                    <option value="Legal Permanent Residence">Legal Permanent Residence</option>
                    <option value="Work Vise">Work Vise</option>
                    <option value="Student Visa">Student Visa </option>
                </select>
            </div>
        </div>

    </div>

    <div class="row mb-4">
        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Professional</h5>
                <select id="Professional" name="Professional" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Medical ">Government </option>
                    <option value="Medical ">private </option>
                    <option value="Business ">Business </option>
                    <option value="Farmer">Farmer</option>
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
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Income</h5>
                <select id="Income" name="Income" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Rs 100000 or less">Rs 100000 or less</option>
                    <option value="Rs200000 - Rs 500000">Rs200000 - Rs 500000</option>
                    <option value="Rs 500000 - Rs 1000000">Rs 500000 - Rs 1000000</option>
                    <option value="Tell you later">Tell you later</option>
                </select>
            </div>
        </div>


        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Select your State</h5>
                <select id="State" name="State" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <?php $count=0; foreach($additionalData as $dataline){ ?> 
                    <option value="<?php echo $dataline->state;?>"><?php echo $dataline->state;?></option>   
                    <?php $count++;} ?>
                </select>
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Living with Family</h5>
                <select id="Family" name="Family" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>

 
        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Height in cm</h5>
                <input type="number" class="form-control btn-secondary " placeholder="height" name="height" id="height" style="width:30%;display:block;margin:auto" >
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Weight in kg</h5>
                <input type="number" class="form-control btn-secondary " placeholder="weight"  name="weight" id="weight" style="width:30%;display:block;margin:auto" >
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Body Type</h5>
                <select id="BodyType" name="BodyType" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Slim">Slim</option>
                    <option value="Average">Average</option>
                    <option value="Athletic">Athletic</option>
                    <option value="Heavy">Heavy</option>
                    <option value="TellyouLater">Tell you Later</option>
                </select>
            </div>
        </div>

 
        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Family Status</h5>
                <select id="familystatus" name="familystatus" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Rich/Affluent">Rich/Affluent</option>
                    <option value="UpperClass">Upper Class</option>
                    <option value="MiddleClass">Middle Class</option>
                </select>
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Complexion</h5>
                <select id="Complexion" name="Complexion" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Fair">Fair</option>
                    <option value="Medium">Medium</option>
                    <option value="Dark">Dark</option>
                    <option value="Wheatish">Wheatish</option>
                </select>
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Diet</h5>
                <select id="Diet" name="Diet" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Veg">Veg</option>
                    <option value="Non-Veg">Non-Veg</option>
                    <option value="Jain Food">Jain Food</option>                    
                </select>
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Drink</h5>
                <select id="Drink" name="Drink" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Do not Drink">Do not Drink</option>
                    <option value="Drink Socially/occasionally">Drink Socially/occasionally</option>
                    <option value="Drink regularly">Drink regularly</option>
                </select>
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Smoke</h5>
                <select id="Smoke" name="Smoke" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Do not Smoke">Do not Smoke</option>
                    <option value="Smoke Socially/occasionally">Smoke Socially/occasionally</option>
                    <option value="Smoke regularly">Smoke regularly</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row mb-4 text-center">
    <h3 style="font-family:Agbalumo;">Partner Preference Criteria</h3>
        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Perferred match marital status</h5>
                <select id="partnermaritalstatus" name="partnermaritalstatus" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Any">Any</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Awaiting Divorce">Awaiting Divorce</option>
                    <option value="Single">Single</option>
                </select>
            </div>
        </div>
   

   
        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Perferred match regligion</h5>
                <select id="partnerreligion" name="partnerreligion" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="1 year">Any</option>
                    <?php $count=0; foreach($moreData as $dataline){ ?> 
                    <option value="<?php echo $dataline->religion_tpye;?>"><?php echo $dataline->religion_tpye;?></option>   
                    <?php $count++;} ?>
                </select>
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2">
                <h5>Perferred match education</h5>
                <select id="partnereduction" name="partnereduction" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="1 year">Any</option>
                    <?php $count=0; foreach($newData as $dataline){ ?> 
                    <option value="<?php echo $dataline->eduction_type;?>"><?php echo $dataline->eduction_type;?></option>   
                    <?php $count++;} ?>
                </select>
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2 h-100">
                <h5>Perferred match Countries</h5>
                <select id="partnercountry" name="partnercountry" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <?php $count=0; foreach($data as $dataline){ ?> 
                    <option value="<?php echo $dataline->id;?>"><?php echo $dataline->name;?></option>   
                    <?php $count++;} ?>
                </select>
            </div>
        </div>
             

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2 h-100">
                <h5>Perferred match age</h5>
                    <div class="row">
                        <div class="col-sm-6">
                            <label type="text" class="form-label" >From:</label>
                            <select id="partneragefrom" name="partneragefrom" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                                <option value="">From</option>
                                <?php
                                    for($count = 20;$count <= 100;$count++){?>        
                                        <option value="<?php echo $count;?>"><?php echo $count;?></option>
                                   <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label type="text" class="form-label">To:</label>
                            <select id="partnerageto" name="partnerageto" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                                <option value="">To</option>
                                <?php
                                    for($count = 20;$count <= 100;$count++){?>        
                                        <option value="<?php echo $count;?>"><?php echo $count;?></option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>
                
            </div>
        </div> 

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2 h-100">
                <h5>Perferred match habits</h5>
                    <div class="row">
                        <div class="col-sm-6">
                            <label type="text" class="form-label" >Drinking:</label>
                            <select id="partnerdrink" name="partnerdrink" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                                <option value="">Please Select....</option>
                                <option value="Does not matter">Does not matter</option>
                                <option value="No Drinking">No Drinking</option>
                                <option value="Occasionally">Occasionally</option>
                                <option value="Regularly">Regularly</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label type="text" class="form-label">Smoking:</label>
                            <select id="partnersmoke" name="partnersmoke" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                                <option value="">Please Select....</option>
                                <option value="Does not matter">Does not matter</option>
                                <option value="No Smoking">No Smoking</option>
                                <option value="Occasionally">Occasionally</option>
                                <option value="Regularly">Regularly</option>
                            </select>
                        </div>

                    </div>
                
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2 ">
                <h5>Looking for a</h5>
                <select id="partnercitizen" name="partnercitizen" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Citizen">Citizen</option>
                    <option value="Legal Permanent Residence">Legal Permanent Residence</option>
                    <option value="Does Not Matter">Does Not Matter</option>
                </select>
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2 ">
                <h5>Perferred match diet</h5>
                <select id="partnerdiet" name="partnerdiet" class="form-control btn btn-secondary dropdown-toggle"  style="width:40%;display:block;margin:auto">
                    <option value="">Please Select....</option>
                    <option value="Veg">Veg</option>
                    <option value="Non-Veg">Non-Veg</option>
                    <option value="Does not matter">Does not matter</option>
                </select>
            </div>
        </div>
        
        <div class="col-sm-4 mb-4">
            <div class="card w3-hover-shadow text-center pb-3 p-2 ">
                <h5>Upload Your Picture </h5>
                <input type="file" id="image[]" name="image[]" multiple="multiple" accept="image/jpeg,image/png,image/jpg" required>
                                                       
                
            </div>
        </div>
    </div>

    <button  type="submit" name="CompleteProfile" id="CompleteProfile" style="width:60%;display:block;margin:auto; background-color:#f45858;color:white;padding: 10px;border-radius: 50px;" class="mb-4">Submit</button>
  </div>
</form>
<?php require APPROOT . '/views/inc/common/footer.php';?>