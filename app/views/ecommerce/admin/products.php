
<?php require APPROOT . '/views/inc/adminecommerce/header.php';?>
<?php require APPROOT . '/views/inc/adminecommerce/navbar.php';?>

<?php if($store['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $store['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>

<div>
  <center> <h1 class="heading mt-4">ADD PRODUCTS</h1></center>
</div>
<form action="<?php echo URLROOT ;?>ecommerceadmins/productlist" method="post" enctype="multipart/form-data" >
<div class="container mb-4">
   <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
         <div class="card"  style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <div class="row">
               <div class="col">
                  <label for="product" class="form-label">Product name (required)</label>
                  <input type="text" class="form-control mb-4" name="productname" id="productname" placeholder="Enter product name">
               </div>
               <div class="col">
                  <label for="product" class="form-label">Product price (required)</label>
                  <input type="number" min="0" class="form-control mb-4"  max="9999999999" placeholder="Enter product price" onkeypress="if(this.value.length == 10) return false;" name="price" id="price">
               </div>
            </div>

            <div class="row">
               <div class="col">
                  <label for="product" class="form-label">Discount (%)</label>
                  <input type="number" class="form-control mb-4" name="discount" id="discount" placeholder="Enter discount %">
               </div>
               <div class="col">
                  <label for="product" class="form-label">Price after discount</label>
                  <input type="number" min="0" class="form-control mb-4"  max="9999999999" placeholder="Enter price after discount" onkeypress="if(this.value.length == 10) return false;" name="discountprice" id="discountprice">
               </div>
            </div>


            <div class="row">
               <div class="col">
                  <label for="product" class="form-label">Brand Name</label>
                  <input type="text" class="form-control mb-4" name="brand" id="brand" placeholder="Enter Brand name">
               </div>
               <div class="col">
                  <label for="product" class="form-label">SKU</label>
                  <input type="text"  class="form-control mb-4"  placeholder="Enter sku value" name="sku" id="sku">
               </div>
            </div>


            <div class="row">
               <div class="col">
                  <label for="category" class="form-label">Category</label>
                  <select name="category" id="category" class="form-control mb-4">
                        <option value="" selected>Select Category</option>
                        <?php $count=0; foreach($data as $dataline){ ?> 
                        <option value="<?php echo $dataline->category_id;?>"><?php echo $dataline->category_name;?></option>
                        <?php $count++;} ?>
                  </select>
               </div>
               <div class="col">
                  <label for="subcategory" class="form-label">Sub Category</label>
                  <select name="subcategory" id="subcategory" class="form-control mb-4" >
                        <option value="" selected>Select SubCategory</option>
                        <?php $count=0; foreach($additionalData as $dataline){ ?> 
                        <option value="<?php echo $dataline->subcategory_id;?>"><?php echo $dataline->subcategory_name;?></option>
                        <?php $count++;} ?>
                    
                  </select>
               </div>
            </div>

            <div class="row">
               <div class="col">
                  <label for="category" class="form-label">SubCategory Type</label>
                  <select name="Subcategorytype" id="Subcategorytype" class="form-control mb-4">
                        <option value="" selected>Select SubCategory Type</option>
                        <?php $count=0; foreach($moreData as $dataline){ ?> 
                        <option value="<?php echo $dataline->subcategory_type_id;?>"><?php echo $dataline->subcategory_type;?></option>
                        <?php $count++;} ?>
                  </select>
               </div>
               <div class="col">
               </div>
            </div>


            <div class="row">
               <div class="col">
                  <label for="color" class="form-label">Color</label>
                  <select name="color" id="color" class="form-control mb-4" >
                  <option value="" selected>Select Color</option>
                        <?php $count=0; foreach($newData as $dataline){ ?> 
                        <option value="<?php echo $dataline->color_id;?>"><?php echo $dataline->color;?></option>
                        <?php $count++;} ?>
                  </select>
               </div>
               <div class="col">
                  <label for="size" class="form-label">Size</label>
                  <select name="size" id="size" class="form-control mb-4" >
                  <option value="" selected>Select Size</option>
                        <?php $count=0; foreach($result as $dataline){ ?> 
                        <option value="<?php echo $dataline->size_id;?>"><?php echo $dataline->size;?></option>
                        <?php $count++;} ?>
                  </select>
               </div>
            </div>

            <div class="row">
               <div class="col">
                  <label for="image" class="form-label">image 01 (required)</label>
                  <input type="file" class="form-control mb-4" name="img1" id="img1" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" >
               </div>
               <div class="col">
                  <label for="image" class="form-label">image 02 (required)</label>
                  <input type="file" class="form-control mb-4" name="img2" id="img2" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" >
               </div>
            </div>

            <div class="row">
               <div class="col">
                  <label for="image" class="form-label">image 03 (required)</label>
                  <input type="file" class="form-control mb-4" name="img3" id="img3" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" >
               </div>
               <div class="col">
                  <label for="image" class="form-label">image 04 (required)</label>
                  <input type="file" class="form-control mb-4" name="img4" id="img4" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" >
               </div>
            </div>

            <div class="row">
               <div class="col">
                  <label for="desc" class="form-label">product details (required)</label>
                  <textarea  placeholder="enter product details" name="desc" id="desc" class="form-control mb-4"  maxlength="500" cols="30" rows="2"></textarea>
               </div>
            </div>

            <button type="submit"  class="btn" name="add_product"  id="add_product"  style="color:white;background:#5081ca">
            Add product</button>

         </div>
      </div>
      <div class="col-sm-2"></div>
   </div>
</div>

</form>
  




  <!-- <div class="row my-4"> -->
  
   










<script type ="text/javascript">
   //  function myFunction() {
   //       alert("The product list");
   //    }
    $(document).ready(function(){
     
      alert("The product list");
       function loadData(){
            $.ajax({
                url: '<?php echo URLROOT; ?>ecommerceadmins/getCategory',
                type: "POST",
               //  data: {},
               //  dataType: 'json',
                success:function(data){            
                $("#category").append(data);
               }
            });
         }
         loadData();
  });
</script>
   
</body>
</html>