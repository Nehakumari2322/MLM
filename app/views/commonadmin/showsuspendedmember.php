<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/adminnavbar.php';?>


<form action="<?php echo URLROOT ;?>commonadmins/reactivesuspendeduser" method="post" class="sign-in-form">
<?php if($additionalData['message']){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-bottom:0;margin-top:0">
        <?php echo $additionalData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<div class="container">
    <div class="row">
        <h3 class="text-center mt-2">Suspended Member</h3>
    </div>
    <div class="row">
        <!-- <div class="col-sm-12"> -->
            <table class="table table-striped table-hover table-responsive">
                <thead>
                    <tr class="text-center">
                        <th scope="col">sn</th>
                        <th scope="col">Name</th>
                        <th scope="col">Reason</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=0; foreach($data as $dataline){ ?>
                    <tr class="text-center">
                        <input type="hidden" name="<?php echo 'id'.$count;?>" id="<?php echo 'id'.$count;?>"  value="<?php echo $dataline->id;?>">
                        <td ><?php echo  $count+1?></td>        
                        <td ><?php echo $dataline->name;?></td>
                        <td > <?php echo $dataline->suspend_reason;?>
                        </td>
                        <td ><button class="btn " type="submit" name="<?php echo 'reactive'.$count;?>" id="<?php echo 'reactive'.$count;?>" style="background:green;color:white">Reactive</button></td>
                    </tr>
                    <?php  $count++;} ?>
                    <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

                </tbody>
            </table>

        <!-- </div> -->
    </div>
</div>
</form>

<?php require APPROOT . '/views/inc/common/footer.php';?>