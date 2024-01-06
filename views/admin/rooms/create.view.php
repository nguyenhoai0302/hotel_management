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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">room</a></li>
                                    <li class="breadcrumb-item active">List</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Room</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <form method="POST" action="#" class="parsley-examples" data-parsley-validate=""
                                              novalidate="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="name">Name<span class="text-danger">*</span></label>
                                                <input type="text" name="name" parsley-trigger="change" required=""
                                                       placeholder="Enter name" class="form-control" id="name">
                                            </div>
                                            <div class="form-group">
                                              <label for="name">Name:</label>
                                              <input type="text" class="form-control" id="name" name="name" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="bedroom">Bedroom:</label>
                                              <input type="number" class="form-control" id="bedroom" name="bedroom" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="bathroom">Bathroom:</label>
                                              <input type="number" class="form-control" id="bathroom" name="bathroom" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="livingroom">Living Room:</label>
                                              <input type="number" class="form-control" id="livingroom" name="livingroom" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="type">Type:</label>
                                              <input type="text" class="form-control" id="type" name="type" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="price">Price:</label>
                                              <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="tax">Tax:</label>
                                              <input type="number" step="0.01" class="form-control" id="tax" name="tax" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="cleaning_fee">Cleaning Fee:</label>
                                              <input type="number" step="0.01" class="form-control" id="cleaning_fee" name="cleaning_fee" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="description">Description:</label>
                                              <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                                            </div>
                                            <div class="form-group">
                                              <label for="status">Status:</label>
                                              <select class="form-control" id="status" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="updated_at">Updated At:</label>
                                              <input type="datetime-local" class="form-control" id="updated_at" name="updated_at">
                                            </div>
                                            <div class="form-group">
                                              <label for="created_at">Created At:</label>
                                              <input type="datetime-local" class="form-control" id="created_at" name="created_at">
                                            </div>

                                            <div class="form-group text-right mb-0">
                                              <button class="btn btn-primary waves-effect waves-light mr-1" type="submit" name="create">
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
</body>

