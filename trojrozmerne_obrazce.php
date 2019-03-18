<?php

interface ITrojrozmernyObrazec
{
    public function ziskejObjem();
    public function ziskejPovrch();
}

class Kvadr implements ITrojrozmernyObrazec
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function ziskejObjem()
    {
        return $this->a * $this->b * $this->c;
    }

    public function ziskejPovrch()
    {
        return 2*($this->a * $this->b + $this->b * $this->c + $this->a * $this->c);
    }

}
class Krychle implements ITrojrozmernyObrazec
{
    public $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function ziskejObjem()
    {
        return $this->a * $this->a * $this->a;
    }

    public function ziskejPovrch()
    {
        return $this->a * $this->a * 6;
    }

}
class Koule implements ITrojrozmernyObrazec
{
    public $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function ziskejPovrch()
    {
        $r2 = pow($this->r,2);
        return round (4 * $r2 * M_PI, 2);
    }

    public function ziskejObjem()
    {
        $r3 = $this->r * $this->r * $this->r;
        return round(4/3 * M_PI * $r3, 2);
    }

}
class Jehlan implements ITrojrozmernyObrazec

{   public $a;
    public $h;

    public function __construct($a, $h)
    {
        $this->a = $a;
        $this->h = $h;
    }

    public function ziskejObjem()
    {
       return round((pow($this->a,2)*$this->h)/3, 2);
    }

    public function ziskejPovrch()
    {
        $obsahpodstavy = pow($this->a,2);
        $delkastrany = sqrt((pow (($this->a)/2, 2) + pow($this->h, 2)));
        $obsahstrany = ($delkastrany * $this->a)/2;
        return round($obsahpodstavy + 4* $obsahstrany, 2);
    }
}

function vypisdetail (ITrojrozmernyObrazec $utvar)
{
    echo get_class($utvar) . " má objem: " .$utvar->ziskejObjem() . " cm<sup>2</sup><br>";
    echo get_class($utvar) . " má povrch: " .$utvar->ziskejPovrch() . " cm<sup>3</sup><br>";
}

$xa = new Krychle(5);
$xe = new Kvadr(2,3,7);
$xi = new Koule(6);
$xo = new Jehlan(3,4);

vypisDetail($xa);
vypisDetail($xe);
vypisDetail($xi);
vypisDetail($xo);

