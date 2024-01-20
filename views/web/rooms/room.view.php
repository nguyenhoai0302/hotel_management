<?php include "./views/web/partials/header.view.php"
?>
<body>
    
    <div style="position: relative;">
        <img src="/assets/web/images/anh21.png" class="img-fluid" alt="..." style="width: 2000px; height: 700px;">
        <h1 class="title-welcome-hotel-yawn_yawn" style="color: yellow; font-size: 90px; width: 900px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <span class="item" style="text-shadow: 2px 2px 4px #FFC300;"><b>ROOMS</b></span>
        </h1>
    </div>
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <div class="about-us__our_rooms">
        </div>
        <h1 class="mt-4 mb-5 title-explore_our_rooms display-3"><b>Explore Our</b> <span class="title-explore_our_rooms " style="color:#FFC300 ;"><b>Rooms</b></span></h1>
    </div>
    <!-- row 2-->
    <div class="row mt-3 mb-4 g-4 p-5" id="pp">
    <?php
    while ($row = $rooms->fetch_assoc()) {

    ?>
    <div class="col-lg-4 col-md-6">
      <div class="room-item shadow rounded overflow-hidden">
        <div class="position-relative">
          <a href="index.php?controller=rooms&action=detail&id=<?php echo $row['id']?>">
            <img id="img6" src="assets/uploads/rooms/<?php echo $row['image']?>" alt="" width="100%" height="350px">
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
    <!-- 2 -->
    
  
<?php

}
    ?>

    

  </div>

</body>  
</html>

<?php include "./views/web/partials/footer.view.php"
?>

  
