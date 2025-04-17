<?php require APPROOT . '/views/inc/skill/header.php';?>
<?php require APPROOT . '/views/inc/skill/navbar.php';?>
<form action="<?php echo URLROOT ;?>skillendusers/buycourse" method="post" >
<div class="container-fluid">
    <div class="row pt-4 mb-1">
            <div class="col-sm-5 mt-1"><div class="line"></div></div>
            <div class="col-sm-2 text-center" ><b>My CART</b></div>
    </div>
 <?php $count = 0; foreach($data as $dataLine){ ?>
    <input type="hidden" value="<?php echo $dataLine->course_id;?>" name="<?php echo 'course_id'.$count;?>" id="<?php echo 'course_id'.$count;?>">
 <div class="container-fluid p-2" style="width:95%;display:block;margin:auto;">
    <div class="row mb-0" style="border:2px solid #ffc104;border-radius:10px;">
        <div class="col-sm-2 mt-4">
            <p style="font-size:1.1rem;background:#f0ebeb;border:2px solid #ffc104;padding:15px;color:black;border-radius:5px"><b> Explore New Program </b></p>
            <p style="font-size:1.1rem;"><?php echo $dataLine->name;?></p>
        </div>
        <div class="col-sm-3">
            <img src="<?php echo URLROOT.'/courses/'.$dataLine->image;?>" class="image-fliud" style="height:auto ;max-width:100%" alt="">
        </div>
        <div class="col-sm-3 mt-4">
            <p style="font-size:1.1rem;margin-bottom:.3rem">A new way to transform your business.</p>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="width:100%" >
                <button type="button" class="btn p-2" style="border-radius: 30px 0 0px 30px;background:#ffc104">Specification</button>
                <button type="button" class="btn  p-2" style="border-radius:0 30px  30px 0px;background:#f0ebeb">Explore</button>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <img src="<?php echo URLROOT."/img/star.png";?>" alt="">  <img src="<?php echo URLROOT."/img/star.png";?>" alt="">  <img src="<?php echo URLROOT."/img/star.png";?>" alt="">  <img src="<?php echo URLROOT."/img/star.png";?>" alt="">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-5 ">
                    <p style="font-size:25px"><b><i class='bx bx-rupee  bx-sm' style='color:#080808'  ></i> <?php echo $dataLine->price;?></b></p>
                    <input type="hidden" value="<?php echo $dataLine->price;?>" name="<?php echo 'price'.$count;?>" id="<?php echo 'price'.$count;?>">
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-4">
           <button class="btn mt-4" type="submit" name="<?php echo ' buy'.$count;?>" id="<?php echo 'buy'.$count;?>" style="width:70%;background: #ffc104;margin:auto;display:block;border-radius:30px">BUY NOW</button>
        </div>
    </div>
  </div>
  <?php $count++;}?>
  <input type="hidden" name="totalcount" id="totalcount" value="<?php echo $count;?>">
  </form>
 </div>
 <?php require APPROOT . '/views/inc/common/footer.php';?>