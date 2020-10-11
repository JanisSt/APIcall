<?php

class Person
{

    private $name;
    private $age;
    private $count;

    public function __construct(string $name, int $age, int $count)
    {


        $this->name = $name;
        $this->age = $age;
        $this->count = $count;
    }

    public function getName():string
    {
return         $this->name;

    }
    public function getAge():int
    {
        return $this->age;
    }
    public function getCount():int
    {
        return $this->count;
    }
    public function toArray():array
    {
        return [
            'name'=>$this->getName(),
            'age'=>$this->getAge(),
            'count'=>$this->getCount(),

        ];
    }

}