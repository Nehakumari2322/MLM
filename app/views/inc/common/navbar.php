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
        
       <?php $selfMember = $_SESSION['selfMember'];
        if($selfMember == null){?>
      
       <?php }
       else{?>
        <li class="nav-item">
          <button class="nav-link" type="submit" aria-current="page" name="dashboard" id="dashboard" href="#" style="border:none;background:none;">Dashboard</button>
        </li>
        <?php }?>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <?php if($_SESSION['flag'] == 0){?>
              <button class="nav-link" type="submit" aria-current="page" name="kyc" id="kyc" style="border:none;background:none;"><b>KYC<img src="https://cdn3.iconfinder.com/data/icons/toolbar-people/512/user_error_man_male_profile_warning-512.png" id="blink" height="30px"></i> &nbsp;
                              <?php
                              echo $_SESSION['name'];
                            }
                            else{?>
                            
                              <button class="nav-link" type="button" aria-current="page" name="login" id="login" href="#" style="border:none;background:none;"><b><img src="<?php echo URLROOT.'/img/common/completed.png';?>" height="25px"></i> &nbsp;
                              <?php
                              echo $_SESSION['name'];
                              }
                      ?>
           </b></button>
           
        </li>
       
      </ul>
    </div>
  </div>
</nav>
</form>
<script type="text/javascript"> 
        var blink = 
            document.getElementById('blink'); 
 
        setInterval(function () { 
            blink.style.opacity = 
            (blink.style.opacity == 0 ? 1 : 0); 
        }, 500); 
 </script> 