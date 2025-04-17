<?php require APPROOT . '/views/inc/common/header.php'; ?>
<?php require APPROOT . '/views/inc/common/navbar.php'; ?>
<form action="<?php echo URLROOT; ?>commons/bill" method="post" enctype="multipart/form-data" > 
    <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 d-flex flex-row-reverse bd-highlight">
          <img src="<?php echo URLROOT.'img/logo.png';?>" height="100px" />
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <p style="color: red; font-size: large">
            Bharat Bill Payment System (BBPS) Billers <br />
            Select your Biller using Select Operator or by Entering the Biller
            name that you wish to add
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <h4 style="color: red; font-size: large">Categories</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          
          <div class="dropdown">
            <a
              class="btn btn-secondary dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              style="background-color: rgb(40, 29, 110)"
            >
              Select Category
            </a>

            <ul class="dropdown-menu">
              <li><button class="dropdown-item" href="#" id="broadbandpostpaid" name="broadbandpostpaid">Broadband Postpaid</button></li>
              <li><button class="dropdown-item" href="#" id="cabletv" name="cabletv">Cable TV</button></li>
              <li>
                <button class="dropdown-item" href="#" id="clubsandassociations" name="clubsandassociations">Clubs and Associations</button>
              </li>
              <li><button class="dropdown-item" href="#" id="creditcard" name="creditcard">Credit Card</button></li>
              <li><button class="dropdown-item" href="#" id="donation" name="donation">Donation</button></li>
              <li><button class="dropdown-item" href="#" id="dth" name="dth">DTH</button></li>
              <li><button class="dropdown-item" href="#" id="educationfees" name="educationfees">Education Fees</button></li>
              <li><button class="dropdown-item" href="#" id="electricity" name="electricity">Electricity</button></li>
              <li><button class="dropdown-item" href="#" id="fastag" name="fastag">Fastag</button></li>
              <li><button class="dropdown-item" href="#" id="gas" name="gas">Gas</button></li>
              <li><button class="dropdown-item" href="#" id="hospital" name="hospital">Hospital</button></li>
              <li>
                <button class="dropdown-item" href="#" id="hospitalandpathology" name="hospitalandpathology">Hospital and Pathology</button>
              </li>
              <li><button class="dropdown-item" href="#" id="housingsociety" name="housingsociety">Housing Society</button></li>
              <li>
                <button class="dropdown-item" href="#" id="insurance" name="insurance"
                  >Insurance(Life, General, Health & Others)</button
                >
              </li>
              <li><button class="dropdown-item" href="#" id="landlinepostpaid" name="landlinepostpaid">Landline Postpaid</button></li>
              <li><button class="dropdown-item" href="#" id="loanrepayment" name="loanrepayment">Loan Repayment</button></li>
              <li><button class="dropdown-item" href="#" id="lpggas" name="lpggas">LPG Gas</button></li>
              <li><button class="dropdown-item" href="#" id="mobilepostpaid" name="mobilepostpaid">Mobile Postpaid</button></li>
              <li><button class="dropdown-item" href="#" id="mobileprepaid" name="mobileprepaid">Mobile Prepaid</button></li>
              <li><button class="dropdown-item" href="#" id="municipalservices" name="municipalservices">Municipal Services</button></li>
              <li><button class="dropdown-item" href="#" id="municipaltaxes" name="municipaltaxes">Municipal Taxes</button></li>
              <li><button class="dropdown-item" href="#" id="recurringdeposit" name="recurringdeposit">Recurring Deposit</button></li>
              <li><button class="dropdown-item" href="#" id="rental" name="rental">Rental</button></li>
              <li><button class="dropdown-item" href="#" id="subscription" name="subscription">Subscription</button></li>
              <li><button class="dropdown-item" href="#" id="water" name="water">Water</button></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <?php require APPROOT . '/views/inc/commom/footer.php'; ?>
