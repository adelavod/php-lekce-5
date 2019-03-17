<?php
class GeometrickyUtvar
{
    private $pocetstran;

    public function __construct($pocetstran)
    {

          $this->pocetstran = $pocetstran;

    }

    public function  ziskejpocetstran()
    {

        return $this->pocetstran;

    }
}


class ctverec extends GeometrickyUtvar

{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
        parent::__construct(4);
    }

    public function ziskejobvod()
    {
        return $this->a * $this->ziskejpocetstran();

    }


}

class trojuhelnik extends GeometrickyUtvar
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct(3);
    }

    public function ziskejobvod()
    {
        return $this->a + $this->b + $this->c;
    }
}

echo '<h3>Čtverec</h3>';
$ctverec = new Ctverec(3);
echo 'Počet stran: ' . $ctverec->ziskejpocetstran() . '<br>';
echo 'Obvod: ' . $ctverec->ziskejobvod() . '<br>';

echo '<h3>Trojúhelník</h3>';
$troj = new trojuhelnik(2,4,5);
echo 'Počet stran: ' . $troj->ziskejpocetstran() . '<br>';
echo 'Obvod: '.$troj->ziskejobvod() . '<br>';