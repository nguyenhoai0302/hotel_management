<?php include "./views/web/partials/header.view.php"
?>

<body>

    <form action="" method="post">
        <div class="container">
            <div class="payment">
                <div class="title">
                    <img id="logo_hotel" src="./assets/web/images/logo.png" alt="logo">
                </div>
                <p class="title-small">Payment By</p>
                <select id="infirst1" class="select-option">
                    <option disabled selected value>Credit or Debit card</option>
                    <option value="Credit">Credit</option>
                    <option value="Debit card">Debit card</option>
                </select>
                <div class="form-number--card">
                    <div class="number-card">
                        <input type="text" placeholder="Number card" class="input-number-card form-control" id="number-card">
                    </div>
                    <hr>
                    <div class="number-date-card row">
                        <div class="col div-expiration">
                            <input type="text" class="input-number-card form-control" placeholder="Expiration date" id="Expiration-date">
                        </div>

                        <div class="col div-CVV">
                            <input class="input-number-card form-control" type="text" placeholder="CVV" id="CVV">
                        </div>
                    </div>
                </div>
                <div class="div-postal">
                    <input type="text" placeholder="Email" class="input-number-card form-control" id="InEm">
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
            <div class="text-center">
                <button id="Revervation_required" type="submit" class="button btn btn-primary">Reservation required</button>
            </div>
        </div>

    </form>
</body>
<?php include "./views/web/partials/footer.view.php"
?>