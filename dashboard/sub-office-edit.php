<?php
require 'inc/header.php';
$id = $_GET['sub_id'];
$sub_office_edit = "SELECT * FROM offices WHERE id = $id";
$sub_office_edit_q = mysqli_query($data,$sub_office_edit);
$sub_office_assoc =mysqli_fetch_assoc($sub_office_edit_q);
$_SESSION['sub_edit_office_id'] = $id;
?>
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Edit Sub Office Address</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
      <div class="form-layout">
        <form action="sub-office-edit-post.php" method="POST">
          <div class="row mg-b-25">
          <div class="col-lg-5">
              <div class="form-group">
                <label class="form-control-label" for="place">Place Name: <span class="tx-danger">*</span></label>
                <input value="<?=$sub_office_assoc['country'];?>" type="text" class="form-control" id="place" placeholder="Enter Place Name" name="place">
              </div>
            </div>
            <div class="col-lg-5">
              <div class="form-group">
                <label class="form-control-label" for="office">Head Office Address: <span class="tx-danger">*</span></label>
                <input value="<?=$sub_office_assoc['adress'];?>" type="text" class="form-control" id="office" placeholder="Enter Head Office Addresses" name="office">
              </div>
            </div>
            <div class="col-lg-5">
              <div class="form-group">
                <label class="form-control-label" for="email">Email address: <span class="tx-danger">*</span></label>
                <input value="<?=$sub_office_assoc['email'];?>" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
            </div>
            <div class="col-lg-5">
              <div class="form-group">
                <label class="form-control-label" for="number">Phone Number: <span class="tx-danger">*</span></label>
                <input value="<?=$sub_office_assoc['phone'];?>" type="number" class="form-control" id="number" placeholder="Phone Number" name="number">
              </div>
            </div>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
       <!-- form-layout -->
      </div>
      </form>
      <!-- col-4 -->
    </div><!-- row -->
  </div>
</div>

<?php
require 'inc/footer.php';
?>