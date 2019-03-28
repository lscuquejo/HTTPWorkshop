<?php

class Functions
{

    private $name;

    public function setName($name) {

        $this->name = $name;

    }

    public function getName() {

        return $this->name;

    }

    public function greetings() {

        if (isset($this->name)){

            echo "hello ".$this->name;

        }

    }

}