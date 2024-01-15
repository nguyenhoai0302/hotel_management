<?php include "./views/web/partials/header.view.php"
?>

<body>

  <div style="position: relative;">
    <img src="/assets/web/images/anh21.png" class="img-fluid" alt="..." style="width: 2000px; height: 700px;">
    <h1 class="title-welcome-hotel-yawn_yawn" style="color: yellow; font-size: 90px; width: 900px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
      <span class="golden" style="text-shadow: 2px 2px 4px #FFFFFF;"><b>WELLCOM TO</b></span> <br>
      <span class=" gol" style="text-shadow: 2px 2px 4px #FFC300;"><b>GOLDEN SUN HOTEL</b></span>
    </h1>
  </div>
  <div class="container text-center">
    <div class="row about--introduce">
      <h2 id="about_us"><b>About us</b></h2>
      <p><b>From luxurious and comfortable rooms, to excellent restaurants, we are committed to achieving the best quality of service by applying the highest standards in room design and equipment,
          hygiene and security. , we aim to bring you absolute comfort and satisfaction while positive customer reviews and awards have recognized our efforts. We are delighted to receive high marks for our service quality and customer experience.</b>
      </p>
    </div>
  </div>
  <div class="container text-center ml-5">
    <div class="row align-items-center">
      <div class="col">
        <div class="row mt-2 container_body_aboutus">
          <div class="col-lg-5">
            <div class="row overviews">
              <div class="col overview overview-rooms">
                <div class="about about-rooms">
                  <i class="fas fa-building" aria-hidden="true"></i>
                  <p id="about-room">1234</p>
                  <p><b>Rooms</b></p>
                </div>
              </div>
              <div class="col overview overview-staffs">
                <div class="about about-staffs">
                  <i class="fas fa-users" aria-hidden="true"></i>
                  <p id="about-staff">1234</p>
                  <p><b>Staffs</b></p>
                </div>
              </div>
              <div class="col overview overview-users">
                <div class="about about-users">
                  <i class="fas fa-users" aria-hidden="true"></i>
                  <p id="about-user">1234</p>
                  <p><b>Users</b></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <img id="img1" src="/assets/web/images/anh1.png" alt="" width="430px" height="250px">
      </div>
      <div class="col mt-5">
        <img id="img2" src="/assets/web/images/anh2.png" alt="" width="600px" height="350px">
      </div>
      <div class="col mt-5">
        <img id="img3" src="/assets/web/images/anh3.png" alt="" width="600px" height="350px">
      </div>
    </div>
  </div>
  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <div class="about-us__our_rooms">
    </div>
    <h1 class="mt-4 mb-5 title-explore_our_rooms display-3"><b>Explore Our</b> <span class="title-explore_our_rooms" style="color:#FFC300 ;"><b>Rooms</b></span></h1>
  </div>
  <!-- row 2-->
  <div class="row mt-3 mb-4 g-4 p-5" id="pp">
    <div class="col-lg-4 col-md-6">
      <div class="room-item shadow rounded overflow-hidden">
        <div class="position-relative">
          <a href="index.php?controller=rooms&action=detail&id=<?php echo $row['id']?>">
            <img id="img6" src="/assets/web/images/anh4.png" alt="" width="100%" height="350px">
          </a>
        </div>
        <div class="room p-4 mt-1">
          <div class="d-flex justify-content-between mb-3">
            <h5 class=" mb-0">Room 101</h5>
            <img src="/assets/web/images/star.png" alt="star" width="25%" height="40px">
          </div>
          <div class="d-flex mb-3">
            <small class="border-end me-3 pe-3"><i class="fa fa-bed" aria-hidden="true"></i>
              </i>2 Bed</small>
            <small class="border-end me-3 pe-3"><i class="fa fa-bath" aria-hidden="true"></i>
              </i>2 Bath</small>
            <small><i class="fa fa-wifi" aria-hidden="true"></i>
              </i>Wifi</small>
          </div>

          <div class="d-flex justify-content-between">
            <h4>$50/night</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="room-item shadow rounded overflow-hidden">
        <div class="position-relative">
          <a href="index.php?controller=rooms&action=detail&id=<?php echo $row['id']?>">
            <img id="img7" src="/assets/web/images/anh5.png" alt="" width="100%" height="350px">
          </a>
        </div>
        <div class=" room p-4 mt-1">
          <div class="d-flex justify-content-between mb-3">
            <h5 class="mb-0">Room 102</h5>
            <img src="/assets/web/images/star.png" alt="star" width="25%" height="40px">
          </div>
          <div class="d-flex mb-3">
            <small class="border-end me-3 pe-3"><i class="fa fa-bed" aria-hidden="true"></i>
              </i>2 Bed</small>
            <small class="border-end me-3 pe-3"><i class="fa fa-bath" aria-hidden="true"></i>
              </i>2 Bath</small>
            <small><i class="fa fa-wifi" aria-hidden="true"></i>
              </i>Wifi</small>
          </div>

          <div class="d-flex justify-content-between">
            <h4>$100/night</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="room-item shadow rounded overflow-hidden">
        <div class="position-relative">
          <a href="index.php?controller=rooms&action=detail&id=<?php echo $row['id']?>">
            <img id="img8" src="/assets/web/images/anh6.png" alt="" width="100%" height="350px">
          </a>
        </div>
        <div class="room p-4 mt-1">
          <div class="d-flex justify-content-between mb-3">
            <h5 class="mb-0">Room 103</h5>
            <img src="/assets/web/images/star.png" alt="star" width="25%" height="40px">
          </div>
          <div class="d-flex mb-3">
            <small class="border-end me-3 pe-3"><i class="fa fa-bed" aria-hidden="true"></i>
              </i> Bed</small>
            <small class="border-end me-3 pe-3"><i class="fa fa-bath" aria-hidden="true"></i>
              </i>2 Bath</small>
            <small><i class="fa fa-wifi" aria-hidden="true"></i>
              </i>Wifi</small>
          </div>

          <div class="d-flex justify-content-between">
            <h4>$70/night</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<?php include "./views/web/partials/footer.view.php"
?>