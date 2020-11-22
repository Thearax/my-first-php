<?php
    /*function getHello(){
        return "Hello";
    }
     echo getHello(); */
     
     /*function getHello($n1, $n2, $n3){
         $result=($n1 + $n2)- $n3;
         return $result;
     }
     echo getHello(5,10,10);*/
     

     
     /*function Studentinfo($name, $gender, $age,$grade){
         return"Student name:$name<br> Age:$gender<br> Age:$age<br>  Grade:$grade";
         }
    $student=[
        'A',
        'B',
        'C',
        'D',
        'E',
    ];
    for($i=0; $i<count($student);$i++)
         {
             echo Studentinfo($student[$i],'M', 20, 7);
         }*/


         //Global scope;
        /* $count=1;
         function countNumber(){
             global $count;
             $count ++;
             echo $count;
         }
         countNumber();
         countNumber();
         countNumber();
         echo '<br>';
         echo $count;*/


       //Static funcion
         function staticFuncion(){
             static $number=1;
             echo $number.'<br>';
             $number ++;
         }
         staticFuncion();
         staticFuncion();
         staticFuncion();

?>