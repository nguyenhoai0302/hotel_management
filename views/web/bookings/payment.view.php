<?php include "./views/web/partials/header.view.php"
?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <form action="" method="POST">
            <div class="col-lg-6" style=" margin-top: 40px;">
                <h1 class="text-center mb-4" style="color: yellow;font-weight: bold;">Room Payment</h1>
                <div class="form-group">
                    <label for="phone" style="  color: black;
                            font-weight: bold;">Method</label>
                    <select id=" payment_method" class="select-option" name="payment_method" style="border-radius: 5px;background-color: #FDF5E6;">
                        <option disabled selected value>Credit or Debit card</option>
                        <option value="1">Credit</option>
                        <option value="2">Debit card</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="booking_id" id="booking_id">
                </div>

                <div class="form-group">
                    <label for="payment_date" style="  color: black;
                            font-weight: bold;">Date:</label>
                    <input type=" date" class="form-control" name="payment_date" id="payment_date" style="width:630px;background-color: #FDF5E6;" value="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="form-group">
                    <label for="amount" style="  color: black;
                            font-weight: bold;">Amount:</label>
                    <input type=" text" class="form-control" placeholder="Amount" name="amount" id="amount" value="<?php echo $amount ?>" style="width:630px;background-color: #FDF5E6;" disabled>
                </div>

                <button type="submit" class="btn btn-warning btn-block" name="payment">Pay Now</button>

            </div>
            </form>

            <div class="col-lg-6">
                <div class="right-content col-lg-6 col-12">
                    <div class="div-right" style="margin-top: 40px;width:600px;">
                        <div class="div-infor--room row d-flex justify-content-center align-items-center">
                            <img src="https://seanahotel.com/wp-content/uploads/2019/09/Deluxe-Sea-view-2-1.jpg" alt="" class="col-7 img--infor" id="hinh">
                        </div>
                        <hr>
                        <div class="div-price-detail">
                            <p class="title-small">Detail</p>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-7">
                                    <div class="d-flex">
                                        <p><?php echo $booking['room_price'] ?></p><span> X </span>
                                        <p id="nights"> <?php echo $days ?> </p>
                                        <p id="nights"> /nights</p>
                                    </div>
                                    <p>Cleaning fee</p>
                                    <p>Tax</p>
                                </div>
                                <div class="col-5 text-end">
                                    <p id="tongcoban">$<?php echo $booking['total_price'] ?></p>
                                    <p>$<?php echo $booking['room_tax'] ?></p>
                                    <p>$<?php echo $booking['cleaning_fee'] ?></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="div-total-price d-flex justify-content-between align-content-center">
                            <p class="title-small" style="font-size: smaller;">Total (USD)</p>
                            <input type="text" name="amount" id="sum" value="<?php echo $amount ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include "./views/web/partials/footer.view.php"
?>