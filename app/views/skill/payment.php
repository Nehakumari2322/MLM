<?php require APPROOT . '/views/inc/skill/header.php';?>
<?php require APPROOT . '/views/inc/skill/navbar.php';?>

<form action="<?php echo URLROOT ;?>skillendusers/paymentofcourse" method="post" >
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 mb-4">
            <h4 class="text-center"> Please proceed to pay <?php echo $data['price'];?></h4>
            <input type="hidden" name="price" id="price" value="<?php echo $data['price'];?>">
            <input type="hidden" name="courseId" id="courseId" value="<?php echo $data['courseId'];?>">
            <input type="hidden" name="userId" id="userId" value="<?php echo $data['userId'];?>">

            <div class="card">
                <img src="<?php echo URLROOT.'/img/common/pyment.jpg';?>"  height="500px" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <div class="mb-3 row">
                    <label for="Transaction_id" class="col-sm-4 col-form-label">Transaction Id</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="upi_transaction_id" name="upi_transaction_id" required>
                    </div>
                  </div>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <small>Click on confirm payment after transaction is successful.</small> 
                    
                  </div>
                  <button type="submit" name="pay" id="pay" class="btn d-grid gap-2 col-6 mx-auto" style="background:#135FEF;width:100%; cursive;font-size:1.5rem">Confirm Payment</button>
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