<?php 
    class NewData{
        var $link;
        var $title;
        var $date;

        public function __construct($link, $title, $date){
            $this->link = $link;
            $this->title = $title;
            $this->date = $date;
        }
    }
?>