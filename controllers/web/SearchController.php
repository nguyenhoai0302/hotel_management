<?php

class SearchController {
    public function index() {
        // Xử lý logic tìm kiếm ở đây
        // Gọi model để truy vấn dữ liệu từ cơ sở dữ liệu
        // Trả kết quả tìm kiếm cho view
        // ...

        // Ví dụ: lấy danh sách phòng từ model
        $rooms = RoomModel::searchRooms($_GET['name']);

        // Hiển thị kết quả tìm kiếm bằng view
        include 'views/search_result.php';
    }
}
