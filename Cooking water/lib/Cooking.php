<?php

if (!empty($_POST['m']) && !empty($_POST['p']) && !empty($_POST['t1']))
{
    if (is_numeric($_POST['m']) && is_numeric($_POST['p']) && is_numeric($_POST['t1']))
    {
        $m = $_POST['m'];
        $p = $_POST['p'];
        $t1 = $_POST['t1'];

        $cook = new Cooking($m, $p, $t1);
        echo '</br>'.'Result: ';
        echo $cook->getResult();
    } else {
        echo 'Please input numbers!';
    }
} else {
    echo 'Please input data!';
}

class Cooking
{
    private $m;                         //water mass
    private $t1;                        //start temperature
    private $t2 = 100;
    private $dt;
    private $c = 4200;
    private $q;
    private $p;                         //device power
    private $t;
    private $currentTime;

    function __construct($m, $p, $t1)
    {
        $this->m = $m;
        $this->t1 = $t1;
        $this->p = $p * 1000;
        $this->dt = $this->getTemperatureDifference();
        $this->q = $this->getWarmthNeeded();
        $this->currentTime = $this->getCurrentTime();
        $this->t = $this->getResult();
    }

    function getCurrentTime()
    {
        return date("H:i:s");
    }

    function getTemperatureDifference()
    {
        return $this->dt = $this->t2 - $this->t1;
    }

    function getWarmthNeeded()
    {
        return $this->q = $this->c * $this->m * $this->dt;
    }

    function getResult()
    {
        return $this->t = ($this->q / $this->p)/60;
    }
}
