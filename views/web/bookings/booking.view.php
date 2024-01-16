<?php include "./views/web/partials/header.view.php"
?>

<body>
    <!-- Body -->
    <div class="row body--content">
        <!-- EDIT TITLE -->
        <div class="title">
            <p class="title-booking-room" style="user-select: none;">BOOKING ROOM</p>
        </div>

        <div class="content__text row">
            <div class="left-content col-lg-6 col-12">
                <form method="POST" action="#">
                    <div class="infor">
                        <div class="input--group row">
                            <label for="" class="label">Name</label>
                            <input type="text" id="name" name="name" class="name_booking" value="<?php echo $userName ?>" disabled>
                        </div>
                        <div class="input--group row">
                            <div class="check-date col-6">
                                <label for="" class="label">Check in</label>
                                <input type="datetime-local" name="checkin_date" class="input__check-date" id="check_in">
                            </div>
                            <div class="check-date col-6">
                                <label for="" class="label">Check out</label>
                                <input min="" type="datetime-local" name="checkout_date" class="input__check-date" id="check_out">
                            </div>
                        </div>
                        <div class="input--group">
                            <label for="" class="label">note</label>
                            <input type="text" name="note" class="input-request" id="SpecialR_Request" placeholder="Special Request">
                        </div>
                        <div>
                            <button type="submit" class="button" id="update_money" name="booking">SAVE</button>
                        </div>
                        <hr>
                    </div>
                    <div class="col"></div>
                </form>
            </div>

            <!-- total price -->
            <div class="right-content col-lg-6 col-12">
                <div class="div-right">
                    <div class="div-infor--room row d-flex justify-content-center align-items-center">
                        <img src="https://seanahotel.com/wp-content/uploads/2019/09/Deluxe-Sea-view-2-1.jpg" alt="" class="col-7 img--infor" id="hinh">
                    </div>
                    <hr>
                    <div class="div-price-detail">
                        <p class="title-small">Prices Detail</p>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-7">
                                <div class="d-flex">
                                    <p><?php echo "$" . $room['price'] ?></p><span>&nbsp; X &nbsp;</span>
                                    <p id="nights"></p>
                                    <p id="nights">/nights</p>
                                </div>
                                <p>Cleaning fee</p>
                                <p>Tax</p>
                            </div>
                            <div class="col-5 text-end">
                                <p id="tongcoban">0USD</p>
                                <p>$3</p>
                                <p>$10</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="div-total-price d-flex justify-content-between align-content-center">
                        <p class="title-small">Total (USD)</p>
                        <input type="text" name="total_price" id="sum" readonly>USD
                    </div>
                </div>
            </div>
        </div>
        <div id="pp"></div>
    </div>

</body>
<?php include "./views/web/partials/footer.view.php"
?>