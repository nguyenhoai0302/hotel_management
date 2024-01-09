<?php
require 'views/admin/partials/header.view.php'
?>

<body class="left-side-menu-dark topbar-light">
  <div id="wrapper">
    <?php
    require 'views/admin/partials/topbar.view.php'
    ?>
    <?php
    include 'views/admin/partials/sidebar.view.php';
    ?>
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="page-title-box">
                <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="admin.php?controller=rooms&action=list">Rooms</a></li>
                    <li class="breadcrumb-item active">List</li>
                  </ol>
                </div>
                <h4 class="page-title">Edit Room</h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card-box">

                <div class="row">
                  <div class="col-lg-12">
                    <div>
                    <form method="POST" action="" class="parsley-examples" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                      <input type="hidden" value="<?=$oldRoom['id'];?>" name="id" id="id" >
                        <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" name="name"  value="<?php echo $oldRoom['name'];?>">
                        </div>
                        <div class="form-group">
                          <label for="bedroom">Bedroom:</label>
                          <input type="number" class="form-control" id="bedroom" name="bedroom"  value="<?php echo $oldRoom['bedroom'];?>">
                        </div>
                        <div class="form-group">
                          <label for="bathroom">Bathroom:</label>
                          <input type="number" class="form-control" id="bathroom" name="bathroom"  value="<?php echo $oldRoom['bathroom'];?>">
                        </div>
                        <div class="form-group">
                          <label for="livingroom">Living Room:</label>
                          <input type="number" class="form-control" id="livingroom" name="livingroom"  value="<?php echo $oldRoom['livingroom'];?>">
                        </div>
                        <div class="form-group">
                          <label for="type">Type:</label>
                          <input type="text" class="form-control" id="type" name="type"  value="<?php echo $oldRoom['type'];?>">
                        </div>
                        <div class="form-group">
                          <label for="price">Price:</label>
                          <input type="number" step="0.01" class="form-control" id="price" name="price"  value="<?php echo $oldRoom['price'];?>">
                        </div>
                        <div class="form-group">
                          <label for="tax">Tax:</label>
                          <input type="number" step="0.01" class="form-control" id="tax" name="tax"  value="<?php echo $oldRoom['tax'];?>">
                        </div>
                        <div class="form-group">
                          <label for="cleaning_fee">Cleaning Fee:</label>
                          <input type="number" step="0.01" class="form-control" id="cleaning_fee" name="cleaning_fee"  value="<?php echo $oldRoom['cleaning_fee'];?>">
                        </div>
                        <div class="form-group">
                          <label for="description">Description:</label>
                          <textarea class="form-control" id="description" name="description" rows="4"  ><?php echo $oldRoom['description'];?></textarea>
                        </div>
                        <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-building"></i></span>
                        </div>
                        <select class="form-control" name="status"  >
                            <option value="<?=$oldRoom['status'];?>" ><?=$oldRoom['status']==1?'Available':'Unavailable';?></option>
                            <option value="1" >Available</option>
                            <option value="0" >Unavailable</option>
                        </select>
                        </div>
                       
                        <div class="form-group">
                          <label for="created_at">Created At:</label>
                          <input type="datetime-local" class="form-control" id="created_at" name="created_at" value="<?php echo $oldRoom['created_at'];?>">
                        </div>
                        <div class="form-group">
                          <label for="updated_at">Updated At:</label>
                          <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" value="<?php echo $oldRoom['updated_at'];?>">
                        </div>

                        <div class="form-group text-right mb-0">
                          <button class="btn btn-primary waves-effect waves-light mr-1" type="submit" name="edit">
                            Save
                          </button>
                          <button type="reset" class="btn btn-secondary waves-effect">
                            Cancel
                          </button>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'views/admin/partials/footer.view.php'; ?>

    </div>
  </div>
  <!-- Vendor js -->
  <script src="assets/admin/js/vendor.min.js"></script>
  <!-- App js -->
  <script src="assets/admin/js/app.min.js"></script>

  <!-- Plugins js -->
  <script src="assets/admin/libs/dropify/dropify.min.js"></script>
  <!-- Init js-->
  <script src="assets/admin/js/pages/form-fileuploads.init.js"></script>
</body>