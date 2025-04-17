<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/matrimonial/adminnavbar.php';?>

<div class="container">
    <div class="row">
        <h3 class="text-center mt-2">All Register User </h3>
    </div>
    <div class="row">
        <!-- <div class="col-sm-12"> -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">sn</th>
                        <th scope="col">Name</th>
                        <th scope="col">gender</th>
                        <th scope="col">Number</th>
                        <th scope="col">Place</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=0; foreach($data as $dataline){ ?>
                    <tr class="text-center">
                        <input type="hidden" name="<?php echo 'id'.$count;?>" id="<?php echo 'id'.$count;?>"  value="<?php echo $dataline->id;?>">
                        <td ><?php echo  $count+1?></td><br>         
                        <td ><?php echo $dataline->first_name;?> &nbsp; <?php echo $dataline->last_name;?></td>
                        <td ><?php echo $dataline->gender;?> </td>
                        <td ><?php echo $dataline->number;?></td>
                        <td ><?php echo $dataline->state;?>,&nbsp;<?php echo $dataline->nationality;?></td>
                        <td> <button class="btn" style="background:red;color:white">View More</button></td>
                    </tr>
                    <?php  $count++;} ?>
                    <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

                </tbody>
            </table>

        <!-- </div> -->
    </div>
</div>
<!-- </form> -->

<?php require APPROOT . '/views/inc/common/footer.php';?>