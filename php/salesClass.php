<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;


include("./config.php");
include("./class/autoload.php");

class salesClass {
    private $sales;
    private $costumers;
    private $events;
    private $genres;
    private $halls;
    private $movies;
    private $plans;
    private $seats;
    private $tickets;

    function __construct(){
        $this->sales = new sales();
        $this->costumers = new costumers();
        $this->events = new events();
        $this->genres = new genres();
        $this->halls = new halls();
        $this->movies = new movies();
        $this->plans = new plans();
        $this->seats = new seats();
        $this->tickets = new tickets();
    }


    #Auth
    public function signin($arg){
        return $this->sales->login($arg);
    }

    public function signup($arg){
        return $this->sales->create($arg);
    }
    public function changePassword($myID,$newPassword){
        $arg = new \stdClass;
        $arg->id = $myID;
        $arg->sales_person_password = $newPassword;
        return $this->sales->updatePassword($arg);
    }

    #Movies

        // genres
        public function genresFind(){
            return $this->genres->find();
        }
        public function genresCreate($arg){
            return $this->genres->create($arg);
        }
        public function genresRemove($arg){
            return $this->genres->remove($arg);
        }


    public function movieFind(){
        return $this->movies->find();
    }
    public function movieCreate($arg){
        return $this->movies->create($arg);
    }
    public function movieRemove($arg){
        return $this->movies->remove($arg);
    }



    #Events and Date show        
        // plans
        public function plansFind(){
            return $this->plans->find();
        }
        public function plansCreate($arg){
            return $this->plans->create($arg);
        }
        public function plansRemove($arg){
            return $this->plans->remove($arg);
        }


    // events
    public function eventsFind(){
        return $this->events->find();
    }
    public function eventsCreate($arg){
        return $this->events->create($arg);
    }
    public function eventsRemove($arg){
        return $this->events->remove($arg);
    }




    #costumers
    public function costumersFind(){
        return $this->costumers->find();
    }
    public function costumersCreate($arg){
        return $this->costumers->create($arg);
    }
    public function costumersRemove($arg){
        return $this->costumers->remove($arg);
    }



    #Tickets and halls to reserveren

        // halls
        public function hallsFind(){
            return $this->halls->find();
        }
        public function hallsCreate($arg){
            return $this->halls->create($arg);
        }
        public function hallsRemove($arg){
            return $this->halls->remove($arg);
        }

        // seats
        public function seatsFind(){
            return $this->seats->find();
        }
        public function seatsCreate($arg){
            return $this->seats->create($arg);
        }
        public function seatsRemove($arg){
            return $this->seats->remove($arg);
        }

    // tickets
    public function ticketsFind(){
        return $this->tickets->find();
    }
    public function ticketsCreate($arg){
        return $this->tickets->create($arg);
    }
    public function ticketsRemove($arg){
        return $this->tickets->remove($arg);
    }




}


?>