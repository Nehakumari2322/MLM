<?php require APPROOT . '/views/inc/adminecommerce/header.php';?>
<?php require APPROOT . '/views/inc/adminecommerce/navbar.php';?>

<?php if($data['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $data['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>

<div>
  <center> <h1 class="mt-4 mb-4">CREATE CATEROGY</h1></center>
</div>
<form action="<?php echo URLROOT ;?>ecommerceadmins/creatcaterogy" method="post" >

<div class="container">
    <div class="row">
        <div class="col-sm-6" style="display:block;margin:auto">
            <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                <div class="row">
                    <div class="col">
                        <label for="product" class="form-label">Category Name</label>
                        <input type="text" class="form-control mb-4" name="name" id="name" placeholder="Enter Category Name">
                    </div>   
                </div>
                <button type="submit"  class="btn" name="add_category"  id="add_category"  style="color:white;background:#5081ca">
            Add Category</button>
            </div>
        </div>
    </div>
</div>

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
