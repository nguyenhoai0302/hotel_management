<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godel Sun Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- link css -->
    <?php include_once('assets/web/css/booking.css.php') ?>
</head>

<body>
    <!-- Body -->
    <div class="row body--content">
        <!-- EDIT TITLE -->
        <div class="title">
            <p class="title-booking-room" style="user-select: none;">BOOKING ROOM</p>
        </div>

        <div class="content__text row">
            <div class="left-content col-lg-6 col-12">
                <div class="infor">
                    <div class="input--group row">
                        <label for="" class="label">Name</label>
                        <input type="text" id="name" name="name" placeholder="name" class="name_booking" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>" disabled>
                    </div>
                    <div class="input--group row">
                        <div class="check-date col-6">
                            <label for="" class="label">Check in</label>
                            <?php
                            ?>
                            <input type="datetime-local" value="<?php echo $checkin_date ?>" name="checkin_date" class="input__check-date" id="check_in">
                        </div>
                        <div class="check-date col-6">
                            <label for="" class="label">Check out</label>
                            <input min="" type="datetime-local" value="<?php echo $checkout_date ?>" name="checkout_date" class="input__check-date" id="check_out">
                        </div>
                    </div>
                    <div class="input--group">
                        <label for="" class="label">note</label>
                        <input type="text" name="note" class="input-request" value="<?php echo $notte ?>" id="SpecialR_Request" placeholder="Special Request">
                    </div>
                    <div>
                        <button type="submit" class="button" id="update_money" name="booking">SAVE</button>
                    </div>
                    <hr>
                </div>

                <div class="col"></div>
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

</html>


<script>
    // Lấy các phần tử input và phần tử hiển thị tổng giá tiền
    var checkInInput = document.getElementById('check_in');
    var checkOutInput = document.getElementById('check_out');
    var sumElement = document.getElementById('sum');
    var nightsElement = document.getElementById('nights');
    var totalroomElement = document.getElementById('totalroom');

    // Gắn sự kiện change cho ô input check_in và check_out
    checkInInput.addEventListener('change', calculateTotal);
    checkOutInput.addEventListener('change', calculateTotal);

    function calculateTotal() {
        var checkInValue = checkInInput.value;
        var checkOutValue = checkOutInput.value;
        // Kiểm tra xem cả hai input đã được điền đầy đủ giá trị hay chưa
        if (checkInValue && checkOutValue) {
            //chuyển thành giá trị date
            var checkInDate = new Date(checkInValue);
            var checkOutDate = new Date(checkOutValue);
            // Tính nights 
            var timeDiff = Math.abs(checkOutDate.getTime() - checkInDate.getTime());
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
            var nights = diffDays;

            // Tính tổng giá tiền
            var pricePerNight = <?php echo $room['price']; ?>;
            var cleaningFee = 3;
            var tax = 10;
            var totalroom = pricePerNight * diffDays;
            var total = (pricePerNight * diffDays) + cleaningFee + tax;

            // Gán kết quả vào phần tử có id = sum
            sumElement.value = total;
            nightsElement.textContent = nights;
            totalroomElement.textContent = totalroom;
        }
    }
</script>