<?php
include_once ("model/Model.php");
class Controller {
    public $model;
    public function __construct() {
        $this -> model = new Model();
    }
    public function invoke() {
        if(!isset($_GET['book'])) {
            // nếu không có sách nào đặc biệt được gọi, ta sẽ show ra cả danh sách book
            $books = $this -> model -> getBookList();
            include 'view/booklist.php'; 
        } else {
            // in sách yêu cầu
            $book = $this -> model -> getBook($_GET['book']);
            include 'view/viewbook.php';
        }
    }
}