<?php require APPROOT . '/views/inc/adminskill/header.php';?>
<?php require APPROOT . '/views/inc/adminskill/navbar.php';?>

<form action="<?php echo URLROOT ;?>skilladmins/editcourselist" method="post" enctype="multipart/form-data" >
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <table class="table  table-responsive table-hover table-sm">
                    <thead>
                        <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count=0; foreach($data as $dataline){ ?>
                        <tr>
                            <input type="hidden" name="<?php echo 'id'.$count;?>" id="<?php echo 'id'.$count;?>"  value="<?php echo $dataline->course_id;?>">
                            <td ><?php echo  $count+1?></td>        
                            <td ><?php echo $dataline->name;?></td>
                            <td ><?php echo $dataline->description;?></td>
                            <td ><?php echo $dataline->price;?></td>  
                            <td ><img src="<?php echo URLROOT.'/courses/'.$dataline->image;?>" height="30px" alt=""></td>  
                            <td ><button class="btn bg-success text-light" type="submit" name="<?php echo 'approve'.$count;?>" id="<?php echo 'approve'.$count;?>">Edit <img src="<?php echo URLROOT.'/img/common/edit.png'?>" height="20px" /></button></td>   
                        </tr>
                            <?php  $count++;} ?>
                            <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</form>