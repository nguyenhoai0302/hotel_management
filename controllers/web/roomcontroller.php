<?php

class roomcontroller
{
    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch ($action) {
            case 'list':
                $this->getListRoom();
                break;
            case 'Detail':
                $this->getDetailRoom($_GET['id']);
                break;
            default:
                break;
        }
    }
    ///////
    private function getListRoom()
    {
        require_once './views/web/rooms/room.view.php';
    }
    private function getDetailRoom()
    {

        $query = $this->roomModel->getDetailById($id);
        $room = $query->fetch_assoc();
        //    var_dump($room);
        //    die();

        require_once './views/web/rooms/detail.view.php';
    }
}
