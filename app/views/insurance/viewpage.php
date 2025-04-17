<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/insurance/navbar.php';?>

<?php if($additionalData['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom:0;margin-top:0">
        <?php echo $additionalData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<form action="<?php echo URLROOT; ?>insuranceadmins/updateuserrequest" method="post">

    <div class="row mx-2">
        <div class="col-md-12 ">
            <div class="table-responsive">
                <table class="table table-hover table-sm table-bordered" id="datatable-tabletools">
                    <thead class="bg-success" style="color: white">
                        <tr>
                                        
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nominee Name</th>
                        <th scope="col">Relation</th>
                        <th scope="col">Age</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Policy_type</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Monthly_income</th>
                        <!-- <th scope="col">status  </th> -->
                        <th scope="col">Brand_of_car</th>
                        <th scope="col">Yearly_premium</th>
                        <th scope="col">Term</th>
                        <th scope="col">Sum_assured</th>
                        <th scope="col">Policy_number</th>
                        <th scope="col">Company_name</th>
                        <th scope="col">Company_plan</th>
                        <th scope="col">RC Book File</th>
                        <th scope="col">Address Proof File</th>
                        <th scope="col">ID Proff File</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                                
                    <tbody>
            <?php $count=0; foreach($data as $dataline){ ?> 
            <tr>
            <input type="hidden" name="<?php echo 'id'.$count;?>" id="<?php echo 'id'.$count;?>"  value=" <?php echo $dataline->id; ?>">
                <td> <?php echo $dataline->id; ?></td>
                <td> <?php echo $dataline->name; ?></td>
                <td> <?php echo $dataline->number; ?></td>
                <td> <?php echo $dataline->email; ?></td>
                <td> <?php echo $dataline->nomineename; ?></td>
                <td> <?php echo $dataline->relation; ?></td>
                <td> <?php echo $dataline->age; ?></td>
                <td> <?php echo $dataline->dob; ?></td>
                <td> <?php echo $dataline->policy_type; ?></td>
                <td> <?php echo $dataline->occupation; ?></td>
                <td> <?php echo $dataline->monthly_income; ?></td>
                <td> <?php echo $dataline->brand_of_car; ?></td>
                <td> <?php echo $dataline->yearly_premium; ?></td>
                <td> <?php echo $dataline->term; ?></td>
                <td> <?php echo $dataline->sum_assured; ?></td>
                <td> <?php echo $dataline->policy_number; ?></td>
                <td> <?php echo $dataline->company_name; ?></td>
                <td> <?php echo $dataline->company_plan; ?></td>
                <td> <a href="<?php echo URLROOT.'/insurances/'.$dataline->rc_book_img;?>" download><img  src="<?php echo URLROOT.'/insurances/'.$dataline->rc_book_img;?>" style="height: 50px; width: 50px" alt="" /></a></td>
                <td> <a href="<?php echo URLROOT.'/insurances/'.$dataline->address_proof_img;?>" download><img  src="<?php echo URLROOT.'/insurances/'.$dataline->address_proof_img;?>" style="height: 50px; width: 50px" alt=""/></a></td>
                <td> <a href="<?php echo URLROOT.'/insurances/'.$dataline->id_proof_img;?>" download> <img  src="<?php echo URLROOT.'/insurances/'.$dataline->id_proof_img;?>" style="height: 50px; width: 50px" alt=""/></a></td>
                <td><select class="form-control" name="<?php echo 'status'.$count;?>" id="<?php echo 'status'.$count;?>">
                      <option value="New"><?php echo $dataline->status?></option>
                      <option value="Complete">Complete</option>
                      <option value="Cancle">Cancle</option>
                      <option value="Hold">Hold</option>
                      <option value="Inprogress">Inprogress</option> 
                    </select>
                </td>
                <td><button class="btn bg-warning" name="<?php echo 'update'.$count;?>" id="<?php echo 'update'.$count;?>" type="submit"><b> Update </b></button></td>
            </tr>
            <?php $count++;} ?>
            <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">           
            <!-- <?php echo 'totalcount'.$count;?> -->
            
            </tbody>
                </table>
                
            </div>
        </div>
    </div>
</form>

<?php require APPROOT . '/views/inc/common/footer.php'; ?>