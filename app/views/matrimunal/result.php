<?php require APPROOT . '/views/inc/matrimonial/header.php';?>
<?php require APPROOT . '/views/inc/matrimonial/navbar.php';?>
 
  <?php if($additionalData['message']){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $additionalData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
       <?php } ?>
    <div class="container">
    <form action="<?php echo URLROOT ;?>matrimunalendusers/taketoprofiledetail" method="post" >
				<?php $count=0; foreach($data as $dataline){
          if($count%4 == 0){ echo '<div class="row my-4 mt-4 "  >';}?>
        
    			<div class="col-sm-4 my-3 "> 
            <input type="hidden" value="<?php echo $dataline->profile_id;?>" name="<?php echo 'profileid'.$count;?>">
            <!-- <?php echo  $dataline->profile_id;?> -->
          <div class="card"style="box-shadow: 2px 2px 2px 2px  rgb(245, 245, 33);"> 
          <button style="background:none;border:none" type="submit" name="<?php echo 'profile'.$count;?>" id="<?php echo 'product'.$count;?>">
            <img src="<?php echo URLROOT.'/matrimunaluserimg/'.$dataline->image?>" class="card-img-top" alt="..." style="width:10rem;height: 10rem;border-radius: 15px;margin-top: 15px; margin-left: 0px;"/>
        </button>
            <div class="card-body ">
              <h5 class="card-title"><?php echo $dataline->first_name?>&nbsp;<?php echo $dataline->last_name?></h5>
              <?php
              $inches = ceil($dataline->height/2.54);
              $feet = floor(($inches/12));
              $measurement = $feet."' ".($inches%12).'"';
              
              ?>
              <p class="card-text"><span><img src="<?php echo URLROOT.'/img/matrimonial/qualities.png'?>" class="img-fluid rounded-start" alt=" " style=" height: 18px; color: gray; margin-right: 5%; font-size: 10px;"/> <?php echo $dataline->age?> yrs ,<?php echo $measurement;?> </span><img src="<?php echo URLROOT.'/img/matrimonial/rings.png'?>" style="width:20px;height:15px;margin-left:15%"><?php echo $dataline->marital_status?> </p>
              <p class="card-text"><span>
                <img src="<?php echo URLROOT.'/img/matrimonial/bookmark.png'?>" class="img-fluid rounded-start" alt=" " style="height:18px ; color: gray; margin-right: 5%;font-size: 10px;"/><?php echo $dataline->religion_tpye?></span></p>
                <!-- <img src="<?php echo URLROOT.'/img/matrimonial/saturn.png'?>"style="width:20px;height:15px;margin-left:%">Virgo</p> -->
              <p class="card-text"><span>
                <img src="<?php echo URLROOT.'/img/matrimonial/degree.png'?>" class="img-fluid rounded-start" alt=" " style="height: 18px; color: gray; margin-right: 5%;font-size: 10px;" /><?php echo $dataline->eduction_type ?> </span><img src="<?php echo URLROOT.'/img/matrimonial/speech.png'?>"style="width:20px;height:15px;margin-left:15%"><?php echo $dataline->professional ?></p>
              <p class="card-text"><span>
                <img src="<?php echo URLROOT.'/img/matrimonial/placeholder.png'?>" class="img-fluid rounded-start" alt=" " style="height: 18px; color: gray; margin-right: 5%;font-size: 10px;" /><?php echo $dataline->state?></span><img src="<?php echo URLROOT.'/img/matrimonial/salary.png'?>"style="width:20px;height:15px;margin-left:15%"><?php echo $dataline->income?> </p>

              <!-- Additional card text goes here -->
            </div>
            <!-- Card Footer -->
            <div class="card-footer">
                <small class="text-body-secondary"> <p> <b style="margin-left: 10px;">interested in him?</b><button type="button" class="rounded-pill"style="margin-left: 15px;">&#10006 Don't show</button>
                <button type="button" class="rounded-pill" style="background-color: rgb(243, 145, 25);"> &#10004 Send Interest</button> </p></small>
            </div>
          </div>
        
        </div>
      
        <?php '</div>' ?>
    			<?php $count++;} ?> 
          <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">
				  </form>
      
        <!-- sixth card -->
       
      </div>
      <!-- <ul class="pagination justify-content-end pt-3">
        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">...</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
      </ul> -->
    </div>


    <?php require APPROOT . '/views/inc/common/footer.php';?>
