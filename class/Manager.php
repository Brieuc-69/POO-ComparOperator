<?php

class Manager {

    private $bdd;


    public function __construct($bdd) {
        $this->bdd = $bdd;
    }

    function getAllDestination(){

        $request = $this->bdd->query('SELECT * FROM destination');
        $destinations = $request->fetchAll();
        return $destinations;
    }

    function getOperatorByDestination(){

        $request = $this->bdd->prepare('SELECT * FROM tour_operator WHERE destinationId = :destinationId');
        $request->execute(array(
            'destinationId' => $destinationId
        ));
        $tourOperators = $request->fetchAll();
        return $tourOperators;

    }

  


    public function creatReview() {
        $request = $this->bdd->prepare('INSERT INTO ')

    }

    public function getReviewByOperatorByOperatorid(SELECT * FROM ) {

    }

    public function getAllOperator() {

    }
    
    public function updateOperatorToPremium() {

    }

    public function createTourOperator() {

    }

    public function crateDestination() {

    }
        
    
}

?>