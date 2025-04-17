<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT.'/stylesheet/css/matrimonial/style.css';?>">
    <link rel="stylesheet" href="<?php echo URLROOT.'/stylesheet/css/matrimonial/media.css';?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"  rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"  rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Perfect Dream</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Agbalumo&display=swap');
    </style>
  </head>
 
 

<body style="background:url('<?php echo URLROOT.'/img/matrimonial/bg.avif';?>'); background-repeat: no-repeat;background-size: cover;">
<?php require APPROOT . '/views/inc/matrimonial/navbar.php';?>
<form action="<?php echo URLROOT ;?>matrimunalendusers/takingtocompleteregister" method="post" class="sign-in-form">
<div class="container ">
    <div class="row mt-5 mb-5">
        <div class="col-sm-8 mt-5 p-4 mb-5" style="margin:auto;display:block">
            <div class="card text-center p-4 mb-5" style="background:none">
                <h5 style="font-family: 'Pacifico', cursive;font-size:2rem;color:white"> You have not Completed Your Profile for Matrimonial Sevice So please Register First Then You will be able  to View your profile </h5>
                <div class="col-6 just mt-2" style="margin:auto;display:block">
                    <button class="btn border me-2" type="submit" id="registercomplete" name="registercomplete" onclick="document.getElementById('id01').style.display='block'" >Complete Your Profile</button>
                  </div>
            </div>
        </div>
    </div>
</div>
</form>
<?php require APPROOT . '/views/inc/common/footer.php';?>