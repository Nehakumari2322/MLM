<?php require APPROOT . '/views/inc/common/header.php'; ?>
<?php require APPROOT . '/views/inc/common/navbar.php'; ?>
<form action="<?php echo URLROOT; ?>commons/fbn" method="post" enctype="multipart/form-data" > 
    <div class="container mt-5 mb-5">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-sm-6">
              <h4 class="mb-0">Bill Enquiry-Mobile Postpaid</h4>
            </div>
            <div class="col-sm-6 d-flex justify-content-end align-items-center">
              <img src="<?php echo URLROOT.'img/logo.png';?>" height="60px" />
              <!-- <img class="mt-3" src="log.jpg" height="60px" /> -->
            </div>
          </div>
        </div>
       
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-sm-4">
              <label
                for="serviceProvider"
                class="form-label"
                style="color: blue"
                >Service Provider</label
              >
              <select class="form-select" id="serviceProvider" name="serviceProvider">
                <option selected>Select Service Provider</option>
                <option value="BILAVAIRTEL001">Airtel Postpaid</option>
                <option value="BILAVJIO000001">Jio Postpaid</option>
                <option value="BILAVBSNL00001">BSNL Postpaid</option>
                <option value="BILAVMTNL00001">MTNL Mumbai</option>
                <option value="BILAVMTNL00002">MTNL Delhi</option>
                <option value="BILAVVI0000001">Vi Postpaid</option>
              </select>
            </div>
            <div class="col-sm-4">
              <label for="mobileNumber" class="form-label" style="color: blue"
                >Mobile Number</label
              >
              <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" />
            </div>
            <div class="col-sm-4">
              <div class="d-grid">
                <a href="https://api.billavenue.com/billpay/extBillCntrl/billFetchRequest/xml" id="fetch_bill_now" name="fetch_bill_now">Fetch Bill Now</a>
                <input type="hidden" id="data" name="data" value="<?php echo htmlspecialchars($data); ?>">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    
</form>
<?php require APPROOT . '/views/inc/common/footer.php'; ?>
    