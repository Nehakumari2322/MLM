<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/adminnavbar.php';?>

<form action="<?php echo URLROOT ;?>commonadmins/navigation" method="post" class="sign-in-form">
<div class="container">
    <div class="row mt-3">
        <h3 style="font-family:jomol hari" class="mb-3 text-center">Dashboard</h3>
        <div class="col-sm-4 ">
            <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn" name="payment" id="payment" type="submit">
                    <h4 style="font-family:jomolhari;">MemberShip Payment</h4>
                </button>
            </div>
        </div>
        <div class="col-sm-4 ">
            <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn" name="tmember" id="tmember" type="submit">
                    <h4 style="font-family:jomolhari;">Total member</h4>
                </button>
            </div>
        </div>
        <div class="col-sm-4 ">
            <div class="card pt-2 w3-hover-shadow" style="background:#F4D81F;border:none">
                <button class="btn" name="smember" id="smember" type="submit">
                    <h4 style="font-family:jomolhari;">Suspended member</h4>
                </button>
            </div>
        </div>
    </div>
</div>
</form>