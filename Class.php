<?php
    class ​studentClass
    {
        function get_student ($name){
            return $name;
        }
        public function get_gender($gender='Male'){
            return "Name:" .$this->get_student("Bla"). "grnder".$gender;
        }
        public function get_dob($dob){
            return "Name:" .$this->get_student(''). "Date of birth".$dob;
        }
       
    }
     $student = new ​studentClass();
    echo  $student->get_student('Theara');
?>