<?php

interface IGeometrickyUtvar
{
    public function ziskejObvod();
    public function ziskejPocetStran();
}
abstract class  GeometrickyUtvar implements IGeometrickyUtvar
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

function vypisDetail(IGeometrickyUtvar $utvar)
{
    echo '<h3>' . get_class($utvar) . '</h3>';
    echo 'Počet stran: ' . $utvar->ziskejPocetStran() . '<br>';
    echo 'Obvod: ' . $utvar->ziskejObvod() . '<br>';

}

$ctr = new Ctverec(7);
vypisDetail($ctr);

$tru = new trojuhelnik(3,4,9);
vypisdetail($tru);

