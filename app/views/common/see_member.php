<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/navbar.php';?>

<div class="container">
    <h2 class="text-center mt-4">Direct Member List</h2>
    <table class="table table-responsive table-primary table-hover table-sm">
        <thead>
            <tr>
            <th scope="col"><b> SN </b></th>
            <th scope="col"><b>Name </b></th>
            <th scope="col"><b>Rank </b></th>
            <th scope="col"><b>Member Id </b></th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0; foreach($data as $dataline){ ?>
            <tr>
                <!-- <input type="hidden" name="<?php echo 'id'.$count;?>" id="<?php echo 'id'.$count;?>"  value="<?php echo $dataline->id;?>"> -->
                <td ><?php echo  $count+1?></td>        
                <td ><?php echo $dataline->name;?></td>
                <td ><?php echo $dataline->rank;?></td>
                <td ><?php echo $dataline->self_member_id;?></td>   
            </tr>
                <?php  $count++;} ?>
                <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

        </tbody>
    </table>
    </div>
<?php require APPROOT . '/views/inc/common/footer.php';?>
