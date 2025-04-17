
<?php require APPROOT . '/views/inc/adminecommerce/header.php';?>
<?php require APPROOT . '/views/inc/adminecommerce/navbar.php';?>


<div>
  <center> <h1 class="mt-4 mb-4">CATEROGY</h1></center>
</div>
<form action="<?php echo URLROOT ;?>ecommerceadmins/seesubcaterogy" method="post" >


<div class="container" >
<?php $count=0; foreach($data as $dataline){
         if($count%4 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
        <input type="hidden" value="<?php echo $dataline->category_id;?>" name="<?php echo 'category_id'.$count;?>">
  
    <div class="col-sm-3 mt-4 ">
        <div class="card" style="padding:20px; border:2px solid white;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <div class="card-body">
            <p style="text-align:center;font-size:1.2rem"><?php echo $dataline->category_name;?></p> 
              <button class="btn " style="color:white;background:#6c89b4;width:100%" type="submit" id="<?php echo 'subcategory'.$count;?>" name="<?php echo 'subcategory'.$count;?>">View SubCategory</button>
            </div>
        </div>
    </div>
    <?php '</div>' ?>
    <?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

</div>
</form>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

