<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/adminnavbar.php';?>

<form action="<?php echo URLROOT ;?>commonadmins/approvependingmember" method="post" class="sign-in-form">
<?php if($additionalData['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom:0;margin-top:0">
        <?php echo $additionalData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<div class="container-fluid">
    <div class="row">
        <h3 class="text-center mt-2">All Member</h3>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-hover table-responsive table-sm">
                <thead>
                    <tr class="text-center">
                        <th scope="col">sn</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Rank</th>
                        <th scope="col">Email</th>
                        <th scope="col">KYC</th>
                        <th scope="col">Password</th>
                        <th scope="col"></th>
                        <th scope="col">Reason</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=0; foreach($data as $dataline){ ?>
                    <tr class="text-center">
                        <input type="hidden" name="<?php echo 'id'.$count;?>" id="<?php echo 'id'.$count;?>"  value="<?php echo $dataline->id;?>">
                        <input type="hidden" name="<?php echo 'userid'.$count;?>" id="<?php echo 'userid'.$count;?>"  value="<?php echo $dataline->login_id;?>">
                        <td ><?php echo  $count+1?></td>        
                        <td ><?php echo $dataline->name;?></td>
                        <td ><?php echo $dataline->phone_no;?></td>
                        <td ><?php echo $dataline->rank;?></td>
                        <td ><?php echo $dataline->login_id;?></td>
                        <td > <?php if($dataline->flag == 0){?>
                            <button class="btn bg-warning text-light" type="button" name="<?php echo 'change'.$count;?>" disabled>No KYC</button>
                            <?php
                            }
                            else{?>
                               <button class="btn bg-warning text-light" type="submit" name="<?php echo 'kyc'.$count;?>">View KYC</button>
                           <?php }
                            ?>
                        </td>
                        <!-- <td ><button class="btn bg-warning text-light" type="submit" name="<?php echo 'change'.$count;?>">View KYC</button></td> -->
                        <td ><input type="password" class="form-control" id="<?php echo 'password'.$count;?>" name="<?php echo 'password'.$count;?>" placeholder="New Password"></td>
                        <td> <button class="btn bg-success text-light" type="submit" name="<?php echo 'change'.$count;?>" id="<?php echo 'change'.$count;?>">Change Password</button></td>
                        <td >
                            <select name="<?php echo 'reason'.$count;?>" id="<?php echo 'reason'.$count;?>" class="form-control " style="margin-top:0">
                                <option value="" >Select Suspend Reason</option>
                                <option value="10">Incomplete information</option>
                                <option value="20">Wrong information</option>
                                <option value="30">Missing PAN </option>
                                <option value="40">Incorrect Bank Details</option>
                            </select>
                        </td>
                        <td ><button class="btn bg-danger text-light" type="submit" name="<?php echo 'suspend'.$count;?>" id="<?php echo 'suspend'.$count;?>">Suspend</button>
                       
                        </td>
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