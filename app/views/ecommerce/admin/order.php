
<?php require APPROOT . '/views/inc/adminecommerce/header.php';?>
<?php require APPROOT . '/views/inc/adminecommerce/navbar.php';?>

<div>
  <center> <h1 class="heading mt-4">PLACED ORDERS</h1></center>
</div>


<div class="container mt-4">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                <div class="row">
                    <p>Placed on : 2023-06-19</p> 
                    <p>Name : dfsgd</p>
                    <p>Number : 1234567890</p>
                    <p>Address : flat no. hffgdfg, rtgrtg, dgnnbf, hgywereyuky, India - 578994</p>
                    <p>Total products : watch (5 x 1)</p>
                    <p>Total price : $5/-</p>
                    <p>Payment method : cash on delivery</p>
                </div>
               <select name="status" id="status" class="form-control mb-4" >
                    <option  value="complete" selected>Pending</option>
                    <option  value="underconstruction">Completed</option>
                    <!-- <option  value="raw">Raw</option> -->
                </select>
                <button class="btn bg-success" style="color:white;">Confirm</button>     
            </div>
        </div>
    
       
        <div class="col-sm-4"></div>
        <!-- <div class="col-sm-3"></div> -->
    </div>
</div>


</body>
</html>