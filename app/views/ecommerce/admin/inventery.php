<?php require APPROOT . '/views/inc/adminecommerce/header.php';?>
<?php require APPROOT . '/views/inc/adminecommerce/navbar.php';?>
<form action="<?php echo URLROOT ;?>ecommerceadmins/updatequantity" method="post" >
<div class="container-fluid " style="width:95%" >
    <div class="row">
    <table class="table  table-hover table-responsive " style="border:1px solid black;  border-collapse: collapse;">
     <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Brand</th>
            <th colspan="7" style="text-align:center">Color</th>
            <th colspan="4" style="text-align:center">Size</th>
            <th scope="col">total qty.</th>
            <th scope="col">rem. qty.</th>
            <th scope="col">MRP</th>
            <th scope="col">Change</th>
        </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"  ></th>
      <td></td>
      <td>R</td>
      <td>G</td>
      <td>Blu</td>
      <td>Bla</td>
      <td>W</td>
      <td>G</td>
      <td>O</td>
      <td>S</td>
      <td>M</td>
      <td>L</td>
      <td>XL</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>addidas</td>
      <td>2</td>
      <td>9</td>
      <td>5</td>
      <td>1</td>
      <td>2</td>
      <td>0</td>
      <td>1</td>
      <td>7</td>
      <td>10</td>
      <td>2</td>
      <td>1</td>
      <td>20</td>
      <td>6</td>
      <td>987</td>
      <td><button type="submit" class="btn btn-danger" name="add" id="add">update qty.</button>
      <button type="submit" class="btn btn-danger" name="delete" id="delete">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>addidas</td>
      <td>5</td>
      <td>9</td>
      <td>5</td>
      <td>11</td>
      <td>2</td>
      <td>0</td>
      <td>1</td>
      <td>7</td>
      <td>20</td>
      <td>2</td>
      <td>1</td>
      <td>50</td>
      <td>16</td>
      <td>587</td>
      <td><button type="submit" class="btn btn-danger" name="add" id="add">update qty.</button>
      <button type="submit" class="btn btn-danger" name="delete" id="delete">Delete</button></td>
    </tr>
  </tbody>
</table>
    </div>
</div>
</form>
