<?php require APPROOT . '/views/inc/adminecommerce/header.php';?>
<?php require APPROOT . '/views/inc/adminecommerce/navbar.php';?>

<?php if($additionalData['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $additionalData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>

<div>
  <center> <h1 class="mt-4 mb-4">CREATE SUB CATEROGY</h1></center>
</div>
<form action="<?php echo URLROOT ;?>ecommerceadmins/createsubcaterogyitems" method="post" enctype="multipart/form-data">

<div class="container">
    <div class="row">
        <div class="col-sm-6" style="display:block;margin:auto">
            <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                <div class="row">
                    <div class="col">
                        <label for="subcategory" class="form-label">Sub Category</label>
                        <select name="subcategory" id="subcategory" class="form-control mb-4" >
                            <option value="" selected>Select SubCategory</option>
                            <?php $count=0; foreach($data as $dataline){ ?> 
                            <option value="<?php echo $dataline->subcategory_id;?>"><?php echo $dataline->subcategory_name;?></option>
                            <?php $count++;} ?>    
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="product" class="form-label">Sub Category Items</label>
                        <input type="text" class="form-control mb-4" name="items" id="items" placeholder="Enter Sub Category Name">
                    </div>   
                </div>
                <div class="row">
                    <div class="col">
                        <label for="product" class="form-label">Quantity</label>
                        <input type="text" class="form-control mb-4" name="no" id="no" placeholder="Enter Sub Category Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="product" class="form-label">image</label>
                        <input type="file" class="form-control mb-4" name="image[]" id="image[]" accept="image/*">
                    </div>
                </div>
                <button type="submit"  class="btn" name="add_subcategory"  id="add_subcategory"  style="color:white;background:#5081ca">
            Add Sub Category</button>
            </div>
        </div>
    </div>
</div>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
