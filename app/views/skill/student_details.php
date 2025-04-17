<?php require APPROOT . '/views/inc/adminskill/header.php';?>
<?php require APPROOT . '/views/inc/adminskill/navbar.php';?>
<form action="<?php echo URLROOT ;?>skilladmins/approvecourse" method="post" >


<?php if($additionalData['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom:0;margin-top:0">
        <?php echo $additionalData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<div class="container">
    <div class="row">
        <h2>List of Student Purchase Course</h2>
        <div class="col">
            <table class="table  table-responsive table-hover table-sm">
                <thead>
                    <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=0; foreach($data as $dataline){ ?>
                    <tr>
                        <input type="hidden" name="<?php echo 'id'.$count;?>" id="<?php echo 'id'.$count;?>"  value="<?php echo $dataline->id;?>">
                        <td ><?php echo  $count+1?></td>        
                        <td ><?php echo $dataline->name;?></td>
                        <td ><?php echo $dataline->course_name;?></td>
                        <td ><?php echo $dataline->amount;?></td>  
                        <td ><button class="btn bg-success text-light" type="submit" name="<?php echo 'approve'.$count;?>" id="<?php echo 'approve'.$count;?>">Approved</button></td>   
                    </tr>
                        <?php  $count++;} ?>
                        <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

                </tbody>
            </table>
        </div>
    </div>
</div>
</form>
<?php require APPROOT . '/views/inc/common/footer.php';?>