<?php require APPROOT . '/views/inc/skill/header.php';?>
<?php require APPROOT . '/views/inc/skill/navbar.php';?>
<style>
    a.disabled {
  pointer-events: none;
  cursor: default;
}
</style>
<div class="container">
    <div class="row mt-4" >
        <div class="col-sm-12" style="display:block;margin:auto">
        <?php if( $data->status == 'Active'){?>
           
                        <a class="btn mb-4" href="<?php echo $data->class_link;?>" target="_blank" style="width:20%;background:red;color:white" >Go live  <img src="<?php echo URLROOT."/img/skills/live.png";?>"  height="27px" alt=""></a>    
                        <?php        }
                            else{ ?>
                                <button class="btn mb-4" href="/" target="_blank" style="width:20%;background:red;color:white" >Go live  <img src="<?php echo URLROOT."/img/skills/live.png";?>"  height="27px" alt="" disabled></button>
                          <?php    }
                      ?>
            
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/common/footer.php';?>