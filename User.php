<?php
class User {
    protected $name;
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function talk() {
        echo 'saludo';
        return "Hello world! cambio de prueba";
    }
}
