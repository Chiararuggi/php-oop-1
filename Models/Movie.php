<?php
    class Movie
    {
        public $name;
        public $descprition;
        public $date;
    
        public function __construct($name, $descprition, $date)
        {
            $this->name = $name;
            $this->description = $description;
            $this->date = $date;
        }
    
        public function getMovie()
        {
            $result = $this->name . ", " . $this->description . " - " . $this->date;
            return $result;
        }
    }
?>