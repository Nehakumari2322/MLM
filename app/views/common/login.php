<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/assests/log.css" />
    <title>Login-register</title>
    <link rel="icon" type="images/x-icon" href="<?php echo URLROOT."/img/course.jpg";?>" />

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />

    <script src="https://kit.fontawesome.com/60c047d98e.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://kit.fontawesome.com/60c047d98e.js" crossorigin="anonymous"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Instrument+Serif&family=Slabo+27px&family=Ubuntu:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-jDU6e2v5z5U5g5N5z5HG1v5X9O5p6U5O6U5l6e5v5a5E5z5M5z5j5v5G5v5H5z5y5x5y5v5A5w5b5j5q5e5p5o5g=="
      crossorigin="anonymous"
    />
    <!-- Exgternal css-->
    <link rel="stylesheet" href="assests/style.css" />
    <!-- <link rel="stylesheet" href="assests/script.css" /> -->
    <link rel="stylesheet" href="assests/log.css" />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      .container {
        position: relative;
        width: 70vw;
        height: 80vh;
        background: #fff;
       box-shadow: 0 4px 20px 0 rgba(23, 5, 222, 0.92),
          0 6px 20px 0 rgba(11, 44, 227, 0.802);
        
        overflow: hidden;
      }

      .container::before {
        content: "";
        position: absolute;
        top: 0;
        left: -50%;
        width: 100%;
        height: 100%;
        background: linear-gradient(-45deg, #0b22f5, #080db0);
        z-index: 6;
        transform: translateX(100%);
        transition: 1s ease-in-out;
      }

      .signin-signup {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        z-index: 5;
      }

      form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 40%;
        min-width: 238px;
        padding: 0 10px;
      }

      form.sign-in-form {
        opacity: 1;
        transition: 0.5s ease-in-out;
        transition-delay: 1s;
      }

      form.sign-up-form {
        opacity: 0;
        transition: 0.5s ease-in-out;
        transition-delay: 1s;
      }

      .title {
        font-size: 35px;
        color:#363030;
        margin-bottom: 10px;
      }

      .input-field {
        width: 100%;
        height: 50px;
        background: #f0f0f0;
        margin: 10px 0;
        border: 2px solid rgb(42, 176, 243);
        border-radius: 50px;
        display: flex;
        align-items: center;
      }

      .input-field i {
        flex: 1;
        text-align: center;
        color: #ffc104;
        font-size: 18px;
      }

      .input-field input {
        flex: 5;
        background: none;
        border: none;
        outline: none;
        width: 100%;
        font-size: 18px;
        font-weight: 600;
        color: rgb(42, 176, 243);
      }

      .btn {
        width: 150px;
        height: 50px;
        border: none;
        border-radius: 50px;
        background: hsla(58, 98%, 48%, 0.985);
        color: black;
        font-weight: 600;
        margin: 10px 0;
        text-transform: uppercase;
        cursor: pointer;
      }

      .btn:hover {
        background: rgb(235, 200, 5);
        color:#151515;
      }

      .social-text {
        margin: 10px 0;
        font-size: 16px;
      }

      .social-media {
        display: flex;
        justify-content: center;
      }

      .social-icon {
        height: 45px;
        width: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #444;
        border: 1px solid #444;
        border-radius: 50px;
        margin: 0 5px;
      }

      a {
        text-decoration: none;
      }

      .social-icon:hover {
        color: #df4a59;
        border-color: #df1c1f;
      }

      .panels-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
      }

      .panel {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        width: 35%;
        min-width: 238px;
        padding: 0 10px;
        text-align: center;
        z-index: 6;
      }

      .left-panel {
        pointer-events: none;
      }
      h3 {
        color: rgb(13, 13, 13);
      }
      .content {
        color: #141414;
        transition: 1.1s ease-in-out;
        transition-delay: 0.5s;
        margin-top: 60px;
      }

      .panel h3 {
        font-size: 24px;
        font-weight: 600;
      }

      .panel p {
        font-size: 15px;
        padding: 10px 0;
      }

      .image {
        width: 100%;
        transition: 1.1s ease-in-out;
        transition-delay: 0.4s;
      }

      .left-panel .image,
      .left-panel .content {
        transform: translateX(-200%);
      }

      .right-panel .image,
      .right-panel .content {
        transform: translateX(0);
      }

      .account-text {
        display: none;
      }

      /*Animation*/

      .container.sign-up-mode::before {
        transform: translateX(0);
      }

      .container.sign-up-mode .right-panel .image,
      .container.sign-up-mode .right-panel .content {
        transform: translateX(200%);
      }

      .container.sign-up-mode .left-panel .image,
      .container.sign-up-mode .left-panel .content {
        transform: translateX(0);
      }

      .container.sign-up-mode form.sign-in-form {
        opacity: 0;
      }

      .container.sign-up-mode form.sign-up-form {
        opacity: 1;
      }

      .container.sign-up-mode .right-panel {
        pointer-events: none;
      }

      .container.sign-up-mode .left-panel {
        pointer-events: all;
      }

      /*Responsive*/

      @media (max-width: 779px) {
        .container {
          width: 100vw;
          height: 100vh;
        }
      }

      @media (max-width: 635px) {
        .container::before {
          display: none;
        }
        form {
          width: 80%;
        }
        form.sign-up-form {
          display: none;
        }
        .container.sign-up-mode2 form.sign-up-form {
          display: flex;
          opacity: 1;
        }
        .container.sign-up-mode2 form.sign-in-form {
          display: none;
        }
        .panels-container {
          display: none;
        }
        .account-text {
          display: initial;
          margin-top: 30px;
        }
      }

      @media (max-width: 320px) {
        form {
          width: 90%;
        }
      }
    </style>
  </head>

  <body>

  
  <nav class="navbar navbar-expand-lg "   style="background:#ffe55b">
  <form action="<?php echo URLROOT ;?>commons/homenavbar" method="post" style="margin-bottom:0">
    <div class="container-fluid">
      <button class="navbar-brand" href="#" name="home" id="home" style="background:none;border:none"> PerfectDream  <i class='bx bxs-home'></i></button>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </form>
  </nav>


  <?php if($data['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $data['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

  <?php } ?>

 

    <div class="container mt-5">
      <div class="signin-signup">
        <form action="<?php echo URLROOT ;?>commons/agentsLogin" method="post" class="sign-in-form">
      
          <h2 class="title">Login</h2>
          <div class="input-field">
          <i class="fas fa-envelope"></i>
            <input type="email" name="user_id" id="user_id" placeholder="email"  required/>
          </div>
          
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password"  />
          </div>
          <input type="submit" name="loginagent" id="loginagent" value="Login" class="btn">

          <p class="account-text">
            Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a>
          </p>
        </form>
        <form action="<?php echo URLROOT ;?>commons/userRegisteration" method="post" class="sign-up-form">
          <h2 class="title">Signup</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" id="username" placeholder="Name"  />
          </div>
      
          <div class="input-field">
          <i class="fa-solid fa-phone"></i>
            <input type="number" name="no" id="no" placeholder="Phone no"  required min='1111111111' max="9999999999"/>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="email"  required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="pasword2" id="pasword2" placeholder="Password"  required/>
          </div>
          <div class="input-field">
          <i class="fa-solid fa-people-group"></i>
            <input type="text" name="member" id="member" placeholder="Member_id"  value="<?php echo $data['referral']?>" readonly/>
          </div>
          <input type="submit" name="register" id="register" value="Sign up" class="btn" />
        </form>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3 style="color:white">Signup to PerfectDream</h3>
            <p style="color:white">
            Welcome to PerfectDream<br>
            Businesses that involve selling products to family and friends and recruiting other people to do the same are called multi-level marketing (MLM), network marketing, or direct marketing businesses. Some MLMs are illegal pyramid schemes.
            </p>
            <button class="btn" id="sign-in-btn">LogIn</button>
          </div>
          <img src="<?php echo URLROOT.'/img/common/signin.svg';?>" alt="" class="image" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3 style="color:white">New to PerfectDream</h3>
            <p style="color:white">
            Welcome to PerfectDream <br>
            MLM is not a pyramid scheme, it will pay you based on your sales to retail customers, without having to recruit new distributors.
            </p>
            <button class="btn" id="sign-up-btn">Signup</button>
          </div>
          <img src="<?php echo URLROOT.'/img/common/signup.svg';?>" alt="" class="image" />
        </div>
      </div>
    </div>

    <script>
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container = document.querySelector(".container");
      const sign_in_btn2 = document.querySelector("#sign-in-btn2");
      const sign_up_btn2 = document.querySelector("#sign-up-btn2");

      sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
      });

      sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
      });

      sign_up_btn2.addEventListener("click", () => {
        container.classList.add("sign-up-mode2");
      });
      sign_in_btn2.addEventListener("click", () => {
        container.classList.remove("sign-up-mode2");
      });
    </script>

    <script type="text/javascript">
      
      window.onload = function(){
        document.getElementById('sign-up-btn2').click();
        document.getElementById('sign-up-btn').click();

    }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>     

  </body>
</html>
