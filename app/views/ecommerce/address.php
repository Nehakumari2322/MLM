<?php require APPROOT . '/views/inc/ecommerce/header.php';?>
<?php require APPROOT . '/views/inc/ecommerce/navbar.php';?>
<style>
    .container {
      padding: 16px;
    }
      input {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
}
.savebtn{
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%; 
    }
    .savebtn:hover {
      opacity: 0.8;
    }
    
    /* Extra styles for the cancel button */
    .cancelbtn {
      color:white;
      width: 100%;
      padding: 14px 20px;
      margin: 8px 0;
      background-color: #f44336;
      border:none;
}
</style>

<form  action="<?php echo URLROOT; ?>ecommerceendusers/placeorder" method="post">
<input type="hidden" name="cartId" id="cartId" value="<?php echo $data->id;?>">

<!-- <?php echo $data->id;?> -->
<h3 class="text-center mt-4">Fill Your Address To make order</h3>
<div class="container mt-4" style="border:2px solid black;border-radius:10px">
    <div class="row" >
        <div class="col-sm-3">
            <label for="name">Name</label>
            <input type="text" placeholder="Enter Name" id="name" name="name" class="form-control"   required>
        </div>
        <div class="col-sm-3">
            <label for="phone">Phone Number</label>
            <input type="number" class="form-control" placeholder="Phone Number" id="phone" name="phone">
        </div>
        <div class="col-sm-6">
            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" id="email" name="email" class="form-control"  required>
        </div>
    </div>
       
       <div class="row">
           <div class="col">
               <label for="Address">Address</label>
               <input type="text" class="form-control" name="address" id="address" placeholder="Address" aria-label="Address">
           </div>
           <div class="col">
               <label for="Pincode">Pincode</label>
               <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Pincode" aria-label="Pincode">
           </div>
       </div>
       <div class="row">
           <div class="col">
               <label for="Address Line 1">Address Line 1</label>
               <input type="text" class="form-control" name="address_line_1" id="address_line_1" placeholder="Address Line 1" aria-label="Address Line 1">
           </div>
           <div class="col">
               <label for="Address Line 2">Address Line 2</label>
               <input type="text" class="form-control" name="address_line_2" id="address_line_2" placeholder="Address Line 2" aria-label="Address Line 2">
           </div>
       </div>
       <div class="row">
           <div class="col">
               <label for="city">City</label>
               <input type="text" class="form-control" id="city" name="city" placeholder="city" aria-label="city">
           </div>
           <div class="col">
               <label for="State">State</label>
               <input type="text" class="form-control" id="state" name="state" placeholder="State" aria-label="State">
           </div>
           <div class="col">
               <label for="POC Name">Country</label>
               <input type="text" class="form-control" id="country" name="country" placeholder="Country" aria-label="Country">
           </div>
       </div>
       <div class="row">
           <div class="col-sm-6"><button id="addbtn" name="addbtn" type="submit" class="savebtn">Place Order</button></div>
           <div class="col-sm-6"><button type="submit" id="cancel" name="cancel" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"  formnovalidate="formnovalidate">Cancel</button></div>
       </div>
   </div><!--container-->
</form>