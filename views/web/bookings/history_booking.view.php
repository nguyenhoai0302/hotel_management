<?php include "./views/web/partials/header.view.php"
?>

<body>
    <h1 class="into" style="margin-top: 180px;" class="text-center">History Booking</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered ">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>Room</th>
                        <th>Checkin Date</th>
                        <th>Checkout Date</th>
                        <th>Status</th>
                        <th>Total Price</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody id="rooms-table" class="text-center">
                <?php
                                        
                    while ($row = $historyBookings->fetch_assoc()) {
                        
                    ?>
                    <tr>
                      <th><?php echo $row['room_name'] ?></th>
                      <td><?php echo $row['checkin_date'] ?></td>
                      <td><?php echo $row['checkout_date'] ?></td>
                      <td>
                        <?php
                        if ($row['status'] == 1) {
                        ?>
                            <span class="badge badge-warning mr-1">Pendding</span>
                        <?php
                        } elseif ($row['status'] == 2) {
                        ?>
                            <span class="badge badge-success mr-1">Approved</span>
                        <?php
                        } else {
                        ?>
                            <span class="badge badge-secondary mr-1">Rejected</span>
                        <?php
                        }
                        ?>
                        </td>
                        <td><?php echo $row['total_price'] ?></td>
                        <td><?php echo $row['note'] ?></td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
            </table>
        </div>
    </div>

    <ul id="favorite-list" style="height: 763px;"></ul>


</body>

<?php include "./views/web/partials/footer.view.php"
?>