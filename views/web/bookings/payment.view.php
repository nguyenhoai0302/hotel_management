<?php include "./views/web/partials/header.view.php"
?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="text-center mb-4" style="color: yellow;">Room Payment</h1>
                <form action="" method="post">

                    <div class="form-group">
                        <label for="phone">Method</label>
                        <select id="payment_method" class="select-option" name="payment_method">
                            <option disabled selected value>Credit or Debit card</option>
                            <option value="1">Credit</option>
                            <option value="2">Debit card</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="booking_id" id="booking_id">
                    </div>

                    <div class="form-group">
                        <label for="payment_date">Date:</label>
                        <input type="date" class="form-control" name="payment_date" id="payment_date" style="width:630px;" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" class="form-control" placeholder="Amount" name="amount" id="amount" value="<?php echo $amount ?>" style="width:630px;" disabled>
                    </div>

                    <button type="submit" class="btn btn-warning btn-block" name="payment">Pay Now</button>
                </form>
            </div>

            <div class="col-lg-6">
                <div class="right-content col-lg-6 col-12">
                    <div class="div-right">
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
                            <p class="title-small">Total (USD)</p>
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