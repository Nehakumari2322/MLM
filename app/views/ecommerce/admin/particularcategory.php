<?php require APPROOT . '/views/inc/adminecommerce/header.php';?>
<?php require APPROOT . '/views/inc/adminecommerce/navbar.php';?>

<form action="<?php echo URLROOT ;?>ecommerceadmins/maintaininventery" method="post" >
<div>
  <center> <h1 class="mt-4 mb-4"><?php echo $additionalData['name'];?></h1></center>
</div>




<div class="container" >
<?php $count=0; foreach($data as $dataline){
         if($count%4 == 0){ echo '<div class="row my-4 mt-4 " >';}?>
          <input type="hidden" value="<?php echo $dataline->subcategory_type_id;?>" name="<?php echo 'subcategory_type_id'.$count;?>">
    <div class="col-sm-3 mt-4 ">
        <div class="card" style="padding:20px; border:2px solid white;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <div class="card-body">
            <h2 style="text-align:center"><?php echo $dataline->quantity;?></h2>
            <p class="btn" style="background-color:#bab7b7; text-align:center;width:100%"><?php echo $dataline->subcategory_type;?></p>
              <button class="btn " style="color:white;background:#6c89b4;width:100%" type="submit" id="<?php echo 'seemore'.$count;?>" name="<?php echo 'seemore'.$count;?>">Make Change</button>
            </div>
        </div>
    </div>
    <?php '</div>' ?>
    <!-- <br> -->
    <?php $count++;} ?> 
    
              <!-- <?php echo "totalcount".$count;?> -->
           <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

</div>



</form>