<?php
class Person
   {
       var $name;
       var $lastname;
       function sayHello()
       {
  echo'Привет ';
  echo'How are doing?? ';
  echo'Bye ';
       }
   }
   $misha = new Person;
   $misha->name = 'Mihail';
   $misha->lastname = 'Petrov';
   $misha-> sayHello();
   
   ?>


