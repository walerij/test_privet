<?php
class Privet {

   function hello($name="John")
     {
         return "hello, "+name;

     }  

   function hi_rus($name="Иван", $hello="Здравствуйте")
   {
       return $hello+", "+$name;
   }  
}