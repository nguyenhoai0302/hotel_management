<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include("../../../assets/web/css/detail.css.php") ?>
</head>

<body>
    <div class="container">
        <form action="" method="">
            <div class="row details_room">
                <!-- picture -->
                <div class="picture">
                    <img class="img1 detail_img" id="img1" src="../../../assets/web/images/phong1.webp" alt="Hình ảnh phòng 1">
                    <img class="img2 detail_img" id="img2" src="../../../assets/web/images/phong2.webp" alt="Hình ảnh phòng 2">
                    <img class="img3 detail_img" id="img3" src="../../../assets/web/images/phong3.jpeg" alt="Hình ảnh phòng 3">
                    <img class="img4 detail_img" id="img4" src="../../../assets/web/images/phong4.webp" alt="Hình ảnh phòng 4">
                    <img class="img5 detail_img" id="img5" src="../../../assets/web/images/phong5.webp" alt="Hình ảnh phòng 5">
                </div>
                <div class="row content">
                    <!-- phía bên trái -->
                    <div class="col-lg-9 col-12">

                        <div class="row content-text">
                            <div class="col-lg-4 col-6 content__text">
                                <p id="name_room_detail">Room 101</p>
                                <p id="price_room_detail" style="color: yellow;">$50/night</p>
                            </div>
                            <div class="col-lg-4 col-6 context__icon">
                                <i id="icon_heart_detail" class="fa-regular fa-heart"></i>
                                <!-- <span id="favorite-icon" class="favorite-icon">&#10084;</span> -->
                                <i id="icon_share_detail" class="fa-solid fa-share" onclick="shareViaEmail()"></i>
                                <div id="addbag"></div>
                            </div>
                        </div>

                        <div class="row content-icon">
                            <div class="col-lg-3 my-2 mx-2 pt-2 icon__room" style="background-color:#ebe124d4;">
                                <i class="fa-solid fa-bed"></i>
                                <p id="type1">1 Bedroom</p>
                            </div>
                            <div class="col-lg-3 my-2 mx-2 pt-2 icon__room" style="background-color: #ebe124d4;">
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                <p id="type2">1 Bathroom</p>
                            </div>
                            <div class="col-lg-3 my-2 mx-2 pt-2 icon__room" style="background-color:#ebe124d4;">
                                <img src="../../../assets/web/images/icon sofa.png" alt="" style="width: 34px;height: 20px;">
                                <p id="type3">1 Livingroom</p>
                            </div>
                        </div>
                        <div class="row content-description">

                            <div class="col-lg-9">
                                <h4>Room Description</h4>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatu</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                        </div>
                        <div class="row content-review">
                            <div class="col-lg-2 col-6 ">
                                <h4>Reviews</h4>
                                <p>Convenient</p>
                                <p>Clean</p>
                                <p>Staff</p>
                                <p>Quality room</p>
                            </div>
                            <div class="col-lg-1 col-6 text-end">
                                <div class="d-flex justify-content-end">
                                    <i class="fa-solid fa-star  pe-2 " style="color:yellow;"></i>
                                    <h4>5.0</h4>
                                </div>
                                <p id="convenient">5.0</p>
                                <p id="clean">5.0</p>
                                <p id="staff">5.0</p>
                                <p id="quality">5.0</p>
                            </div>
                        </div>
                        <!-- comment detail -->
                        <div class="row content_comment-detail">
                            <div class="col-lg-5 comment-cus">
                                <div class="row">
                                    <div class="col-lg-2 col-3 ">
                                        <img id="avata1" class="avata__review" src="../../../assets/web/images/avata.jpg" alt="avata">
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <h5>jondoberman</h5>
                                        <p>Mar 12 2022</p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis est eaque inventore laborum deleniti doloribus, quasi quae ducimus deserunt officiis maiores laboriosam quaerat, voluptates autem enim, culpa vitae rerum. Facilis!</p>
                                </div>
                            </div>
                            <div class="col-lg-5 comment-cus">
                                <div class="row">
                                    <div class="col-lg-2 col-3">
                                        <img id="avata1" class="avata__review" src="../../../assets/web/images/avata.jpg" alt="">
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <h5>jondoberman</h5>
                                        <p>Mar 12 2022</p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis est eaque inventore laborum deleniti doloribus, quasi quae ducimus deserunt officiis maiores laboriosam quaerat, voluptates autem enim, culpa vitae rerum. Facilis!</p>
                                </div>
                            </div>
                            <div class="col-lg-5 comment-cus">
                                <div class="row">
                                    <div class="col-lg-2 col-3">
                                        <img id="avata1" class="avata__review" src="../../../assets/web/images/avata.jpg" alt="">
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <h5>jondoberman</h5>
                                        <p>Mar 12 2022</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis est eaque inventore laborum deleniti doloribus, quasi quae ducimus deserunt officiis maiores laboriosam quaerat, voluptates autem enim, culpa vitae rerum. Facilis!</p>
                                </div>
                            </div>
                            <div class="col-lg-5 comment-cus">
                                <div class="row">
                                    <div class="col-lg-2 col-3 ">
                                        <img id="avata1" class="avata__review" src="../../../assets/web/images/avata.jpg" alt="avata">
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <h5>jondoberman</h5>
                                        <p>Mar 12 2022</p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis est eaque inventore laborum deleniti doloribus, quasi quae ducimus deserunt officiis maiores laboriosam quaerat, voluptates autem enim, culpa vitae rerum. Facilis!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- phía bên phải -->
                    <div class="col-lg-3 col-12" id="booking-btn">
                        <a href="../../../views/home/rooms/booking.views.php" id="book1"><button id="booking_now" class="button_booking">BOOKING NOW</button></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>