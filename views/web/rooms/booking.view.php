<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godel Sun Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- link css -->
    <?php include_once('./assets/web/css/booking.css.php') ?>

</head>

<body>
    <div class="container">
        <!-- EDIT TITLE -->
        <div class="title">
            <p class="title-booking-room" style="user-select: none;">BOOKING ROOM</p>
        </div>
        <form action="" method="">
            <div class="content__text row">
                <div class="left-content col-lg-6 col-12">
                    <div class="infor">
                        <div class="input--group row">
                            <label for="" class="label">Name</label>
                            <input type="text" id="in" placeholder="Your name" name="name " class="name-booking" required>
                        </div>
                        <div class="input--group row">
                            <div class="check-date  col-6 ">
                                <label for="" class="label">Check in</label>
                                <input type="text" name="check_in_date" class="input__check-date" id="datepicker1">
                            </div>
                            <div class="check-date col-6">
                                <label for="" class="label">Check out</label>
                                <input type="text" name="check_out_date" class="input__check-date" id="datepicker2">
                            </div>
                        </div>
                        <div class="input--group">
                            <label for="" class="label">note</label>
                            <input type="text" class="input-request" id="SpecialR_Request" name="note" placeholder="Special Request">
                        </div>
                        <div>
                            <button type="submit" class="button" id="update_money">SAVE<button>
                        </div>
                        <hr>
                    </div>
        </form>
        <form action="" method="">
            <div class="payment">
                <p class="title-small">Payment By</p>
                <select id="infirst1" class="select-option">
                    <option disabled selected value>Credit or Debit card</option>
                    <option value="Credit">Credit</option>
                    <option value="Debit card">Debit card</option>
                </select>
                <div class="form-number--card">
                    <!-- TRÊN -->
                    <div class="number-card">
                        <input type="text" placeholder="Number card" class="input-number-card" id="number-card">
                    </div>
                    <hr>
                    <!-- DƯỚI -->
                    <div class="number-date-card row ">
                        <div class="col div-expiration">
                            <input type="text" class="input-number-card" placeholder="Expiration date" id="Expiration-date">
                        </div>

                        <div class="col div-CVV">
                            <input class="input-number-card" type="text" placeholder="CVV" id="CVV">
                        </div>
                    </div>
                </div>
                <div class="div-postal">
                    <input type="text" placeholder="Email" class="input-number-card" id="InEm">
                </div>
                <div>
                    <select id="infirst2" class="select-option">
                        <option disabled selected value>Country/region</option>
                        <option value="American">American</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Thai Lan">Thai Lan</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Lao">Lao</option>
                    </select>
                </div>
                <hr>
            </div>
            <div class="general-standard">
                <p class="title-small">General standards</p>
                <p>We ask all guests to remember a few simple rules to be a great guest.</p>
                <ul>
                    <li>Comply with house rules</li>
                    <li>Maintain the house as if it were your home</li>
                </ul>
            </div>
            <div>
                <button id="Revervation_required" type="submit" class="button">Revervation required</button>
            </div>
        </form>
    </div>

    <div class="col"></div>
    <!-- total price -->
    <div class="right-content col-lg-5 col-12">
        <div class="div-right">
            <div class="div-infor--room row d-flex justify-content-center align-items-center">
                <img src="https://seanahotel.com/wp-content/uploads/2019/09/Deluxe-Sea-view-2-1.jpg" alt="" class="col-7 img--infor" id="hinh">
            </div>
            <hr>
            <div class="div-price-detail">
                <p class="title-small">Prices Detail</p>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-7">
                        <div class="d-flex ">
                            <p id="tinhngay">$50</p><span id="tinhngay1">&nbsp;x 1 <span id="n">/night</span></span>
                        </div>
                        <p>Cleaning fee</p>
                        <p>Tax</p>
                    </div>
                    <div class="col-5 text-end">
                        <p id="tongcoban">$50</p>
                        <p>$3</p>
                        <p>$10</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="div-total-price d-flex justify-content-between align-content-center ">
                <p class="title-small">Total (USD)</p>
                <p id="tong" class="price">$00</p>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>