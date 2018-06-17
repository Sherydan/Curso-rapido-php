<?php
    class Person{
        #NOTA: Ideal es siempre tener UNA clase por archivo
        private $name;
        private $email;
        public static $age = 40;

        public static function getAge(){
            #en vez de usar this se usa "self" al momento de trabajar con una variable estatica
            return self::$age;
        }

        public function __CONSTRUCT($name, $email){
            #setear variables
            $this->name = $name;
            $this->email = $email;
            echo 'Person Created'.'<br>';
        }

        public function __DESTRUCT(){
            echo __CLASS__.' Destroyed';
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name.'<br>';
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email.'<br>';
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

    }

    class Customer extends Person {
        private $balance;

        public function __CONSTRUCT($name,$email, $balance){
            #debo llamer al constructor padre
            parent::__CONSTRUCT($name,$email, $balance);
            #siempre setear variables
            $this->balance = $balance;
            echo 'A new '. __CLASS__ . ' has been created <br>';           
        }

        /**
         * Get the value of balance
         */ 
        public function getBalance()
        {
                return $this->balance. '<br>';
        }

        /**
         * Set the value of balance
         *
         * @return  self
         */ 
        public function setBalance($balance)
        {
                $this->balance = $balance;

                return $this;
        }  
    }
    
    /*
    $person1 = new Person('juanito', 'juanito@gmail.com');
    echo $person1->getName();
    echo $person1->getEmail();
    
    $person1->setName('luis');
    $person1->setEmail('luis@gmail.com');
    
    echo $person1->getName();
    echo $person1->getEmail();
    */

    $customer1 = new Customer('antonio', 'antonio@gmail.com', '90');
    echo $customer1->getBalance();

    #propiedades y metodos estaticos
    echo Person::$age;
    echo Person::getAge();
    
    
?>