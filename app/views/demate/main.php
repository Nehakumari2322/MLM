<?php require APPROOT . '/views/inc/common/header.php';?>
<style>
  body{
    background-image:url(<?php echo URLROOT.'/img/common/money.jpg';?>);
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<form action="<?php echo URLROOT ;?>commons/navbar" method="post" style="margin-bottom:0">
<nav class="navbar navbar-expand-lg " style="background:#ffe55b" >
  <div class="container-fluid">
    <a class="navbar-brand "  href="#">PerfectDream</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <button class="nav-link" type="submit" aria-current="page" name="home" id="home" href="#" style="border:none;background:none;">Home</button>
        </li> 
    
      </ul>
      
    </div>
  </div>
</nav>
</form>


<form action="<?php echo URLROOT ;?>demates/main" method="post" style="margin-bottom:0">
<?php if($data['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom:0;margin-top:0">
        <?php echo $data['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<div class="container">
    <div class="row mt-4" >
      <div class="col-sm-3" style="display:block;margin:auto">
        <div class="card1">
          <button class="btn" type="button" style="background:#84eaf0;padding-bottom:0" data-bs-toggle="modal" data-bs-target="#exampleModal" ><a href="http://mosl.co/wc11AX5V23" target="_blank"> 
            <p class="text-center mt-1" style="font-family:jomolhari;color:black;margin-bottom:0.4rem"><b> Create your Demat </b> </p> </a> 
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- <div class="modal-header">
                  
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body">
                   Enter new Demat Account number to avail the benefits
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
                  
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="row" >
      <div class="col-sm-1"></div>
      <div class="col-sm-3 mt-4" style="display:block;margin:auto">
        <div class="card1" style="border:none;background:none">
          <img src="<?php echo URLROOT.'/img/common/confirm.jpg';?>" height="400px" width="300px" alt="">
        </div>
      </div>
      <div class="col-sm-4 mt-3" style="display:block;margin:auto">
        <div class="card p-2">
          <p style="font-family:jomolhari;"><b> Please Enter Your new Demat Account number to avail the benefits </b></p>
          <input type="text" class="form-control" placeholder = "Account Number" name="ac" id="ac" aria-label="Server" >
            <button class="btn mt-2" type="submit" name="update" id="update" style="background:#84eaf0;padding-bottom:0"> 
              <p class="text-center text-dark" style="font-family:jomolhari;margin-bottom:0.4rem"><b>Update Your Demat </b> </p> 
            </button>
        </div>
      </div>
      <div class="col-sm-1"></div>
      
    </div>
        
    
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>