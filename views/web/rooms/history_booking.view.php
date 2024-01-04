<?php include_once("../partials/header.views.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History_Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include_once("../../../assets/css/history_booking.css.php") ?>
</head>

<body>
    <h1 class="into" style="margin-top: 180px;">History_Booking</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered ">
                <thead class="table-dark">
                    <tr>
                        <th>name room</th>
                        <th>number card</th>
                        <th>Price</th>
                        <th>date in</th>
                        <th>date out</th>
                        <th>Status</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="rooms-table">
                    <!-- <tr>
                      <th>1</th>
                      <td>Phòng 1</td>
                      <td>Phòng đơn</td>
                      <td>100.000 VND</td>
                      <td>
                          <button class="button-icon" >
                              <i class="fa fa-cogs" aria-hidden="true"></i>
                          </button>
                          <button class="button-icon">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>
                      </td>
                  </tr> -->
                </tbody>
            </table>
        </div>
    </div>

    <ul id="favorite-list" style="height: 763px;"></ul>


</body>

</html>
<?php include_once("../partials/footer.views.php") ?>