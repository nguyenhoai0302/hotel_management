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
            <h1>Update Booking</h1>
            <form action="" method="">
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="id" value="<?php echo $id['id']; ?>">
                </div>
                <div class="form-group">
                    <label for="userId">User ID:</label>
                    <input type="text" class="form-control" id="userId" name="userId" placeholder="userId" value="<?php echo $userId['userId']; ?>">

                </div>
                <div class="form-group">
                    <label for="roomId">Room ID:</label>
                    <input type="text" class="form-control" id="roomId" name="roomId" placeholder="roomId" value="<?php echo $roomId['roomId']; ?>">
                </div>
                <div class="form-group">
                    <label for="checkIndate">Date In:</label>
                    <input type="date" class="form-control" id="checkIndate" name="checkIndate" placeholder="checkIndate " value="<?php echo $dateIn['checkIndate']; ?>">
                </div>
                <div class="form-group">
                    <label for="checkOutdate">Date Out:</label>
                    <input type="date" class="form-control" id="checkOutdate" name="checkOutdate" placeholder="checkOutdate " value="<?php echo $dateOut['checkOutdate']; ?>">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="status " value="<?php echo $status['status']; ?>">
                </div>
                <div class="form-group">
                    <label for="total_rice">Total Price:</label>
                    <input type="text" class="form-control" id="total_rice" name="total_rice" placeholder="total_rice " value="<?php echo $totalPrice['total_rice']; ?>">
                </div>
                <div class="form-group">
                    <label for="note">Note:</label>
                    <textarea class="form-control" id="note" name="note" placeholder="note" value="<?php echo $note['note']; ?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="created_at">Note:</label>
                    <textarea class="form-control" id="created_at" name="created_at" placeholder="created_at" value="<?php echo $createdAt['created_at']; ?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="updated_at">Note:</label>
                    <textarea class="form-control" id="updated_at" name="updated_at" placeholder="updated_at" value="<?php echo $updatedAt['updated_at']; ?>"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
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