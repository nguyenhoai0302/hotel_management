<?php
if (isset($_POST['btn'])) {
    $nav_input = $_POST['nav_input'];
}
$sql = " SELECT * FROM rooms WHERE rooms.name LIKE " % '.$nav_input.' % "";
$result = mysqli_query($conn, $sql);

?>
<h3> information about: <?php echo $_POST['nav_input'] ?></h3>
<ul class="rooms_list">
    <?php
    while ($row = $rooms->fetch_assoc()) {

    ?>
    <div class="col-lg-4 col-md-6">
      <div class="room-item shadow rounded overflow-hidden">
        <div class="position-relative">
          <a href="index.php?controller=rooms&action=detail&id=<?php echo $row['id']?>">
            <img id="img6" src="/assets/web/images/anh5.png" alt="" width="100%" height="350px">
          </a>
        </div>
        <div class="room p-4 mt-1">
          <div class="d-flex justify-content-between mb-3">
            <h5 class=" mb-0"><?php echo $row['name'] ?></h5>
            <img src="/assets/web/images/star.png" alt="star" width="25%" height="40px">
          </div>
          <div class="d-flex mb-3">
            <small class="border-end me-3 pe-3"><i class="fa fa-bed" aria-hidden="true"></i>
              </i><?php echo $row['bedroom'] ?> Bed</small>
            <small class="border-end me-3 pe-3"><i class="fa fa-bath" aria-hidden="true"></i>
              </i><?php echo $row['bathroom'] ?> Bath</small>
            <small><i class="fa fa-wifi" aria-hidden="true"></i>
              </i>Wifi</small>
          </div>

          <div class="d-flex justify-content-between">
            <h4>$<?php echo $row['price'] ?>/night</h4>
          </div>
        </div>
      </div>
    </div>

</ul>
