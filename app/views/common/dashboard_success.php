
<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/navbar.php';?>


        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom:0;margin-top:0">
        <p>Transaction ID : <?php echo $_GET['tid']; ?></p>
        <p>Amount : <?php echo $_GET['amount']/100; ?></p>
        <p>We received your purchase request;<br/> we'll be in touch shortly!</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


<div class="container">
        <div class="row mt-4 mb-4">
            <h1 style="font-family:jomol hari" class="mb-3 text-center">Our Services</h1>
            <div class="col-sm-4">
                <form action="<?php echo URLROOT ;?>skillendusers/logmein" method="post" >
                <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn" type="submit">  <img src="<?php echo URLROOT.'/img/common/skil.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                        <h4 class="text-center  mt-1" style="font-family:jomolhari;">Skill development</h4></button>
                    </div> 
                </form>
            </div>
            <div class="col-sm-4"> 
                <form action="<?php echo URLROOT ;?>ecommerceendusers/logmein" method="post" >  
                <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn" type="submit">  <img src="<?php echo URLROOT.'/img/common/ecom.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                        <h4 class="text-center  mt-1" style="font-family:jomolhari;">E- Commerce</h4></button>
                    </div> 
                </form>
            </div>
            <div class="col-sm-4">
                <form action="<?php echo URLROOT ;?>matrimunalendusers/logmein" method="post" >
                    <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn" type="submit">  <img src="<?php echo URLROOT.'/img/common/shad.jpg';?>" height="200px"  width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                         <h4 class="text-center  mt-1" style="font-family:jomolhari"> Matrimonial</h4> 
                    </button>
                    </div>
                </form> 
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-4 mb-2">
            <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn">  <a href="http://akangar.in/" target="_blank">  <img src="<?php echo URLROOT.'/img/common/travel.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                    <h4 class="text-center mt-1" style="font-family:jomolhari">Travelling Website</h4></a> </button>
                </div>
            </div>

            <div class="col-sm-4 mb-2">
            <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn"> <img src="<?php echo URLROOT.'/img/common/bill.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                    <h4 class="text-center mt-1" style="font-family:jomolhari"> Utitlity Payment</h4> </button>
                </div>
            </div>

            <div class="col-sm-4 mb-2">
            <form action="<?php echo URLROOT ;?>insurances/logmein" method="post" >
                <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn"> <img src="<?php echo URLROOT.'/img/common/insurence.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                    <h4 class="text-center mt-1" style="font-family:jomolhari"> Insurance </h4></button>
                </div>
            </form>
            </div>

        </div>

        <div class="row mb-4">
            <div class="col-sm-4 mb-2" style="display:block;margin:auto">
            <form action="<?php echo URLROOT ;?>demates/logmein" method="post" >
                <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn" type="submit"><img src="<?php echo URLROOT.'/img/common/dmate.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                        <h4 class="text-center mt-1" style="font-family:jomolhari"> Demat </h4>
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>


<!-- Admin -->

</form>

<?php require APPROOT . '/views/inc/common/footer.php';?>
