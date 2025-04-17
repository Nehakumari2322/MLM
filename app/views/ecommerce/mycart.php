<?php require APPROOT . '/views/inc/ecommerce/header.php';?>
<?php require APPROOT . '/views/inc/ecommerce/navbar.php';?>
<form action="<?php echo URLROOT ;?>ecommerceendusers/removeformcart" method="post" >


<?php if($additionalData['message']){ ?>
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
      <h6>  <?php echo $additionalData['message'];?></h6>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>

<div class="container-fluid" style="width:90%">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>MY CART <img src="<?php echo URLROOT.'/img/ecommerce/cart.png'?>" height="40px" width="60px" alt=""></h1>
        </div>
        <div class="col-lg-10">
            <table class="table table-responsive ">
            <thead class="text-center">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Product Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Color</th>
                <th scope="col">Size</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
             <?php
            //   $total =0; 
              $count=0; foreach($data as $dataline){ 
                // $total = $total + $dataline->price; 
                ?>
               
              <tr>
                <th scope="row"><?php echo $count+1 ?></th>
                <td>
                  <img
                    src="<?php echo URLROOT.'/productimage/'.$dataline->product_image1;?>"
                    style="height: 50px; width: 50px"
                    alt=""
                  />
                </td>
                <td><?php echo $dataline->product_name; ?></td>
                <input type="hidden" name="<?php echo 'cart_id'.$count;?>" value="<?php echo $dataline->id ;?>"> 
                <input type="hidden" name="<?php echo 'product_id'.$count;?>" value="<?php echo $dataline->product_id ;?>"> 
                <td><?php echo $dataline->brand; ?></td>
                <td><?php echo $dataline->product_price; ?></td>
                <input type="hidden" class="iprice" name="<?php echo 'price'.$count;?>" value="<?php echo $dataline->price ;?>"> 
                <td><?php echo $dataline->product_color; ?></td>
                <td><?php echo $dataline->product_size; ?></td>
                <td><?php echo $dataline->quantity; ?></td>
                <!-- <td><input class="text-center iquantity" onchange="subTotal()"  type="number" value="<?php echo $dataline->quantity;?>"  min="1" max="10"></td> -->
                <!-- <input type="hidden" name="<?php echo 'quantity'.$count;?>" value="<?php echo $dataline->quantity;?>">  -->
                <td ><?php echo $dataline->total_price;?></td>
                <input type="hidden" name="<?php echo 'total'.$count;?>" value="<?php echo $dataline->total_price;?>"> 
                <td>
                
                  <button class="btn " type="submit" name="<?php echo 'remove'.$count;?>" id="<?php echo 'remove'.$count;?>" ><img src="<?php echo URLROOT.'/img/ecommerce/delete.png'?>" alt=""></button>
                </td>
              </tr>
              <?php  $count++;}; ?>
              <input type="hidden" name="totalcount" value="<?php echo $count;?>">
            </tbody>
            </table>
        </div>

        <div class="col-lg-2">
            <div class="card bg-light p-4">
                <h3>Grand Total </h3>
                <hr>
                <h5 class="text-right" id="gtotal"></h5>
                <h4 class="text-center">&#8377; <?php echo $dataline->grand_total_price;?></h4>
                <input type="hidden" name="<?php echo 'total';?>" value="<?php echo $total;?>"> 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cash" id="cash">
                    <label class="form-check-label" for="cash">
                       Cash on Delivery
                    </label>
                </div>
                <button class="btn btn-block mt-3" style="background:#2d6197;color:white" name="purchase" id="purchase" type="submit">Procced to Buy</button>
            </div>
        </div>
    </div>
</div>
     </form>

<script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++){

            itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
            gt = gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText = gt;
    }

    subTotal();

</script>
<?php require APPROOT . '/views/inc/ecommerce/footer.php';?>