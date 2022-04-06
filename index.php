<?php

class Engineer
{

    public function Setwork($workname){
        $this->worker = $workname;
    }

    public function doWork(){
        $this->worker->tell();
    }
}

interface Developer
{
    public function tell();
    public function eat();
}

class Wordpress implements Developer
{
    public function tell()
    {
        echo "I do Wordpress";
    }
    public function eat()
    {
        echo "I am Eating";
    }
}

$sabbir = new Engineer;
$workname = new Wordpress;
$sabbir->Setwork($workname);
echo $sabbir->doWork();
