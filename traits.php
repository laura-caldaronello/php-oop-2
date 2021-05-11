<?php

trait PersonalData {
    public $date_of_birth;
    public $email;

    function checkDate() {
        if (strlen($this->date_of_birth) != 10) {
            $this->date_of_birth = null;
            throw new Exception('Formato non valido');
        }
        else {
            $day = $this->date_of_birth[0] . $this->date_of_birth[1];
            $month = $this->date_of_birth[3] . $this->date_of_birth[4];
            $year = $this->date_of_birth[6] . $this->date_of_birth[7] . $this->date_of_birth[8] . $this->date_of_birth[9];
            $dateString = $day . '-' . $month . '-' . $year;
            if (is_numeric($day) && is_numeric($month) && is_numeric($year) && $dateString == $this->date_of_birth) {
               $this->date_of_birth = $dateString;
            }
            else { 
                $this->date_of_birth = null;
                throw new Exception('Formato non valido');
            }
        }
    }

}