 <div class="container">
     <h1>Update Payment</h1>
     <form action="" method="">
         <div class="form-group">
             <label for="id">Payment ID:</label>
             <input type="text" class="form-control" id="id" name="id" required placeholder="id" value="<?php echo $id['id']; ?>">
         </div>
         <div class="form-group">
             <label for="bookingId">Booking ID:</label>
             <input type="text" class="form-control" id="bookingId" name="bookingId" required placeholder="bookingId" value="<?php echo $bookingId['bookingId']; ?>">
         </div>
         <div class="form-group">
             <label for="Amount">Amount:</label>
             <input type="text" class="form-control" id="Amount" name="Amount" required placeholder="Amount" value="<?php echo $Amount['Amount']; ?>">
         </div>
         <div class="form-group">
             <label for="paymentDate">Payment Date:</label>
             <input type="date" class="form-control" id="paymentDate" name="paymentDate" required placeholder="paymentDate" value="<?php echo $paymentDate['paymentDate']; ?>">
         </div>
         <div class="form-group">
             <label for="PaymentMethod">Payment Method:</label>
             <select class="form-control" id="PaymentMethod" name="PaymentMethod" required>
                 <option value="">Select...</option>
                 <option value="creditCard" <?php if (isset($PaymentMethod['PaymentMethod']) && $PaymentMethod['PaymentMethod'] == '1') {
                                                echo 'selected';
                                            } ?>>Credit Card</option>
                 <option value="paypal" <?php if (isset($PaymentMethod['PaymentMethod']) && $PaymentMethod['PaymentMethod'] == '1') {
                                            echo 'selected';
                                        } ?>>PayPal</option>
                 <option value="bankTransfer" <?php if (isset($PaymentMethod['PaymentMethod']) && $PaymentMethod['PaymentMethod'] == '1') {
                                                    echo 'selected';
                                                } ?>>Bank Transfer</option>
             </select>
         </div>
         <div class="form-group">
             <label for="updated_at">Payment Date:</label>
             <input type="date" class="form-control" id="updated_at" name="updated_at" required placeholder="updated_at" value="<?php echo $updatedAt['updated_at']; ?>">
         </div>
         <div class="form-group">
             <label for="created_at">Payment Date:</label>
             <input type="date" class="form-control" id="created_at" name="created_at" required placeholder="created_at" value="<?php echo $createdAt['created_at']; ?>">
         </div>
         <button type="submit" class="btn btn-primary">Update</button>
     </form>
 </div>