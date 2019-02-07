<?php

class PersonNew {

    var $name;
    var $lastname;

  
    
    
    function __construct($name, $lastname) {
        $this->name = $name;
        $this->lastname = $lastname;
    }

        function sayHello() {
        echo ' Привет ';
        echo ' My name is '.$this->name;
        echo ' How are doing?? ';
        
    }
    function sayGoodBye(){
      echo ' Bye ' .$this->name;  
    }
}

$misha = new PersonNew('Misha', 'Petrov');
$misha->sayHello();
$misha->sayGoodBye();

$petja = new PersonNew('Petja', 'Ivanov');
$petja->sayHello();



