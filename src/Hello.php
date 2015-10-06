<?php

namespace Com\Iesebre\Dam2\albertmayor\hellowordlcomposer;


use Faker\Factory;

class Hello
{
    public $faker;
    /**
     * Hello constructor.
     */
    public function __construct()
    {
        $this->faker = Factory::create();
    }
    public function sayHello()
    {
        echo "Hola " . $this->faker->name . "!\n";
    }
}