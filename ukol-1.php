<?php
class Ctverec
{

    public $delkastrany;

    public function __construct($delkastrany)
    {
        $this->delkastrany = $delkastrany;
    }


    public function spocitejobsah()
    {
        return $this->delkastrany * $this->delkastrany;
    }

}
$ctverec = new Ctverec(6);
Echo "Obsah čtverce o délce " . $ctverec->delkastrany . " je " . $ctverec->spocitejobsah();