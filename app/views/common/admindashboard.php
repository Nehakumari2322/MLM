<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/adminnavbar.php';?>


<div class="container">
    <div class="row">
        <h1 style="font-family:jomol hari" class="mb-3 text-center">Admin Dashboard</h1>
            <div class="col-sm-4" style="display:block;margin:auto">
                <form action="<?php echo URLROOT ;?>commonadmins/logmein" method="post" class="sign-in-form">
                    <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn">   <img src="<?php echo URLROOT.'/img/common/common.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                        <h4 class="text-center mt-1" style="font-family:jomolhari;">common</h4> </button> 
                    </div> 
                </form>
            </div>
    </div>
        <div class="row mt-4 mb-4">
            <h1 style="font-family:jomol hari" class="mb-3 text-center">My Services Dashboard</h1>
            <div class="col-sm-4">
                <form action="<?php echo URLROOT ;?>skilladmins/logmein" method="post" class="sign-in-form">
                    <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn">  <img src="<?php echo URLROOT.'/img/common/skil.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                        <h4 class="text-center  mt-1" style="font-family:jomolhari;">Skill development</h4></button>
                    </div> 
                </form>
            </div>
            <div class="col-sm-4"> 
                <form action="<?php echo URLROOT ;?>ecommerceadmins/logmein" method="post" class="sign-in-form">
                    <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn">  <img src="<?php echo URLROOT.'/img/common/ecom.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                        <h4 class="text-center  mt-1" style="font-family:jomolhari;">E- Commerce</h4></button>
                    </div> 
                </form>
            </div>
            <div class="col-sm-4">
                <form action="<?php echo URLROOT ;?>matrimunaladmins/logmein" method="post" class="sign-in-form">
                    <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn">  <img src="<?php echo URLROOT.'/img/common/shad.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                        <h4 class="text-center  mt-1" style="font-family:jomolhari"> Matrimonial</h4> </button>
                    </div>
                </form> 
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-4 mb-2">
                <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn">   <img src="<?php echo URLROOT.'/img/common/travel.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                    <h4 class="text-center mt-1" style="font-family:jomolhari">Traveling Website</h4> </button>
                </div>
            </div>

            <div class="col-sm-4 mb-2">
                <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn"> <img src="<?php echo URLROOT.'/img/common/bill.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                    <h4 class="text-center mt-1" style="font-family:jomolhari"> Utitlity Payment</h4> </button>
                </div>
            </div>

            <div class="col-sm-4 mb-2">
            <form action="<?php echo URLROOT ;?>insuranceadmins/logmein" method="post" class="sign-in-form">
                <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                    <button class="btn"> <img src="<?php echo URLROOT.'/img/common/insurence.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                    <h4 class="text-center mt-1" style="font-family:jomolhari"> Insurance </h4></button>
                </div>
            </form>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-4 mb-2" style="display:block;margin:auto">
                <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn"> <img src="<?php echo URLROOT.'/img/common/dmate.jpg';?>" height="200px" width="200px" alt="" style="border-radius:50%;border:2px solid yellow;margin:auto;display:block;box-shadow: 0 4px 20px 0 rgb(18 22 247 / 94%), 0 4px 20px 0 rgb(250 238 7);">
                    <h4 class="text-center mt-1" style="font-family:jomolhari"> Dmat </h4></button>
                </div>
            </div>
        </div>

    </div>


<!-- Admin -->


</form>
<?php require APPROOT . '/views/inc/common/footer.php';?>