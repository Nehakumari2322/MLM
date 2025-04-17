
<?php require APPROOT . '/views/inc/adminecommerce/header.php';?>
<?php require APPROOT . '/views/inc/adminecommerce/navbar.php';?>


<div>
  <center> <h1 class="heading mt-4"> PRODUCTS ADDED</h1></center>
</div>

<form action="<?php echo URLROOT ;?>ecommerceadmins/deleteproduct" method="post" >
<div class="container" >
<?php $count=0; foreach($data as $dataline){
         if($count%3 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
        <input type="hidden" value="<?php echo $dataline->product_id;?>" name="<?php echo 'productId'.$count;?>">
  <!-- <div class="row my-4"> -->
    <div class="col-sm-4 mt-4 ">
        <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <div class="card-body">
                <img src="<?php echo URLROOT.'/img/ecommerce/'.$dataline->product_image1;?>" height="230px" width="320px" alt="">
                <p><b style="font-size:2rem"><?php echo $dataline->product_name;?></b></p>
                <div class="row">
                    <div class="col-sm-6">
                        <p>Rs.&nbsp;<del style="color:red"><?php echo $dataline->product_price;?></del> <br>
                        <?php echo $dataline->discount_price;?></p>
                    </div>
                    <div class="col-sm-6">
                        <p>-<?php echo $dataline->product_discount;?><span style="color:green">%</span> </p>
                    </div>
                </div>
                <p><?php echo $dataline->product_description;?></p>
            
                <div class="card-footer">
                <button class="btn bg-danger" style="width:100%" type="submit" id="<?php echo 'delete'.$count;?>" name="<?php echo 'delete'.$count;?>">Delete</button>
               </div>
            
            </div>
        </div>
    </div>
    <?php '</div>' ?>
    <?php $count++;} ?> 
              <!-- <?php echo "totalcount".$count;?> -->
           <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

</div>

</form>




<!-- <div class="container" style="padding-left:20%; padding-right:20%">
   <div class="row" >
      <div class="col">
         <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <img src="<?php echo URLROOT.'/img/ecommerce/'.$data->product_image1;?>" alt="">
            <p><b style="font-size:2rem"><?php echo $data->product_name;?></b></p>
            <div class="row">
               <div class="col-sm-6">
                  <p>Rs.&nbsp;<del style="color:red"><?php echo $data->product_price;?></del> <br>
                  <?php echo $data->discount_price;?></p>
               </div>
               <div class="col-sm-6">
                  <p><?php echo $data->product_discount;?><span style="color:green">%</span> </p>
               </div>
            </div>
            <p><?php echo $data->product_description;?></p>
           
         </div>
      </div>
   </div>
</div> -->