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


   
    class UserBehavior extends User{
        public $behav=true;
        private $sex;

        public function __construct($firstName, $lastName, $age, $maritalStatus, $balance,$behav)
        {
            parent::__construct($firstName, $lastName, $age, $maritalStatus, $balance);
            $this->behav=$behav;
        }

        function __destruct()
        {
            echo "Name :,{$this->firstName} and ,{$this->lastName}";
        }

        public function behavior(){
            return "iam ,{$this->maritalStatus} and ,{$this->behav}";
        }
    }

     // create an instance of class 
    $user=new UserBehavior("sudarshan","khatri",23,"single",232323,"gay");
    echo $user->behavior().PHP_EOL;


    


?>