<?php require APPROOT . '/views/inc/adminskill/header.php';?>
<?php require APPROOT . '/views/inc/adminskill/navbar.php';?>
<?php if($moreData['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $moreData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
  <?php } ?>
    <!-- Add Courses Section-->
    <form action="<?php echo URLROOT ;?>skilladmins/editCouseData" method="post" enctype="multipart/form-data" >
    <div class="container mt-4">
      <div class="card" style="border:none">
    
        <h2 style="text-align: center;font-family: 'Times New Roman', Times, serif;"> Add Course </h2>
       
      
       <input type="hidden" name="course_id" id="course_id" value="<?php echo $data->course_id;?>">
       <input type="hidden" name="batch_id" id="batch_id" value="<?php echo $data->batch_schedule_id;?>">
       <!-- <?php echo $data->course_id;?> -->
        <!-- Section: Design Block -->
        <section class="text-center">
          <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="form-outline mb-4">
                    <input type="text"  class="form-control" name="course" id="course"  value="<?php echo $data->cname;?>"/>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label for="Date">Start Date</label>
                        <input type="date"  class="form-control" name="start" id="start" value="<?php echo $data->start?>"/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label for="Date">End Date</label>
                        <input type="date"  class="form-control" name="end" id="end" value="<?php echo $data->end?>"/>
                      </div>
                    </div>
                  </div>
                  <!--Enput time  -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label for="Date">Start Time</label>
                        <input type="time" class="form-control" name="starttime" id="starttime" value="<?php echo $data->start_time?>"/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label for="Date">End Time </label>
                        <input type="time"  class="form-control" name="endtime" id="endtime" value="<?php echo $data->end_time?>"/>
                      </div>
                    </div>
                  </div>
                  <!-- Email input -->
                  <div class="form-outline mb-4">
    
                    <label class="form-label" for="form3Example3">Course Description</label>
                    <textarea class="form-control editor" id="desc" name="desc" rows="3" ><?php echo $data->description?></textarea>
                  </div>

                  <!-- Password input -->
              <div class="row">
               <div class="col">
                  <label for="language" class="form-label">Language</label>
                  <select name="language" id="language" class="form-control mb-4">
                        <option value="" selected><?php echo $data->language?></option>
                        <option value="Hindi">Hindi</option>
                        <option value="English">English</option>
                  </select>
               </div>
               <div class="col">
                  <label for="teacher" class="form-label">Assign to </label>
                  <select name="teacher" id="teacher" class="form-control mb-4" >
                        <option value="<?php echo $data->trainer_id?>" selected><?php echo $data->tname?></option>
                        <?php $count=0; foreach($additionalData as $dataline){ ?> 
                        <option value="<?php echo $dataline->trainer_id;?>"><?php echo $dataline->name;?></option>
                        <?php $count++;} ?>
                    
                  </select>
               </div>
            </div>


            <div class="row mb-4">
               <div class="col">
                  <label for="price" class="form-label">Price</label>
                  <input type="text" id="price" name="price" class="form-control"  value="<?php echo $data->price?>"/>
               </div>
               <div class="col">
                  <label for="batch" class="form-label">Batch </label>
                  <input type="text" id="batch" name="batch" class="form-control"  value="<?php echo $data->bname?>"/>
               </div>
            </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary mt-4" name="edit_course" id="edit_course" style=" border-radius: 50px; padding-left: 5%;padding-right: 5%; width:50%;display:block;margin:auto">Submit</button>

                  <!-- Register buttons -->
              </form>
              </div>
            </div>
          </div>
        </section>
        <!-- Section: Design Block -->
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

 

    <!-- <script>
      function showPreview(event) {
        if (event.target.files.length > 0) {
          var src = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("file-ip-1-preview");
          preview.src = src;
          preview.style.display = "block";
        }
      }
    </script> -->

<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
	<script>
    ClassicEditor
            .create( document.querySelector( '.editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
     </script>
     <?php require APPROOT . '/views/inc/common/footer.php';?>

