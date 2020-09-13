<?php


namespace classes;


class Prefix
{
    private $date;

    public function setDate($date){
        $this->date = $date;
    }

    public function getDate(){
        return $this->date;
    }
}

$pref = new Prefix();
$pref->setDate(date('d/m/Y'));
echo "Today is " . $pref->getDate();
