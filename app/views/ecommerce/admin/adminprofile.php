
<?php require APPROOT . '/views/inc/adminecommerce/header.php';?>
<?php require APPROOT . '/views/inc/adminecommerce/navbar.php';?>

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card" style="padding:20px; border:2px solid white;box-shadow: 0px 4px 20px rgba(5,57,94,.5); margin-top:100px;">
                <h2 class="text-center mb-4">UPDATE PROFILE</h2>
               
                <div class="mb-3">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your username" aria-describedby="emailHelp" style="background:#d5d0d0">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter old password" style="background:#d5d0d0">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter new password" style="background:#d5d0d0">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="confirm new password" style="background:#d5d0d0">
                </div>
  
                <button type="submit" class="btn " style="background-color:#6c97d8;color:white">Submit</button>

            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>