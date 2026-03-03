<?php 
    class User{
        public $firstName;
        public $lastName;
        protected $age;
        protected $maritalStatus;
        private $balance;


        // create constructor for the class User
        public function __construct($firstName,$lastName,$age,$maritalStatus,$balance){
            $this->firstName=$firstName;
            $this->lastName=$lastName;
            $this->age=$age;
            $this->maritalStatus=$maritalStatus;
            $this->balance=$balance;
        }

        // function to create find intro
        public function UserDetail(){
            return "my name is , {$this->firstName}{$this->lastName} and ,{$this->balance} ";
        }
    

    }


    // create an instance of class 
    $user=new User("sudarshan","khatri",23,"single",232323);
    echo $user.UserDetail();
?>