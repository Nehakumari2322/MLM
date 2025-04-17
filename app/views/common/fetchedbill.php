<?php require APPROOT . '/views/inc/common/header.php'; ?>
<?php require APPROOT . '/views/inc/common/navbar.php'; ?>
<form action="<?php echo URLROOT; ?>commons/payb" method="post" enctype="multipart/form-data">
    
    <div class="container mt-5 mb-3">
        <div class="card " style="height: auto;">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 style="text-align: start; color: blue; margin: 0;">PAY BILL</h3>
                <div class="d-flex justify-content-end">
                    <img src="<?php echo URLROOT.'img/Bharat_BillPay_logo.svg.png';?>" alt="" style="height: 50px;">
                    
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="color: blue;">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="customerName" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" id="customerName"
                                style="background-color: rgb(229, 228, 226);">
                        </div>
                        <div class="mb-3">
                            <label for="mobileNumber" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" id="mobileNumber"
                                style="background-color: rgb(229, 228, 226);">
                        </div>
                        <div class="mb-3">
                            <label for="billNumber" class="form-label">Biller Name</label>
                            <input type="text" class="form-control" id="billername"
                                style="background-color: rgb(229, 228, 226);">
                        </div>
                        <div class="mb-3">
                            <label for="billNumber" class="form-label">Bill Number</label>
                            <input type="text" class="form-control" id="billNumber"
                                style="background-color: rgb(229, 228, 226);">
                        </div>

                    </div>
                    <div class="col-md-4"></div> <!-- This column left blank to create space -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="billPeriod" class="form-label">Bill Period</label>
                            <input type="text" class="form-control" id="billPeriod"
                                style="background-color: rgb(229, 228, 226);">
                        </div>
                        <div class="mb-3">
                            <label for="billDate" class="form-label">Bill Date</label>
                            <input type="text" class="form-control" id="billDate"
                                style="background-color: rgb(229, 228, 226);">
                        </div>
                        <div class="mb-3">
                            <label for="billDate" class="form-label">Due Date</label>
                            <input type="text" class="form-control" id="dueDate"
                                style="background-color: rgb(229, 228, 226);">
                        </div>
                        <div class="mb-3">
                            <label for="customerReference" class="form-label">Customer Reference Number</label>
                            <input type="text" class="form-control" id="customerReference"
                                style="background-color: rgb(229, 228, 226);">
                        </div>
                    </div>
                </div>

                <h5 style="color: blue;">Additional Info</h5>

                <div class="row" style="color: blue;">

                    <div class="col-md-3">
                        <label for="customerName" class="form-label">a</label>
                        <input type="text" class="form-control" id="customerName"
                            style="background-color: rgb(229, 228, 226);">
                    </div>
                    <div class="col-md-3">
                        <label for="mobileNumber" class="form-label">ab</label>
                        <input type="text" class="form-control" id="mobileNumber"
                            style="background-color: rgb(229, 228, 226);">
                    </div>
                    <div class="col-md-3">
                        <label for="billNumber" class="form-label">abc</label>
                        <input type="text" class="form-control" id="billNumber"
                            style="background-color: rgb(229, 228, 226);">
                    </div>

                    <div class="col-md-3">
                        <label for="billNumber" class="form-label">abcd</label>
                        <input type="text" class="form-control" id="billNumber"
                            style="background-color: rgb(229, 228, 226);">
                    </div>
                </div>

                <div class="row" style="color: blue;">

                    <div class="col-md-3">
                        <label for="customerName" class="form-label">Bill Atmoun</label>
                        <input type="text" class="form-control" id="customerName"
                            style="background-color: rgb(229, 228, 226);">
                    </div>
                    <div class="col-md-3">
                        <label for="mobileNumber" class="form-label">Late Payment Fee</label>
                        <input type="text" class="form-control" id="mobileNumber"
                            style="background-color: rgb(229, 228, 226);">
                    </div>
                    <div class="col-md-3">
                        <label for="billNumber" class="form-label">Fixed Charges</label>
                        <input type="text" class="form-control" id="billNumber"
                            style="background-color: rgb(229, 228, 226);">
                    </div>

                    <div class="col-md-3">
                        <label for="billNumber" class="form-label">Additional Charges</label>
                        <input type="text" class="form-control" id="billNumber"
                            style="background-color: rgb(229, 228, 226);">
                    </div>
                </div>

                <div class="row" style="color: blue;">

                    <div class="col-md-3">
                        <label for="customerName" class="form-label">Payement Mode</label>
                        <input type="text" class="form-control" id="customerName"
                            style="background-color: rgb(229, 228, 226);">
                    </div>
                    <div class="col-md-6">
                        <label for="mobileNumber" class="form-label">Convenience Fee</label>
                        <input type="text" class="form-control" id="mobileNumber"
                            style="background-color: rgb(229, 228, 226);">
                    </div>
                    <div class="col-md-3">
                        <label for="billNumber" class="form-label">Total Fee</label>
                        <input type="text" class="form-control" id="billNumber"
                            style="background-color: rgb(229, 228, 226);">
                    </div>


                </div>

            </div>


            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                <button class="btn btn-primary mb-2" type="submit" style="margin-right: 20px;" id="pay" name="pay">Pay Bill</button>
            </div>
        </div>
    </div>
    

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</form>
<?php require APPROOT . '/views/inc/common/footer.php'; ?>
