<?php include "./views/web/partials/header.view.php"
?>

<body>
    <h1 class="into" style="margin-top: 180px;">History_Booking</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered ">
                <thead class="table-dark">
                    <tr>
                        <th>roomId</th>
                        <th>date in</th>
                        <th>date out</th>
                        <th>Status</th>
                        <th>Total Price</th>
                        <th>note</th>
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

<?php include "./views/web/partials/footer.view.php"
?>