<?php require APPROOT . '/views/inc/common/header.php';?>

<form action="<?php echo URLROOT ;?>commons/navbar" method="post" style="margin-bottom:0">
<nav class="navbar navbar-expand-lg " style="background:#ffe55b" >
  <div class="container-fluid">
    <a class="navbar-brand "  href="#">PerfectDream</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <button class="nav-link" type="submit" aria-current="page" name="home" id="home" href="#" style="border:none;background:none;">Home</button>
        </li> 
    
      </ul>
      
    </div>
  </div>
</nav>
</form>


<?php if($data['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom:0;margin-top:0">
        <?php echo $data['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<form action="<?php echo URLROOT; ?>insurances/insertrequest" method="post" enctype="multipart/form-data">

<div class="container mt-4">
    <div class="shadow-none p-3 mb-5 bg-light rounded">
        
            <div class="text-center mb-4"><h1>NEW POLICY OR RENEWAL POLICY DETAIL</h1></div>

            <div class="row">
                <div class="col-sm-4 mb-3" style="display:block;margin:auto">
                    <div class="card w3-hover-shadow  pb-3 " >
                        <h5 class="text-center">Please Select the policy type</h5>
                        <select id="profile" name="profile" class="form-control btn btn-secondary dropdown-toggle"  style="width:80%;display:block;margin:auto;text-align:left" onchange="checkOption()">
                            <option value="">Please Select....</option>
                            <option value="Life Insurance"> Life Insurance</option>
                            <option value="Health Insurance" > Health Insurance</option>
                            <option value="Term Insurance"> Term Insurance</option>
                            <option value="Car Insurance Personal/ Private - Two Wheeler"  onclick="csgtClick()"> Car Insurance Personal/ Private - Two Wheeler</option>
                            <option value="Commercial Vehicles"  onclick="csgtClick()" > Commercial Vehicles</option>
                            <option value=" Traveling Insurance" > Traveling Insurance</option>
                            <option value="Personal Accidental Insurance" > Personal Accidental Insurance</option>
                            <option value=" Marine Insurance" > Marine Insurance</option>
                            <option value="Fire And Burglary" > Fire And Burglary</option>
                            <option value=" Workmen Competition Insurance"> Workmen Competition Insurance</option>
                        </select>
                    </div>
                </div>
            </div>
        <div class="row">
            
            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <input type="text" name="name" id="name" class="form-control" Placeholder="Enter Your  Name">
                </div>
            </div>
            

            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <input type="number" name="number" id="number" class="form-control" Placeholder="Enter Your  Phone Number">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <input type="email" name="email" id="email" class="form-control" Placeholder="Enter Your  Email">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <input type="text" name="nomineename" id="nomineename" class="form-control" Placeholder="Enter Your Nominee Name">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <input type="text" name="relation" id="relation" class="form-control" Placeholder="Enter Your Relation With Nominee">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <input type="text" name="age" id="age" class="form-control" Placeholder="Enter Age of nominee">
                </div>
            </div>

           

            <div class="col-md-3 mb-4">
                <div class="card" style=" border:none;background:none">
                <input type="text" name="qulifi" id="age" class="form-control" Placeholder="Enter Your Qualification">
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card" style=" border:none;background:none">
                <input type="text" name="occu" id="occu" class="form-control" Placeholder="Enter Your Occupation">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <input type="number" name="occu" id="occu" class="form-control" Placeholder="Enter Your Monthly Income">
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <label for="lbldob" class="form-label">Date Of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control" Placeholder="Enter Your DOB">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <label for="lbldob" class="form-label">DOB of nominee</label>
                <input type="date" name="age" id="age" class="form-control" Placeholder="Enter DOB of nominee">
              
                </div>
            </div>

           
            

            <div class="col-md-6 mb-4">
                <div class="card"  style=" border:none;background:none">
                <label for="lbluploadrcbook" class="form-label">Upload RC Book</label>
                <input type="file" name="rcbookfile" id="rcbookfile" class="form-control" accept="image/jpeg,image/png,image/jpg" >
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <label for="lbluploadaddress" class="form-label">Upload Address Proof <sup> <img src="<?php echo URLROOT.'/img/common/danger.png';?>" alt="" height="10px"></sup></label>
                <input type="file" name="addressprooffile" id="addressprooffile" class="form-control" accept="image/jpeg,image/png,image/jpg" >
                </div>
            </div>

            <div class="col-md-12 mb-4">
                <div class="card" style=" border:none;background:none">
                <label for="lblidproff" class="form-label">Upload ID Proof <sup> <img src="<?php echo URLROOT.'/img/common/danger.png';?>" alt="" height="10px"></sup></label>
                <input type="file" name="idprofffile" id="idprofffile" class="form-control" accept="image/jpeg,image/png,image/jpg" >
                </div>
            </div>

            <div class="col-sm-12">
                <div class="">
                    <p><img src="<?php echo URLROOT.'/img/common/danger.png';?>" alt="" height="10px">
                    &nbsp; Yearly premium approx 5000/10000/15000/20000/25000......up to 5 lac  <br><img src="<?php echo URLROOT.'/img/common/danger.png';?>" alt="" height="10px"> &nbsp; Term - 5 years / 10 /15 /20 ...... up to 42 years	<br><img src="<?php echo URLROOT.'/img/common/danger.png';?>" alt="" height="10px"> &nbsp; Sum assured 100000 / 150000  / 2 lac / 3 lac / 4 lac up to 1 crore
                </p>
                </div>
            </div>

            <div class="col-md-6 mb-4" style="display:block;margin:auto">
                <div class="card " style=" border:none;background:none; text:center;">
                <button type="submit" id="formsubmitbtn" name="formsubmitbtn" style="border-radius:20px;color:white;background-color:#84eaf0;border:none; padding:5px">Submit</button>
                </div>
            </div>
        </div>
    
    </div>
</div>
</form>

<script>
    function checkOption() {
        document.getElementById("profile").addEventListener("change", function() {
        var rcbookfileInput = document.getElementById("rcbookfile");
        rcbookfileInput.disabled = this.value !== ""; // Disable the input field if a value is selected in the dropdown
    });
   
    }
</script>