<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/adminnavbar.php';?>


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
                        PAN Number : <input type="text" class="form-control" placeholder="Your PAN number" id="pan_no" name="pan_no" aria-describedby="emailHelp" value="<?php echo $data->	pan_no?>" disabled>
                        Don't Have PAN Number : <input type="text" class="form-control" id="pan_no" name="pan_no" aria-describedby="emailHelp"  value="<?php echo $data->pan_available?>" disabled>
                    </div>
                    <div class="col-sm-6">
                    <form id="aadhaarForm">
                        <label for="aadhaarNumber">Enter Last 4 digit Aadhaar Number:</label><br>
                        <input class="form-control" type="text" id="aadhaarNumber" name="aadhaarNumber"  value="<?php echo $data->adhar_four_digit?>"  disabled>
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
                    <p>Payment Mode : <?php echo $data->payment_mode?></p>
                   
                    <div id="bankFields" class="row mt-3" >
                    <div class="row">
                        <div class="col-sm-6 ">
                            Account Holder Name : <input type="text" class="form-control" placeholder="Your name" id="holder_name" name="holder_name" aria-describedby="emailHelp" value="<?php echo $data->holder_name?>" disabled>
                        </div>
                        <div class="col-sm-6">
                            Bank Name : <input type="text" class="form-control" placeholder="Bank name" id="bank_name" name="bank_name" aria-describedby="emailHelp" value="<?php echo $data->bank_name?>" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-3">
                            Account Number : <input type="number" class="form-control" placeholder="Account no" id="account_no" name="account_no" aria-describedby="emailHelp" value="<?php echo $data->account_no?>" disabled>
                        </div>
                        <div class="col-sm-6 mt-3">
                            IFSC Code : <input type="text" class="form-control" placeholder="IFSC Code" id="ifsc_code" name="ifsc_code" aria-describedby="emailHelp" value="<?php echo $data->ifsc_code?>" disabled>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-6 mt-3">
                            Bank Account Type : 
                            <select id="accounttype" name="accounttype" class="form-control  dropdown-toggle"  style="display:block;margin:auto" value="<?php echo $data->account_type?>" disabled>
                                <option value="">Please Select....</option>
                                <option value="Saving Account">Saving Account</option>
                                <option value="Current Account">Current Account</option>
                            
                            </select>
                        </div>
                     </div>  
                       
                    </div>
                    <div id="upiFields" class="row mt-3">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                           UPI Type :<?php echo $data->upi_type?>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 ">
                            UPI Id : <input type="text" class="form-control" placeholder="UPI" id="upi_id" name="upi_id" aria-describedby="emailHelp" value="<?php echo $data->upi_number?>" disabled>
                        </div>
                        <div class="col-sm-6 ">
                            Phone No. : <input type="number" class="form-control" placeholder="Phone no" id="phone_no" name="phone_no" aria-describedby="emailHelp" value="<?php echo $data->phone_no?>" disabled>
                        </div>
                    </div>
                       
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

<?php require APPROOT . '/views/inc/common/footer.php';?>
