<form action="<?php echo URLROOT ;?>commons/homenavbar" method="post" style="margin-bottom:0">
<nav class="navbar navbar-expand-lg" style="background:#ffe55b">
  <div class="container-fluid">
    <button class="navbar-brand "  href="#" name="home" id="home" style="background:none;border:none"><b> PerfectDream </b>&nbsp;&nbsp; <i class='bx bxs-home'></i></button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <button class="nav-link" type="submit" aria-current="page" name="login" id="login" href="#" style="border:none;background:none;"><b> <i class='bx bxs-user'></i> &nbsp;
            <?php if($_SESSION['userid'] == null){
                             echo "SignUp";
                            }
                            else{
                              echo "Login";  
                              }
                      ?>
           </b></button>
           
        </li>
      </ul>
    </div>
  </div>
</nav>
</form>