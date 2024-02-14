<?php

class Review {

    private $id;

    private $message;

    private $author;

    private $tourOperatorid;


    public function __construct($data) {

        $this->id = $data['id'];
        $this->message = $data['message'];
        $this->author = $data['author'];
        $this->tourOperatorid = $data['tour_operator_id'];
    }
    

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
    }


    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getTourOperatorid() {
        return $this->tourOperatorid;
    }

    public function setTourOperatorid($tourOperatorid) {
        $this->tourOperatorid = $tourOperatorid;
    }
}

?>