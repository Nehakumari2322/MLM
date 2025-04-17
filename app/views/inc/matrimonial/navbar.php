<form action="<?php echo URLROOT; ?>matrimunalendusers/navform" method="post">

<section id="header-section">
  <nav class="navbar navbar-expand-lg" style="background:#ffe55b;">
    <div class="container-fluid">
      <button class="navbar-brand " href="#" name="logo" id="logo" style="border:none;background:none">PerfectDream</button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav me-3">
              <li class="nav-item">
                <button class="nav-link " name="homebtn" id="homebtn" style="background:none;border:none;" type="submit">Home</button>
              </li>
              <!-- <li class="nav-item">
                <button class="nav-link " name="searchbtn" id="searchbtn" style="background:none;border:none;" type="submit">Search</button>
              </li> -->
              <li class="nav-item">
                <button class="nav-link" name="membershipbtn" id="membershipbtn" style="background:none;border:none;" type="submit">Membership</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" name="profile" id="profile" style="background:none;border:none;" type="submit">Profile</button>
              </li>
              <!-- <li class="nav-item">
                <button class="nav-link" name="dashboard" id="dashboard" style="background:none;border:none;" type="submit">Dashboard</button>
              </li> -->
              <li style="margin-left:10px">
                <?php $profile_id = $_SESSION['profileId'];
                  if($profile_id == null){?>
                   <button class="btn border me-2" type="submit" name="registerbtn" id="registerbtn">Register</button>
                <?php }
                else{?>
                  <li class="nav-item">
                    <button class="nav-link" type="submit" aria-current="page" name="dashboard" id="dashboard" href="#" style="border:none;background:none;">Dashboard</button>
                  </li>
                  <?php }?>
                 
              </li>
              
            </ul>
           
            <!-- <button class="btn border" type="submit" name="loginbtn" id="loginbtn">Login</button> -->
          </div>
    </div>
  </nav>
 </section>
</form>