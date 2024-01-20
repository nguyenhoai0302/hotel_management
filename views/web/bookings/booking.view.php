<?php include "./views/web/partials/header.view.php"
?>

<body>
    <!-- Body -->
    <div class="row body--content">
        <!-- EDIT TITLE -->
        <div class="title">
            <p class="title-booking-room" style="user-select: none;margin-bottom: 4px;font-weight: bold;">BOOKING ROOM</p>
        </div>

        <div class="content__text row justify-content-center">
            <div class="left-content col-lg-6 col-12">
                <form method="POST" action="#">
                    <div class="infor">
                        <div class="input--group row">
                            <label for="" class="label" style="  color: black;
                            font-weight: bold;">Name</label>
                            <input type="text" id="name" name="name" class="name_booking rounded-50px" value="<?php echo $userName ?>" disabled style="padding: 10px;background-color: #FDF5E6;border-radius: 5px;">
                        </div>
                        <div class="input--group row">
                            <div class="check-date col-6">
                                <label for="" class="label" style="  color: black;
                            font-weight: bold;">Check in</label>
                                <input type="datetime-local" name="checkin_date" class="input__check-date" id="check_in" style="border-radius: 5px;background-color: #FDF5E6;">
                            </div>
                            <div class="check-date col-6">
                                <label for="" class="label" style="  color: black;
                            font-weight: bold;">Check out</label>
                                <input min="" type="datetime-local" name="checkout_date" class="input__check-date" id="check_out" style="border-radius: 5px;background-color: #FDF5E6;">
                            </div>
                        </div>
                        <div class="input--group">
                            <label for="" class="label" style="  color: black;
                            font-weight: bold;">note</label>
                            <input type="text" name="note" class="input-request" id="SpecialR_Request" placeholder="Special Request" style="background-color: #FDF5E6;">
                        </div>
                        <div>
                            <button type="submit" class="button" id="update_money" name="booking">SAVE</button>
                        </div>
                        <hr>
                    </div>
                    <div class="col"></div>
                </form>
            </div>

            <!-- total price
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
                                    <p> echo "$" . $room['price']</p><span>&nbsp; X &nbsp;</span>
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
            </div> -->
        </div>
        <div id="pp"></div>
    </div>

</body>