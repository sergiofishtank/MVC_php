<?php
    include_once("model/book.php");
    class Model{
        public function getBooklist(){
            return array(
                "libro a" => new Book("libro a", "autor libro 1", "descripciòn libro 1"),
                "libro b" => new Book("libro b", "autor libro 2", "descripciòn libro 2"),
                "libro c" => new Book("libro c", "autor libro 3", "descripciòn libro 3")
            );
        
        }
        
        public function getBook($title){
            $allBooks = $this->getBookList();
            return $allBooks[$title];
        }
    }
?>