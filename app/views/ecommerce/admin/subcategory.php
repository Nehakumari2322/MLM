<?php require APPROOT . '/views/inc/adminecommerce/header.php';?>
<?php require APPROOT . '/views/inc/adminecommerce/navbar.php';?>

<div>
  <center> <h1 class="mt-4 mb-4">SUB CATEROGY</h1></center>
</div>
<form action="<?php echo URLROOT ;?>ecommerceadmins/seesubcaterogyofparticular" method="post" >


<div class="container" >
<?php $count=0; foreach($data as $dataline){
         if($count%4 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
        <input type="hidden" value="<?php echo $dataline->subcategory_id;?>" name="<?php echo 'subcategory_id'.$count;?>">
  
    <div class="col-sm-3 mt-4 ">
        <div class="card h-100" style="padding:20px; border:2px solid white;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <div class="card-body">
            <p style="text-align:center;font-size:1.5rem"><?php echo $dataline->subcategory_name;?></p> 
            <input type="hidden" value="<?php echo $dataline->subcategory_name;?>" name="<?php echo 'subcategory_name'.$count;?>">
              <button class="btn " style="color:white;background:#6c89b4;width:100%" type="submit" id="<?php echo 'subcategorytype'.$count;?>" name="<?php echo 'subcategorytype'.$count;?>">View SubCategory Type</button>
            </div>
        </div>
    </div>
    <?php '</div>' ?>
    <?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

</div>
</form>