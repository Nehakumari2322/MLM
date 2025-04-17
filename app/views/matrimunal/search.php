<?php require APPROOT . '/views/inc/matrimonial/header.php';?>
<?php require APPROOT . '/views/inc/matrimonial/navbar.php';?>

<div class="row">
    <div class="col-sm-9">
<form class="row g-3 m-4">
  <div class="col-11">
    <label for="validationDefault01" class="form-label">Age</label>
    <input type="number" class="form-control" id="validationDefault01"  required>
  </div>
  <div class="col-11">
    <label for="validationDefault02" class="form-label">Height</label>
    <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
  </div>
  <div class="col-11">
    <label for="validationDefaultUsername" class="form-label">Marital Status</label>
    <div class="input-group">

      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-11">
    <label for="validationDefault03" class="form-label">Religion</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-11">
    <label for="validationDefault04" class="form-label">Mother Tongue</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-11">
    <label for="validationDefault05" class="form-label">Country Living In</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-11">
    <label for="validationDefault05" class="form-label">State Living In</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>  <div class="col-11">
    <label for="validationDefault05" class="form-label">Residency Status</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <!-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div> -->
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Search</button>
  </div>
</form>
</div><!--col-sm-9-->

<div class="col-sm-3 mt-4">
    <div class="card">
        <div class="card-body">
            <div class="card-header">Profile ID Search</div>
            <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Enter Profile ID" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        </div>
    </div>
</div>

</div><!--row-->
<?php require APPROOT . '/views/inc/common/footer.php';?>
