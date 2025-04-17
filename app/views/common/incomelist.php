<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/navbar.php';?>

<div class="container">
    <div class="row">
        <div class="col mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">sn</th>
                    <th scope="col">Name</th>
                    <th scope="col">Rank</th>
                    <th scope="col">joined_memberId</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=0; foreach($data as $dataline){ ?>
                    <tr>
                        <!-- <input type="hidden" name="<?php echo 'id'.$count;?>" id="<?php echo 'id'.$count;?>"  value="<?php echo $dataline->id;?>"> -->
                        <td ><?php echo  $count+1?></td><br>         
                        <td ><?php echo $dataline['name'];?></td>
                        <td ><?php echo $dataline['rank'];?></td>
                        <td ><?php echo $dataline['parents_member_id'];?></td>   
                    </tr>
                        <?php  $count++;} ?>
                        <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

                </tbody>
            </table>
        </div>
    </div>
</div>