<form action="" method="">
    <div class="payment">
        <div class="title">
            <img id="logo_hotel" src="../../../assets/web/images/logo.png" alt="">
        </div>
        <p class="title-small">Payment By</p>
        <select id="infirst1" class="select-option">
            <option disabled selected value>Credit or Debit card</option>
            <option value="Credit">Credit</option>
            <option value="Debit card">Debit card</option>
        </select>
        <div class="form-number--card">
            <div>
                <label>Name:</label>
                <span><?php echo $bill_information['name'] ?></span>
            </div>
            <div class="bill-info">
                <label>Check-in Date:</label>
                <span><?php echo $bill_information['check_in_date'] ?></span>
            </div>
            <div class="bill-info">
                <label>Check-out Date:</label>
                <span><?php echo $bill_information['check_out_date'] ?></span>
            </div>
            <div class="bill-info">
                <label>Price:</label>
                <span><?php echo $bill_information['price'] ?>VND/Night</span>
            </div>
            <div class="bill-info">
                <label>Total Amount:</label>
                <span><?php echo $bill_information['total_price'] ?>VND</span>
            </div>
        </div>
        <div class="div-postal">
            <input type="text" placeholder="Email" class="input-number-card" id="InEm">
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
    <div class="button-back-print">
        <div class="button-container">
            <a href="/"><button type="button">Back</button></a>
        </div>
        <div>
            <button id="Revervation_required" type="submit" class="button">Revervation required</button>
        </div>
    </div>
</form>

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
                    <input type="text" id="in" name="name" placeholder="name" class="name-booking" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>">
                </div>
                <div class="input--group row">
                    <div class="check-date  col-6 ">
                        <label for="" class="label">Check in</label>
                        <?php //$day = getNextDateTime();
                        //$maxDayCheckIn = getMaxCheckInDateTime() 
                        ?>
                        <input type="datetime-local" min="<?php echo $day ?>" name="check_in" class="input__check-date" id="check_in">
                    </div>
                    <div class="check-date col-6">
                        <label for="" class="label">Check out</label>
                        <input min="<?php echo $day ?>" type="datetime-local" max="<?php echo $maxDayCheckIn ?>" name="check_out" class="input__check-date" id="check_out">
                    </div>
                </div>
                <div class="text_input">
                    <textarea id="message" name="message" rows="4" cols="66" required></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/"><button type="button" class="button">Back</button></a>
                    <button type="submit" class="button">Booking</button>
                </div>
                <hr>
                <hr>
            </div>
            <div class="payment">
                <div class="title">
                    <img id="logo_hotel" src="../../../assets/web/images/logo.png" alt="">
                </div>
                <p class="title-small">Payment By</p>
                <select id="infirst1" class="select-option">
                    <option disabled selected value>Credit or Debit card</option>
                    <option value="Credit">Credit</option>
                    <option value="Debit card">Debit card</option>
                </select>
                <div class="form-number--card">
                    <div>
                        <label>Name:</label>
                        <span><?php echo $bill_information['name'] ?></span>
                    </div>
                    <div class="bill-info">
                        <label>Check-in Date:</label>
                        <span><?php echo $bill_information['checkin_date'] ?></span>
                    </div>
                    <div class="bill-info">
                        <label>Check-out Date:</label>
                        <span><?php echo $bill_information['checkout_date'] ?></span>
                    </div>
                    <div class="bill-info">
                        <label>Price:</label>
                        <span><?php echo $bill_information['price'] ?>USD/Night</span>
                    </div>
                    <div class="bill-info">
                        <label>Total Amount:</label>
                        <span><?php echo $bill_information['total_price'] ?>USD</span>
                    </div>
                </div>
                <div class="div-postal">
                    <input type="text" placeholder="Email" class="input-number-card" id="InEm">
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
            <div class="button-back-print">
                <div class="button-container">
                    <a href="/"><button type="button">Back</button></a>
                </div>
                <div>
                    <button id="Revervation_required" type="submit" class="button">payment</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="col"></div>
<!-- total price -->
<div class="right-content col-lg-5 col-12">
    <div class="div-right">
        <?php
        if (!empty($images)) {
            $image = $images[0]['image_url'];
        ?>
            <div class="div-infor--room row d-flex justify-content-center align-items-center">
                <img src="<?php echo $image; ?>" alt="image artistic_lounge_retreat room" class="col-7 img--infor" id="image_room">
            </div>
        <?php
        }
        ?>
        <hr>
        <div class="div-price-detail">
            <p class="title-small">Prices Detail</p>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-7">

                    <div class="d-flex ">
                        <p><?php echo "$" . $room['price'] ?></p><span>&nbsp; X &nbsp;</span>
                        <p id="nights"></p>
                        <p id="nights">/nights</p>
                    </div>
                    <p>Cleaning fee</p>
                    <p>Tax</p>
                </div>
                <div class="col-5 text-end">
                    <p id="totalroom">0USD</p>
                    <p>$5</p>
                    <p>$10</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="div-total-price d-flex justify-content-between align-content-center ">
            <p class="title-small">Total (USD)</p>
            <input type="text" name="total_price" id="sum" readonly>USD
        </div>
    </div>
</div>
</div>