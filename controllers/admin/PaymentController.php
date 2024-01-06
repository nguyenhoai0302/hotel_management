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
            case 'view':
                $this->getDetailPayment($_GET['id']);
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

    private function deletePayment($id)
    {
        $this->model->deletePayment($id);
        $this->libs->redirectPage('admin.php?controller=payments&action=list');
    }

    private function getDetailPayment($id)
    {
        include 'views/admin/payments/detail.view.php';
    }
}
