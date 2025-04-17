<?php require APPROOT . '/views/inc/common/header.php';?>
<nav class="navbar navbar-expand-lg " style="background:#ffe55b">
  <form action="<?php echo URLROOT ;?>commons/homenavbar" method="post" style="margin-bottom:0">
    <div class="container-fluid">
      <button class="navbar-brand" href="#" name="home" id="home" style="background:none;border:none"> PerfectDream  <i class='bx bxs-home'></i></button>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </form>
</nav>
<div class="alert alert-info text-center" role="alert"><b>
Pay one time membership fee to gain full access</b>
</div>
<form action="<?php echo URLROOT ;?>commons/makepaymentofmembership" method="post" style="margin-bottom:0">
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 mb-4">
            <h4 class="text-center"> Please proceed to pay Rs.<?php echo MEMBERSHIPFEE?></h4>
            <input type="hidden" name="membershipfee" id="membershipfee" value="<?php echo MEMBERSHIPFEE;?>">
            <input type="hidden" name="userId" id="userId" value="<?php echo $data['email'];?>">

            <div class="card">
                <img src="<?php echo URLROOT.'/img/common/pyment.jpg';?>"  height="400px" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <div class="mb-3 row">
                    <label for="Transaction_id" class="col-sm-4 col-form-label">Transaction Id</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="upi_transaction_id" name="upi_transaction_id" placeholder="Please Provide valid Transaction Id" required>
                    </div>
                  </div>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <small>Click on confirm payment after transaction is successful.</small> 
                    
                  </div>
                  <button type="submit" name="pay" id="pay" class="btn d-grid gap-2 col-6 mx-auto" style="background:#135FEF;width:100%; cursive;font-size:1.5rem;color:white">Confirm Payment</button>
                  <button type="submit" name="paying" id="paying"  style="display: none;">Confirmed Payment...</button>
                 
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</form>
<script>
    function disableButton(){
    var btn1 = document.getElementById('pay');
    var btn2 = document.getElementById('paying');
    btn1.style.display = 'none';
    btn2.style.display = 'inline';
    btn2.disabled = true;
    }
    </script>
<?php require APPROOT . '/views/inc/common/footer.php';?>