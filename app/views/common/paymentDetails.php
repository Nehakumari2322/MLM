
<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/navbar.php';?>
<form action="<?php echo URLROOT ;?>commons/kycdetails" method="post" style="margin-bottom:0">
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10" style="margin-top: 100px;">
            <div class="card  text-center" style="border:none;background:#b5fbff ">
                <div class="pt-3">
                    <label for="amount" class="form-label"> Personal Details </label>
                </div>
                <div class="row mb-3 p-2">
                    <div class="col-sm-6">
                        PAN Number : <input type="text" class="form-control" placeholder="Your PAN number" id="pan_no" name="pan_no" aria-describedby="emailHelp">
                        <input class="form-check-input" type="checkbox" value="no" id="pan_available" name="pan_available" onclick="togglePanInput()"> Don't Have PAN Number
                    </div>
                    <div class="col-sm-6">
                    <form id="aadhaarForm">
                        <label for="aadhaarNumber">Enter Last 4 digit Aadhaar Number:</label><br>
                        <input class="form-control" type="text" id="aadhaarNumber" name="aadhaarNumber" maxlength="4"  title="Enter a 12-digit Aadhaar number"  oninput="removeError()">
                        <button type="button" class="btn" style="color:black" onclick="maskAadhaar()">Mask Aadhaar Number</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 mb-4 mt-3" >
            <div class="card text-center" style="border:none;background:#b5fbff ">
                <div class="mb-3 mt-4">
                    <label for="amount" class="form-label"> Complete Your KYC </label>
                </div>
       
                <!-- <h4>How do you want to withdraw your amount</h4> -->
                <div class="container mb-4">
                    <input class="form-check-input" type="radio" name="withdraw" id="withdrawBank" value="bank" onclick="yesnoCheck('bank');">Bank
                    <input class="form-check-input" type="radio" name="withdraw" id="withdrawUPI" value="upi" onclick="yesnoCheck('upi');">UPI
                    <div id="bankFields" class="row mt-3" style="display: none;">
                    <div class="row">
                        <div class="col-sm-6 ">
                            Account Holder Name : <input type="text" class="form-control" placeholder="Your name" id="holder_name" name="holder_name" aria-describedby="emailHelp">
                        </div>
                        <div class="col-sm-6">
                            Bank Name : <input type="text" class="form-control" placeholder="Bank name" id="bank_name" name="bank_name" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-3">
                            Account Number : <input type="number" class="form-control" placeholder="Account no" id="account_no" name="account_no" aria-describedby="emailHelp">
                        </div>
                        <div class="col-sm-6 mt-3">
                            IFSC Code : <input type="text" class="form-control" placeholder="IFSC Code" id="ifsc_code" name="ifsc_code" aria-describedby="emailHelp">
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-6 mt-3">
                            Bank Account Type : 
                            <select id="accounttype" name="accounttype" class="form-control  dropdown-toggle"  style="display:block;margin:auto">
                                <option value="">Please Select....</option>
                                <option value="Saving Account">Saving Account</option>
                                <option value="Current Account">Current Account</option>
                            
                            </select>
                        </div>
                     </div>  
                       
                    </div>
                    <div id="upiFields" class="row mt-3" style="display: none;">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            Please Select: <br>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="paymenttype" id="phone" value="phone pe">
                            <label class="form-check-label" for="phone"> <img src="<?php echo URLROOT.'/img/common/phone.png';?>" height="30px" alt=""> Phone Pe</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="paymenttype" id="google" value="google pay">
                            <label class="form-check-label" for="google"> <img src="<?php echo URLROOT.'/img/common/google.png';?>" height="30px" alt=""> Google Pay</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="paymenttype" id="bhim" value="bhim upi">
                            <label class="form-check-label" for="bhim"> <img src="<?php echo URLROOT.'/img/common/bhim.png';?>" height="30px" alt=""> Bhim UPI</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="paymenttype" id="bharat" value="bharat pay">
                            <label class="form-check-label" for="bharat"> <img src="<?php echo URLROOT.'/img/common/bharat.png';?>" height="30px" alt=""> Bharat Pay</label>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 ">
                            UPI Id : <input type="text" class="form-control" placeholder="UPI" id="upi_id" name="upi_id" aria-describedby="emailHelp">
                        </div>
                        <div class="col-sm-6 ">
                            Phone No. : <input type="number" class="form-control" placeholder="Phone no" id="phone_no" name="phone_no" aria-describedby="emailHelp">
                        </div>
                    </div>
                       
                    </div>
                </div>
                <center>
                    <button type="submit" name="submit" id="submit" class="mb-4 mt-4 btn bg-warning" style="color:white">Submit</button>
                    <!-- <button type="submit" name="cancel" id="cancel" class="mb-4 mt-4 btn" style="width: 300px; background-color:red; color:white">Cancel now Withdraw later On</button> -->
                </center>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
</form>
<script>
    function yesnoCheck(option) {
        if (option === 'bank') {
            document.getElementById('bankFields').style.display = 'block';
            document.getElementById('upiFields').style.display = 'none';
        } else if (option === 'upi') {
            document.getElementById('bankFields').style.display = 'none';
            document.getElementById('upiFields').style.display = 'block';
        }
    }
</script>

<script>
function maskAadhaar() {
  var aadhaarInput = document.getElementById("aadhaarNumber");
  var aadhaarValue = aadhaarInput.value;
  
  // Get the last 4 digits
  var lastFourDigits = aadhaarValue.slice(-4);
  
  // Create masked Aadhaar number with 'x' characters
  var maskedAadhaar = 'xxxx-xxxx-xxxx' + lastFourDigits;
  
  // Update the input value with masked Aadhaar number
  aadhaarInput.value = maskedAadhaar;
}

function removeError() {
  var aadhaarInput = document.getElementById("aadhaarNumber");
  aadhaarInput.setCustomValidity('');
}
</script>
<script>
function togglePanInput() {
    var panInput = document.getElementById("pan_no");
    var panCheckbox = document.getElementById("pan_available");

    if (panCheckbox.checked) {
        // If the checkbox is checked, disable the input field and reset its value
        panInput.disabled = true;
        panInput.value = "";
    } else {
        // If the checkbox is unchecked, enable the input field
        panInput.disabled = false;
    }
}
</script>
<?php require APPROOT . '/views/inc/common/footer.php';?>
