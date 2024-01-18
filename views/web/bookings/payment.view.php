<?php include "./views/web/partials/header.view.php"
?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="text-center mb-4" style="text-align: center;">Room Payment</h1>

                <form action="process_payment.php" method="post">
                    <div class="form-group">
                        <label for="amount">Payment Amount:</label>
                        <input type="text" class="form-control" placeholder="Amount" name="amount" id="amount" style="width:500px;">
                    </div>

                    <div class="form-group">
                        <label for="booking_id">Booking ID:</label>
                        <input type="text" class="form-control" placeholder="Booking ID" name="booking_id" id="booking_id" style="width:500px;">
                    </div>

                    <div class="form-group">
                        <label for="full_name">Full Name:</label>
                        <input type="text" class="form-control" placeholder="Name" name="full_name" id="full_name" style="width:500px;">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" style="width:500px;">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Phone Number" id="phone" style="width:500px;">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Pay Now</button> <!-- Thêm lớp "btn-block" để nút chiếm toàn bộ chiều ngang -->
                </form>
            </div>
        </div>
    </div>
</body>
<?php include "./views/web/partials/footer.view.php"
?>