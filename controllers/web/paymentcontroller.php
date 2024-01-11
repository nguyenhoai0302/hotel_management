 <?php
    class PaymentController
    {
        private $model;

        public function __construct()
        {
            $this->model = new PaymentModel();
        }

        public function getListPayment($bookingId, $paymentDate, $Amount, $PaymentMethod, $updatedAt, $createdAt)
        {
            return $this->model->getList($bookingId, $paymentDate, $Amount, $PaymentMethod, $updatedAt, $createdAt);
        }

        public function getPayment($id)
        {
            return $this->model->getPayment($id);
        }

        public function editPayment($id, $bookingId, $paymentDate, $Amount, $PaymentMethod, $updatedAt, $createdAt)
        {
            return $this->model->updatePayment($id, $bookingId, $paymentDate, $Amount, $PaymentMethod,$updatedAt, $createdAt);
        }

        public function deletePayment($id)
        {
            return $this->model->deletePayment($id);
        }
    }
    ?>