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
    <div class="container">
        <div class="card bg-light">
            <div class="card-body mx-auto" style="max-width: 400px;">
                <div class="card-header">
                    <h3 class="card-title text-center">Edit Room</h3>
                </div>

                <form method="post" action="#" enctype="multipart/form-data">
                    <!-- Username -->
                    <div class="form-group">
                        <label for="name">Name<span class="text-danger">*</span></label>
                        <input type="text" name="name" parsley-trigger="change" required="" placeholder="Enter name" class="form-control" id="name" value="<?php echo $oldRoom['name'];?>">
                    </div>

                    <!-- type -->
                    <div class="form-group">
                        <label for="type">Type:</label>
                        <input type="text" class="form-control" id="type" name="type" value="<?php echo $oldUser['type'];?>" required="">
                    </div>

                    <!-- Price -->
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="<?php echo $oldUser['price'];?>" required="">
                    </div>
                    <!-- description -->
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" value="<?php echo $oldUser['price'];?>" required=""></textarea>
                    </div>
                    <!-- status -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-building"></i></span>
                        </div>
                        <select class="form-control" name="status">
                            <option value="admin" <?php if(isset($oldRoom['status']) && $oldRoom['status'] == '1'){ echo 'selected';}?>>Avaliable</option>
                            <option value="member" <?php if(isset($oldRoom['status']) && $oldRoom['status'] == '2'){ echo 'selected';}?>>Unavaliable</option>
                        </select>
                    </div>

                    <!-- created_at -->
                    <div class="form-group">
                        <label for="updated_at">Updated At:</label>
                        <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" value="<?php echo $oldUser['updated_at'];?>">
                    </div>


                    <!-- Save Button -->
                    <div class="form-group">
                        <button type="submit" name="edit" class="btn btn-primary btn-block register">Save</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>

