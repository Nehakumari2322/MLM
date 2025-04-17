
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login -PerfectDream</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <style type="text/css">
            /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 250px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 75%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 0.8rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .message {
    font-weight: 600;
    font-size: 0.6rem;
    letter-spacing: 0.6px;
    padding-left: 0px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 110%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
        </style>
    </head>
    <body>
        
       <div class="wrapper">
        <div class="logo">
            <img src="<?php echo URLROOT.'/img/logo1.png';?>" alt="">
        </div>
<!--         <div class="text-center fs-10 small">
            <br>National Federation of Tourism Transport Co-operatives of India Ltd. 
        </div> -->
        <div class="text-center mt-4 name">
        <?php echo INSTITUTENAME; ?> 
        </div>
        <form action="<?php echo URLROOT ;?>commonadmins/agentsLogin" method="post" >
            <input type="hidden" name="todaysdate" id='todaysdate'>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="userid" id="userid" placeholder="UserId" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="message text-danger">
                <?php 
                    if($data == 'password_mismatch'){
                        echo "Invalid Username/Password, Please try again ! ";
                    }
                    else {
                        // echo "logged in";
                    }
                ?>
            </div>
            <div class="d-flex align-items-center">
               <button class="btn mt-3  border border-5 border-light " name='loginagent'>Login</button>
           </div>
           
        </form>
        <!-- <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div> -->
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        var today = new Date();
        // alert(today);
        var now = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
        // alert(now);
            $("#todaysdate").val(now);
            });
</script>
    </body>
</html>