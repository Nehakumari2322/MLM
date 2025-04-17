<?php require APPROOT . '/views/inc/adminskill/header.php';?>
<?php require APPROOT . '/views/inc/adminskill/navbar.php';?>


<?php if($data['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $data['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
  <?php } ?>
    <!-- Add Courses Section-->
    <form action="<?php echo URLROOT ;?>skilladmins/addtrainerDetails" method="post" enctype="multipart/form-data" >
<div class="container">
    <div class="row">
        <div class="card1" style="border:none">
            <h2  style="text-align: center;font-family: 'Times New Roman', Times, serif;">Add Trainer Details</h2>

            <div class="center">
                <div class="form-input" >
                    <label for="file-ip-1">Upload Image</label>
                    <input type="file" id="file-ip-1" name="image[]" id="name[]" accept="image/*" onchange="showPreview(event);"/>
                    <div class="preview">
                        <img id="file-ip-1-preview" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6" style="display:block;margin:auto">
            <div class="form-outline mt-4">
                <input type="text" id="form3Example3" class="form-control" name="name" id="name"  placeholder="Enter Trainer Name"/>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-4" name="add_trainer" id="add_trainer" style=" border-radius: 50px; padding-left: 5%;padding-right: 5%; width:50%;display:block;margin:auto">Submit</button>
</div>
</form>


    <script>
      function showPreview(event) {
        if (event.target.files.length > 0) {
          var src = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("file-ip-1-preview");
          preview.src = src;
          preview.style.display = "block";
        }
      }
    </script>

<?php require APPROOT . '/views/inc/common/footer.php';?>