<?php
require 'views/admin/partials/header.view.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Link to Bootstrap JS -->
</head>

<body>
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
                <label for="userid">User ID:</label>
                <input type="text" class="form-control" id="userid" name="userid" placeholder="userid" value="<?php echo $userid['userid']; ?>">

            </div>
            <div class="form-group">
                <label for="roomid">Room ID:</label>
                <input type="text" class="form-control" id="roomid" name="roomid" placeholder="roomid" value="<?php echo $roomid['roomid']; ?>">
            </div>
            <div class="form-group">
                <label for="datein">Date In:</label>
                <input type="date" class="form-control" id="datein" name="datein" placeholder="Date in " value="<?php echo $dateIn['datein']; ?>">
            </div>
            <div class="form-group">
                <label for="dateout">Date Out:</label>
                <input type="date" class="form-control" id="dateout" name="dateout" placeholder="Date out " value="<?php echo $dateOut['dateout']; ?>">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" placeholder="status " value="<?php echo $status['status']; ?>">
            </div>
            <div class="form-group">
                <label for="totalprice">Total Price:</label>
                <input type="text" class="form-control" id="totalprice" name="totalprice" placeholder="totalPrice " value="<?php echo $totalPrice['totalPrice']; ?>">
            </div>
            <div class="form-group">
                <label for="note">Note:</label>
                <textarea class="form-control" id="note" name="note" placeholder="note" value="<?php echo $note['note']; ?>"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>