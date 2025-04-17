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
                        <h5 class="text-center">Select the policy type</h5>
                        <select id="policytype" name="policytype" class="form-control btn btn-secondary dropdown-toggle"  style="width:80%;display:block;margin:auto;text-align:left" onchange=checkOption() required>
                            <option value="">Please Select....</option>
                            <option value="Life Insurance"> Life Insurance</option>
                            <option value="Health Insurance" > Health Insurance</option>
                            <option value="Term Insurance"> Term Insurance</option>
                            <option value="Car Insurance Personal/ Private - Two Wheeler"> Car Insurance Personal/ Private - Two Wheeler</option>
                            <option value="Commercial Vehicles" > Commercial Vehicles</option>
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
                    <select id="qulifi" name="qulifi" class="form-control dropdown-toggle" >
                        <option value="">Please Select....</option>
                        <option value="10th pass">10th pass </option>
                        <option value="12th pass">12th pass</option>
                        <option value="Grgraduation">Grgraduation</option>
                        <option value="Post Graduation "> Post Graduation </option>
                        <option value="PHD">PHD</option>
                       
                    </select>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card" style=" border:none;background:none">
               
                    <select id="occu" name="occu" class="form-control dropdown-toggle" >
                        <option value="">Please Select....</option>
                        <option value="Government Job ">Government Job</option>
                        <option value="Private Job">Private Job </option>
                        <option value="Business">Business</option>
                        <option value="Farmer">Farmer</option>
                        <option value="other">other</option>
                       
                    </select>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <input type="number" name="income" id="income" class="form-control" Placeholder="Enter Your Monthly Income">
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
                <input type="date" name="dobnominee" id="dobnominee" class="form-control" Placeholder="Enter DOB of nominee">
              
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                <label for="lbldob" class="form-label">Existing Policy number</label>
                <input type="text" name="policynumber" id="policynumber" class="form-control" Placeholder="Enter Existing policy number">
                </div>
            </div>

            <div class="col-sm-4 mb-4">
                <div class="card">
                    <label for="yearly" class="form-label">Company name</label>
                    <select id="companyname" name="companyname" class="form-control dropdown-toggle" >
                        <option value="">Please Select....</option>
                        <option value="ICICI Lombard ">ICICI Lombard </option>
                        <option value="Reliance">Reliance </option>
                        <option value="Manipal Cigna">Manipal Cigna</option>
                        <option value="ABHI">ABHI </option>
                        <option value="Care Health except Joy, care Freedom">Care Health except Joy, care Freedom</option>
                        <option value="Niva Bupa">Niva Bupa</option>
                        <option value="MAGMA"> MAGMA</option>
                        <option value=" HDFC Ergo"> HDFC Ergo</option>
                        <option value=" Chola"> Chola </option>
                        <option value=" Universal Sompo"> Universal Sompo</option>
                        <option value="Star Health">Star Health</option>
                        <option value="Raheja QBE"> Raheja QBE</option>
                        <option value=" Liberty"> Liberty</option>
                        <option value=" IFFCO TOKIO GENERAL INSURANCE">IFFCO TOKIO GENERAL INSURANCE</option>
                        <option value=" Future Generali"> Future Generali</option>
                        <option value=" Digit "> Digit </option>
                        <option value=" Bajaj">Bajaj</option>
                        <option value=" RSGI"> RSGI</option>
                        <option value=" SBI"> SBI</option>
                        <option value=" HDFC Life"> HDFC Life</option>
                        <option value=" ICICI Prudential "> ICICI Prudential </option>
                        <option value=" Bharti Axa"> Bharti Axa</option>
                        <option value=" SBI LIFE"> SBI LIFE</option>
                        <option value=" BALIC"> BALIC</option>
                        <option value=" Edelweiss Tokio"> Edelweiss Tokio</option>
                        <option value=" TALIC"> TALIC</option>
                        <option value=" PNB Metlife"> PNB Metlife</option>
                        <option value=" Life Insurance Corporation"> Life Insurance Corporation</option>
                        <option value=" India First"> India First</option>
                        <option value=" ADITYA BIRLA"> ADITYA BIRLA</option>
                        <option value=" MAX LIFE"> MAX LIFE</option>
                        <option value=" AEGON Life"> AEGON Life</option>
                        <option value=" Canara HSBC Life">Canara HSBC Life</option>
                        <option value=" Star Union Dai-ichi Life Insurance Co. (SUD Life)"> Star Union Dai-ichi Life Insurance Co. (SUD Life)</option>
                        <option value=" Pramerica Life"> Pramerica Life</option>
                        <option value=" Shriram Life Insurance">Shriram Life Insurance</option>
                        
                    </select>
                </div>
           </div>

           <div class="col-sm-4">
                <div class="card">
                <label for="lbldob" class="form-label">Company plan</label>
                <input type="text" name="companyplan" id="companyplan" class="form-control" Placeholder="Enter Company plan">
                </div>
            </div>

           <div class="col-sm-4 mb-4">
                <div class="card">
                    <label for="yearly" class="form-label">Yearly Premium Approx </label>
                    <select id="yearly" name="yearly" class="form-control dropdown-toggle">
                        <option value="">Please Select....</option>
                        <option value="0 - 5,000">0 - 5,000 </option>
                        <option value="5,000 - 10,000 ">5,000 - 10,000 </option>
                        <option value="10,000 - 20,000">10,000 - 20,000</option>
                        <option value="20,000 - 40,000">20,000 - 40,000 </option>
                        <option value="40,000  - 60,000">40,000  - 60,000</option>
                        <option value="60,000 - 1,00,000">60,000 - 1,00,000</option>
                        <option value=" 1 lac - 2 lac"> 1 lac - 2 lac</option>
                        <option value="2 lac - 3 lac"> 2 lac - 3 lac</option>
                        <option value="3 lac - 4 lac"> 3 lac - 4 lac</option>
                        <option value=" 4 lac - 5 lac"> 4 lac - 5 lac</option>
                    </select>
                </div>
           </div>

           <div class="col-sm-4 mb-4">
                <div class="card">
                    <label for="term" class="form-label">Term </label>
                    <select id="term" name="term" class="form-control dropdown-toggle" >
                        <option value="">Please Select....</option>
                        <option value="0 - 5 year">0 - 5 year </option>
                        <option value="5 - 10 year">5 - 10 year </option>
                        <option value="10 - 15 year">10 - 15 year</option>
                        <option value="15 - 20 year">15 - 20 year</option>
                        <option value="20 - 25 year">20 - 25 year</option>
                        <option value="25 - 30 year">25 - 30 year</option>
                        <option value="30 - 35 year">30 - 35 year</option>
                        <option value="35 - 40 year">35 - 40 year</option>
                        <option value="40 - 42 year">40 - 42 year</option>
                    </select>
                </div>
           </div>

           <div class="col-sm-4 mb-4">
                <div class="card">
                    <label for="sum" class="form-label">Sum Assured </label>
                    <select id="sum" name="sum" class="form-control dropdown-toggle" >
                        <option value="">Please Select....</option>
                        <option value="0 - 1 lac">0 - 1 lac</option>
                        <option value=" 1 - 2 lac"> 1 - 2 lac  </option>
                        <option value="2 - 4 lac"> 2 - 4 lac</option>
                        <option value="4 -8 lac">4 -8 lac</option>
                        <option value="8- 16 lac">8- 16 lac</option>
                        <option value="16- 30 lac">16- 30 lac</option>
                        <option value="30- 50 lac">30- 50 lac</option>
                        <option value="50- 80 lac">50- 80 lac</option>
                        <option value="80- 90 lac">80- 90 lac</option>
                        <option value="90 - 1 crore">90 - 1 crore</option>
                    </select>
                </div>
           </div>

            <div class="col-md-6 mb-4">
                <div class="card"  style=" border:none;background:none">
                <label for="lbluploadrcbook" class="form-label">Upload RC Book</label>
                <input type="file" name="rcbookfile" id="rcbookfile" class="form-control" accept="image/jpeg,image/png,image/jpg" >
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card"  style=" border:none;background:none">
                <label for="lbluploadrcbook" class="form-label">Brand new bike/ Car / Commercial ?</label>
               
                <select id="newbike" name="newbike" class="form-control dropdown-toggle" >
                    <option value="">Please Select....</option>
                    <option value="Maruti Suzuki">Maruti Suzuki</option>
                    <option value="Suzuki Samurai">Suzuki Samurai</option>
                    <option value="Tata Safari">Tata Safari</option>
                    <option value="Hyundai Santro">Hyundai Santro</option>
                    <option value="Humara Bajaj">Humara Bajaj</option>
                    <option value="Hero honda">Hero honda</option>
                    <option value="Hero MotoCorp">Hero MotoCorp</option>
                    <option value="Bajaj Auto">Bajaj Auto</option>
                    <option value="TVS Motor Company">TVS Motor Company</option>
                    <option value="Royal Enfield">Royal Enfield</option>
                    <option value="KTM India">KTM India</option>
                    <option value="Yamaha Motors">Yamaha Motors</option>
                    <option value="Suzuki Motorcycle">Suzuki Motorcycle</option>
                    <option value="Mahindra">Mahindra</option>
                    <option value="Honda Motorcycle">Honda Motorcycle</option>
                    <option value="Others">Others</option>
                </select>

                <div id="otherOptionInput"  class="mt-1" style="display: none;">
                    <input type="text" id="otherOptionField" name="otherOptionField" class="form-control" placeholder="Please specify...">
                </div>
                </div>
            </div>


            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <label for="lbluploadaddress" class="form-label">Upload Address Proof <sup> <img src="<?php echo URLROOT.'/img/common/danger.png';?>" alt="" height="10px"></sup></label>
                <input type="file" name="addressprooffile" id="addressprooffile" class="form-control" accept="image/jpeg,image/png,image/jpg" >
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card" style=" border:none;background:none">
                <label for="lblidproff" class="form-label">Upload ID Proof <sup> <img src="<?php echo URLROOT.'/img/common/danger.png';?>" alt="" height="10px"></sup></label>
                <input type="file" name="idprofffile" id="idprofffile" class="form-control" accept="image/jpeg,image/png,image/jpg" >
                </div>
            </div>

            <!-- <div class="col-sm-12">
                <div class="">
                    <p><img src="<?php echo URLROOT.'/img/common/danger.png';?>" alt="" height="10px">
                    &nbsp; Yearly premium approx 5000/10000/15000/20000/25000......up to 5 lac  <br><img src="<?php echo URLROOT.'/img/common/danger.png';?>" alt="" height="10px"> &nbsp; Term - 5 years / 10 /15 /20 ...... up to 42 years	<br><img src="<?php echo URLROOT.'/img/common/danger.png';?>" alt="" height="10px"> &nbsp; Sum assured 100000 / 150000  / 2 lac / 3 lac / 4 lac up to 1 crore
                </p>
                </div>
            </div> -->

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
        var selectedOption = document.getElementById("policytype").value;
        var rcbookInput = document.getElementById("rcbookfile");
        var newBikeInput = document.getElementById("newbike");

        if (selectedOption !== "Car Insurance Personal/ Private - Two Wheeler" && selectedOption !== "Commercial Vehicles") {
            rcbookInput.disabled = true;
            newBikeInput.disabled = true;
        } else {
            rcbookInput.disabled = false;
            newBikeInput.disabled = false;
        }
    }
</script>

<script>
    function toggleInputField() {
        var selectedOption = document.getElementById("newbike").value;
        var otherOptionInput = document.getElementById("otherOptionInput");
        var otherOptionField = document.getElementById("otherOptionField");

        if (selectedOption === "Others") {
            otherOptionInput.style.display = "block";
        } else {
            otherOptionInput.style.display = "none";
            otherOptionField.value = ""; // Clear the value when hiding
        }
    }
</script>
