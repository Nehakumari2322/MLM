
<?php require APPROOT . '/views/inc/common/header.php';?>
<?php require APPROOT . '/views/inc/common/navbar.php';?>


<form action="<?php echo URLROOT ;?>commons/mynetwok" method="post" class="sign-in-form">
<div class="container">

    <div class="row mb-2">
        <!-- member -->
        <div class="col-sm-6 mt-2">
            <div class="card text-dark  mb-3 h-100 text-center" style="background:pink">
                <div class="card-header"><h1>Network Depth </h1></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6>Direct Member </h6>
                                <h5><?php echo $data['direct']?></h5>
                                <button class="btn text-dark" name="directmember" id="directmember" type="submit" style="box-shadow: 0px 4px 20px rgba(5,57,94,.5);">show</button>
                            </div>
                            <div class="col">
                                <h6>Indirect Member </h6>
                                <h5><?php echo $data['indirect']?></h5>
                                <!-- <button class="btn text-light" name="directmember" id="directmember" type="button" style="box-shadow: 0px 4px 20px rgba(5,57,94,.5);">see</button> -->
                            </div>
                            <div class="col">
                                <h6>Total Member </h6>
                                <h5><?php echo $data['totaldirect']?></h5>
                                <!-- <button class="btn text-light" name="directmember" id="directmember" type="submit" style="box-shadow: 0px 4px 20px rgba(5,57,94,.5);">see</button> -->
                            </div>
                        </div>
                       
                    </div>
            </div>
        </div>
            <!-- income -->
    

        <!-- self knowledge -->
        <div class="col-sm-6 mt-2">
            <div class="card text-white  mb-3 h-100 text-center" style="background:#417ef2">
                <div class="card-header"><h1>My Info </h1></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6>My Member Id </h6>      
                            </div>
                            <div class="col">
                                <h6><?php echo $moreData->self_member_id; ?></h6>           
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6> Member link </h6>      
                            </div>
                            <div class="col">
                                <!-- <h6>sdrtjkmnbrt</h6>     -->
                                <input type="text" value="<?php echo URLROOT."commons/memberLinkSignUp?memberid=" ?><?php echo $moreData->self_member_id; ?>" id="myInput" style="width:100%;background:white;border:none" readonly>
                    <button class="btn" type="button" onclick="myFunction()"><img src="<?php echo URLROOT."/img/common/copy.png"?>" alt="" height="20px"></button><span style="font-size:.6rem" > Copy my personal referral Link  </span>     
                            </div>
                            
                        </div>
                       
                    </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-sm-12 mt-2">
            <div class="card text-white bg-warning mb-3 h-100 text-center">
                <div class="card-header"><h1>Income </h1></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6>Skill </h6>
                                <h5>
                                    <?php if($result->sum == null){
                                        echo '0';
                                        }
                                        else{
                                            echo $result->sum;
                                        }
                                    ?></h5>
                                    <!-- <?php echo $result->sum;?></h5> -->
                                
                            </div>
                            <div class="col">
                                <h6>Ecomerce </h6>
                                <h5>0</h5>
                               
                            </div>
                            <div class="col">
                                <h6>Matrimonial</h6>
                                <h5>0</h5>
                               
                            </div>
                            <div class="col">
                                <h6>Traveling</h6>
                                <h5>0</h5>
                                
                            </div>
                            <div class="col">
                                <h6>Utitlity Payment</h6>
                                <h5>0</h5>
                              
                            </div>
                            <div class="col">
                                <h6>Insurence</h6>
                                <h5>0</h5>
                               
                            </div>
                            <div class="col">
                                <h6>Dmat</h6>
                                <h5>0</h5>
                               
                            </div>
                            <div class="col">
                                <h6>total</h6>
                                <h5>0</h5>
                               
                            </div>
                        </div>
                       
                    </div>
            </div>
        </div>
    </div>

    <?php if($newData['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom:0;margin-top:0">
        <?php echo $newData['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
    <div class="row mt-4 text-center">
        <div class="col-sm-12">
            <div class="card mb-3 w3-hover-shadow" >
               <div class="card-header ">Assign Rank to Your Member</div>
                <div class="card-body">

                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">sn</th>
                                <th scope="col">Name</th>
                                <th scope="col">Assign Rank</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count=0; foreach($additionalData as $dataline){ ?>
                            <tr>
                            <input type="hidden" name="<?php echo 'id'.$count;?>" id="<?php echo 'id'.$count;?>"  value="<?php echo $dataline->id;?>">
                                <td ><?php echo  $count+1?></td>         
                                <td ><?php echo $dataline->name;?></td>
                                <td >
                                <select name="<?php echo 'rank'.$count;?>" id="<?php echo 'rank'.$count;?>" class="form-control " style="margin-top:0">
                                <option value="">Select Rank</option>
                                <?php
                                    $rankValue = null;
                                    for($rankcount = -1;$rankcount <= $moreData->rank;$rankcount++){ 
                                        if($rankcount ==0){
                                            $rankValue = 'Second Waiting Member';
                                        }
                                        elseif($rankcount ==-1){
                                            $rankValue = 'First Waiting Member';
                                        }
                                        else{
                                            $rankValue = 'Rank '.$rankcount;
                                        }
                                    ?>
                                        <option value="<?php echo $rankcount;?>"><?php echo $rankValue;?></option>
                                   <?php } ?>
                                   
                                </select>

                                <td ><button class="btn bg-success" type="submit" name="<?php echo 'approve'.$count;?>" id="<?php echo 'approve'.$count;?>">Approved</button></td>
                            </tr>
                            <?php  $count++;} ?>
                            <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">

                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>

    </div>

    
  
   
</div>
</form>
<script>
    function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
 
}
  </script>

<?php require APPROOT . '/views/inc/common/footer.php';?>