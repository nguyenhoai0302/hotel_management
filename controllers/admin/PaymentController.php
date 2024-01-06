<?php
include_once 'models/PaymentModel.php';
include_once 'utils/helpers.php';

class PaymentController
{
    private $model;
    private $libs;

    public function __construct()
    {
        $this->model = new PaymentModel();
        $this->libs = new LibCommon();
    }
    function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch ($action) {
            case 'list':
                $this->getListPayment();
                break;
            case 'edit':
                $this->editPayment($_GET['id']);
                break;
            case 'delete':
                $this->deletePayment($_GET['id']);
                break;
            default:
                # code...
                break;
        }
    }


    private function getListPayment()
    {
        $payments = $this->model->getList();
        include 'views/admin/payments/list.view.php';
    }
    private function editPayment($id)
    {
        // Lấy thông tin đặt phòng dựa trên ID
        $data = $this->model->getPaymentEditById($id);
        $payment = $data->fetch_assoc();
        if (!$payment) {
            // Xử lý khi không tìm thấy đặt phòng
            $this->libs->redirectPage('admin.php?controller=payments&action=list');
        }

        if (isset($_POST['update'])) {
            $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
            // Thực hiện cập nhật thông tin đặt phòng
            $updatePayment = $this->model->updatePayment($id, $status);

            if ($updatePayment) {
                $this->libs->redirectPage('admin.php?controller=payments&action=list');
            }
        }

        include 'views/admin/payments/edit.view.php';
    }

    private function deletePayment($id)
    {
        $this->model->deletePayment($id);
        $this->libs->redirectPage('admin.php?controller=payments&action=list');
    }
}
